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
        @forelse (\App\StudentPost::getRatedPost(4)->get() as $item)
          <div class="media">
            <div class="media-left">
              <a href="{{ url('/karya-siswa/view',$item->slug) }}">
                <img class="media-object" src="{{asset('img/'.$item->image)}}" alt="..." height="70px" width="70px">
              </a>
            </div>
            <div class="media-body">
              <a href="{{ url('/karya-siswa/view',$item->slug) }}">
                <h5 class="media-heading">{{ strtoupper(str_limit($item->title, 29)) }}</h5>
              </a>
              <small>
                <p>
                  by {{ $item->user->name }} | {{ $item->created_at->format('j F Y') }} <br>
                  <i class="fa fa-star"></i> {{ number_format($item->averageRating, 1) }}
                </p>
              </small>
            </div>
          </div>
        @empty
          <p>Belum ada data.</p>
        @endforelse
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