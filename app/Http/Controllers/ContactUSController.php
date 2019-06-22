<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = ContactUS::query();

        $data = $contacts->paginate(20);

        return view('contacts.index')->with(compact('data'));
    }

    /**
     * Show the detail
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = ContactUS::findOrFail($id);
        
        return view('contacts.show')->with(compact('contact'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUS()
    {
        return view('contactUS');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'phone' => 'required',
        		'message' => 'required'
        	]);

        ContactUS::create($request->all());

        return back()->with('success', 'Terima Kasih telah menghubungi kami!');
    }
}
