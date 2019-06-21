<div class="col-md-4">
  <aside class="blog-side-bar">
    <!-- Start sidebar widget -->
    @isset($search)    
      <div class="sidebar-widget">
        <!-- Start blog search -->
        <form>                    
          <div class="search-group">                        
            <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
            <input type="search" placeholder="Search">
          </div>                    
        </form>
        <!-- End blog search -->                                
      </div>
    @endisset
    <!-- Start sidebar widget -->
    <div class="sidebar-widget">
      <h4 class="widget-title">Halaman</h4>
      <ul class="widget-catg">                      
        <li><a href="{{ url('/berita') }}">Berita</a></li>
        <li><a href="{{ url('/artikel') }}">Artikel</a></li>
        <li><a href="{{ url('/karya-siswa') }}">Karya Siswa</a></li>
        <li><a href="{{ url('/karya-guru') }}">Karya Guru</a></li>
        <li><a href="{{ url('/publikasi-ilmiah') }}">Publikasi Ilmiah</a></li>
      </ul>
    </div>
    <!-- Start sidebar widget -->
    <div class="sidebar-widget">
      <h4 class="widget-title">Karya Siswa Terbaik</h4>
      <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
    </div>
    <!-- Start sidebar widget -->
    {{-- <div class="sidebar-widget">
      <h4 class="widget-title">Tags</h4>
      <div class="tag-cloud">
        <a href="#">Responsive</a>
        <a href="#">Design</a>
        <a href="#">Modern</a>
        <a href="#">Business</a>
        <a href="#">Software</a>
        <a href="#">Photoshop</a>
        <a href="#">Fashion</a>                      
        <a href="#">News</a>
        <a href="#">Health</a>
        <a href="#">Education</a>
      </div>
    </div> --}}
    <!-- Start sidebar widget -->
    <div class="sidebar-widget">
      <h4 class="widget-title">Archive</h4>
      <ul class="widget-archive">
        <li><a href="#">November 2015<span>(35)</span></a></li>
        <li><a href="#">October 2015<span>(55)</span></a></li>
        <li><a href="#">September 2015<span>(65)</span></a></li>
        <li><a href="#">August 2015<span>(75)</span></a></li>
        <li><a href="#">July 2015<span>(105)</span></a></li>
      </ul>
    </div>
    <!-- Start sidebar widget -->
    <div class="sidebar-widget">
      <h4 class="widget-title">Penting</h4>
      <ul>
        <li><a href="{{ url('/pengumuman') }}">Pengumuman</a></li>
        <li><a href="{{ url('/kamus') }}">Kamus Kata</a></li>
        <li><a href="{{ url('/tanya-jawab') }}">FAQ</a></li>
      </ul>
    </div>
  </aside>
</div>