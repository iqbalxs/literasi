<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::query();
        
        if ($request->has('type')) {
            $type = $request->get('type', 'siswa');
            $users->whereRoleIs($type);
        }

        $users = $users->paginate(20);

        // simple use = whereRoleIs
        return view('users.index')->with(compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request, [
          'name' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users',
          'password' => 'required|string|min:6|confirmed',
          'type' => 'required|string',
          'avatar' => 'image|max:1024',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->attachRole($request->type);

        if ($request->hasFile('avatar')) {
          // mengambil image yang diupload berikut ekstensinya
          $filename = null;
          $uploaded_image = $request->file('avatar');
          $extension = $uploaded_image->getClientOriginalExtension();
          // membuat nama file random dengan extension
          $filename = md5(time()) . '.' . $extension;
          $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
          // memindahkan file ke folder public/img
          $uploaded_image->move($destinationPath, $filename);
          
          // save
          $user->avatar = $filename;     
          $user->save();
        }

        Session::flash("flash_notification", [
          "level"=>"success",
          "message"=>"Akun dengan nama $user->name berhasil dibuat"
        ]);
        
        return redirect()->route('user.index');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        
        return view('users.edit')->with(compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|unique:users,email,' . $id,
        'avatar' => 'image|max:1024',
        'type' => 'required|string',
      ]);

      $user = User::find($id);
      
      // update role user jika ada perubahan
      foreach ($user->roles as $role) {
        if ($request->type != $role->name) {
          $user->detachRole($user->role);
          $user->attachRole($request->type);
        }
      }

      if ($request->hasFile('avatar')) {
        // mengambil image yang diupload berikut ekstensinya
        $filename = null;
        $uploaded_image = $request->file('avatar');
        $extension = $uploaded_image->getClientOriginalExtension();
        // membuat nama file random dengan extension
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_image->move($destinationPath, $filename);
        // hapus image lama, jika ada
        if ($user->avatar) {
          $old_image = $user->avatar;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
          . DIRECTORY_SEPARATOR . $user->avatar;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        // ganti field image dengan image yang baru
        $user->avatar = $filename;
      }

      $user->name = $request->get('name');
      $user->email = $request->get('email');
      $user->save();
    
      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Akun $user->name berhasil diubah"
      ]);

      return redirect()->route('user.index');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        $user->detachRole($user->role);
        $avatar = $user->avatar;
        if(!$user->delete()) return redirect()->back();

        // handle hapus data via ajax
        if ($request->ajax()) return response()->json(['id' => $id]);

        // hapus photo lama, jika ada
        if ($avatar) {
            $old_avatar = $user->avatar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
                . DIRECTORY_SEPARATOR . $user->avatar;

            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
            }
        }

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Data berhasil dihapus"
        ]);

        return redirect()->route('user.index');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profiles.edit',compact('user'));
    }

    public function updateProfile(Request $request)
  	{
  		$user = Auth::user();
  		
  		$this->validate($request, [
  			'name' => 'required',
  			'email' => 'required|unique:users,email,' . $user->id,
  			'avatar' => 'image|max:1024',
  		]);

      if ($request->hasFile('avatar')) {
        // menambil image yang diupload berikut ekstensinya
        $filename = null;
        $uploaded_image = $request->file('avatar');
        $extension = $uploaded_image->getClientOriginalExtension();
        // membuat nama file random dengan extension
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // memindahkan file ke folder public/img
        $uploaded_image->move($destinationPath, $filename);
        // hapus image lama, jika ada
        if ($user->avatar) {
          $old_image = $user->avatar;
          $filepath = public_path() . DIRECTORY_SEPARATOR . 'img'
          . DIRECTORY_SEPARATOR . $user->avatar;
          try {
            File::delete($filepath);
          } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
          }
        }
        // ganti field image dengan image yang baru
        $user->avatar = $filename;
      }

      $user->name = $request->get('name');
      $user->email = $request->get('email');        
      $user->save();
  	
  		Session::flash("flash_notification", [
  			"level"=>"success",
  			"message"=>"Profil berhasil diubah"
  		]);

  		return redirect('profile');
  	}

    public function editPassword(){
      return view('profiles.edit-password');
    }

    public function updatePassword(Request $request){
      $user = Auth::user();

      $this->validate($request, [
        'password' => 'required|passcheck:' . $user->password,
        'new_password' => 'required|confirmed|min:6',
      ], [
        'password.passcheck' => 'Password lama tidak sesuai'
      ]);

      $user->password = bcrypt($request->get('new_password'));
      $user->save();
      
      Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Password berhasil diubah"
      ]);

      return redirect('profile/password');
    }
}
