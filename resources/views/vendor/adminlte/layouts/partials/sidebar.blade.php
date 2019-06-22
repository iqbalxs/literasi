<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

<!-- Sidebar user panel (optional) -->
@if (! Auth::guest())
    <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ isset(Auth::user()->avatar) ? asset('/img/'.Auth::user()->avatar) : asset('/img/user1-128x128.jpg') }}" class="img-circle" alt="User Image" />
        </div>
        <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
        </div>
    </div>
@endif

<!-- search form (Optional) -->
<form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
      <span class="input-group-btn">
        <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
</form>
<!-- /.search form -->

<!-- Sidebar Menu -->
<ul class="sidebar-menu">
    <li class="header">MAIN</li>
    <!-- Optionally, you can add icons to the links -->
    <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
    
    @role('admin')
    <li class="{{set_active('announcements.index')}}"><a href="{{ route('announcements.index') }}"><i class='fa fa-volume-up'></i> <span>Pengumuman</span></a></li>
    <li class="{{set_active('news.index')}}"><a href="{{ route('news.index') }}"><i class='fa fa-newspaper-o'></i> <span>Berita</span></a></li>
    <li class="{{set_active('articles.index')}}"><a href="{{ route('articles.index') }}"><i class='fa fa-pencil'></i> <span>Artikel</span></a></li>
    <li class="{{set_active('user.index')}}"><a href="{{ route('user.index') }}"><i class='fa fa-users'></i> <span>Pengguna</span></a></li>
    <li class="treeview {{set_active(['dictionary','qna','greeting','history','background','orgchart'])}}">
        <a href="#"><i class='fa fa-link'></i> <span>Web</span> <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
            <li class="{{set_active('dictionary')}}"><a href="{{ route('dictionary') }}">Kamus</a></li>
            <li class="{{set_active('qna')}}"><a href="{{ route('qna') }}">Tanya Jawab</a></li>
            <li class="{{set_active('greeting')}}"><a href="{{ route('greeting') }}">Sambutan</a></li>
            <li class="{{set_active('history')}}"><a href="{{ route('history') }}">Sejarah</a></li>
            <li class="{{set_active('background')}}"><a href="{{ route('background') }}">Latar Belakang</a></li>
            <li class="{{set_active('orgchart')}}"><a href="{{ route('orgchart') }}">Struktur Organisasi</a></li>
        </ul>
    </li>
    <li class="header">GURU</li>
    <li class="{{set_active('karya-guru.index')}}"><a href="{{ route('karya-guru.index') }}"><i class='fa fa-pencil'></i> <span>Karya Guru</span></a></li>
    <li class="{{set_active('publikasi-ilmiah.index')}}"><a href="{{ route('publikasi-ilmiah.index') }}"><i class='fa fa-book'></i> <span>Publikasi Ilmiah</span></a></li>
    <li class="header">SISWA</li>
    <li class="{{set_active('karya-siswa.index')}}"><a href="{{ route('karya-siswa.index') }}"><i class='fa fa-book'></i> <span>Karya Siswa</span></a></li>
    @endrole

    @role('guru')
    <li class="{{set_active('m-karya-guru.index')}}"><a href="{{ route('m-karya-guru.index') }}"><i class='fa fa-pencil'></i> <span>Karya Guru</span></a></li>
    <li class="{{set_active('m-publikasi-ilmiah.index')}}"><a href="{{ route('m-publikasi-ilmiah.index') }}"><i class='fa fa-book'></i> <span>Publikasi Ilmiah</span></a></li>
    <li class="header">SISWA</li>
    <li class="{{set_active('karya-siswa.index')}}"><a href="{{ route('karya-siswa.index') }}"><i class='fa fa-users'></i> <span>Karya Siswa</span></a></li>
    <li class="{{set_active('user-siswa.index')}}"><a href="{{ route('user-siswa.index') }}"><i class='fa fa-check'></i> <span>Verifikasi Akun Siswa</span></a></li>
    @endrole
    
    @role('siswa')
    <li class="{{set_active('students.index')}}"><a href="{{ route('students.index') }}"><i class='fa fa-pencil'></i> <span>Karya Siswa</span></a></li>
    @endrole

    <li class="header">AKUN</li>
    <li class="{{set_active('profile.show')}}"><a href="{{ route('profile.show') }}"><i class='fa fa-user'></i> <span>Profil Saya</span></a></li>
    <li class="{{set_active('profile.password')}}"><a href="{{ route('profile.password') }}"><i class='fa fa-lock'></i> <span>Ubah Password</span></a></li>
</ul><!-- /.sidebar-menu -->

</section>
<!-- /.sidebar -->
</aside>
