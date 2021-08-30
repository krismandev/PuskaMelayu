<header class="header-one">
    {{-- <div class="top-header">
        <div class="container clearfix">
            <div class="logo float-left"><a href="index.html"><img src="{{asset('frontend/images/logouin.png')}}" alt="" style="max-height: 70px;"></a></div>
            <div class="address-wrapper float-right">
                <ul>
                    <li class="address">
                        <i class="icon flaticon-placeholder"></i>
                        <h6>Jambi:</h6>
                        <p>Jl. Lintas Jambi-Muara Bulian, Mendalo.</p>
                    </li>
                    <li class="address">
                        <i class="icon flaticon-multimedia"></i>
                        <h6>Email kami:</h6>
                        <p>sdgscenter@uinjambi.ac.id</p>
                    </li>

                </ul>
            </div>
        </div>
    </div>  --}}
    <div class="theme-menu-wrapper">
        <div class="container">
            <div class="bg-wrapper clearfix">
                <!-- ============== Menu Warpper ================ -->
                   <div class="menu-wrapper float-left">
                       <nav id="mega-menu-holder" class="clearfix">
                       <ul class="clearfix">
                            <li class="{{(request()->is('/'))?'active': ''}}"><a href="{{route('index')}}">Beranda</a>
                            </li>
                            <li class="{{(request()->is('tentang*'))?'active': ''}}"><a href="#">Tentang</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('profil')}}">Profil</a></li>
                                    <li><a href="{{route('petaKampus')}}">Peta Kampus</a></li>
                                    <li><a href="{{route('tim')}}">Pengurus</a></li>
                               </ul>
                            </li>
                            <li class="{{(request()->is('kegiatan*'))?'active': ''}}"><a href="#">Kegiatan</a>
                                <ul class="dropdown">
                                    {{-- <li><a href="{{route('galeri')}}">Galeri</a></li> --}}
                                    {{-- <li><a href="{{route('webinar')}}">Webinar</a></li> --}}
                                    <li><a href="{{route('seminar')}}">Seminar & Conference</a></li>
                                    <li><a href="{{route('pengabdian')}}">Pengabdian</a></li>
                                    <li><a href="{{route('survey')}}">Survey</a></li>
                                    <li><a href="{{route('pelatihan')}}">Pelatihan</a></li>
                                    <li><a href="{{route('kerjasama')}}">Kerja sama</a></li>
                                    {{-- <li><a href="project-details.html">SDGs Festival</a></li> --}}
                               </ul>
                            </li>
                            <li class="{{(request()->is('publikasi*'))?'active': ''}}"><a href="#">Publikasi</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('jurnal')}}">Jurnal</a></li>
                                    <li><a href="{{route('buku')}}">Buku</a></li>
                               </ul>
                            </li>
                            <li class="{{(request()->is('koleksi*'))?'active': ''}}"><a href="#">Koleksi</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('koleksi','etnografi')}}">Etnografi</a></li>
                                    <li><a href="{{route('koleksi','geografi')}}">Geografi</a></li>
                                    <li><a href="{{route('koleksi','filologi')}}">Filologi</a></li>
                                    <li><a href="{{route('koleksi','cagarbudaya')}}">Cagar Budaya</a></li>
                                    <li><a href="{{route('koleksi','sejarah')}}">Sejarah</a></li>
                               </ul>
                            </li>
                            <li class="{{(request()->is('destinasi-wisata*'))?'active': ''}}"><a href="{{route('research')}}">Destinasi Wisata</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('destinasiWisata','kotajambi')}}">Kota Jambi</a></li>
                                    <li><a href="{{route('destinasiWisata','sungaipenuh')}}">Kota Sungai Penuh</a></li>
                                    <li><a href="{{route('destinasiWisata','batanghari')}}">Kabupaten Batanghari</a></li>
                                    <li><a href="{{route('destinasiWisata','bungo')}}">Kabupaten Bungo</a></li>
                                    <li><a href="{{route('destinasiWisata','kerinci')}}">Kabupaten Kerinci</a></li>
                                    <li><a href="{{route('destinasiWisata','merangin')}}">Kabupaten Merangin</a></li>
                                    <li><a href="{{route('destinasiWisata','muarojambi')}}">Kabupaten Muaro Jambi</a></li>
                                    <li><a href="{{route('destinasiWisata','sarolangun')}}">Kabupaten Sarolangun</a></li>
                                    <li><a href="{{route('destinasiWisata','tjb')}}">Kabupaten Tanjung Jabung Barat</a></li>
                                    <li><a href="{{route('destinasiWisata','tjt')}}">Kabupaten Tanjung Jabung Timur</a></li>
                                    <li><a href="{{route('destinasiWisata','tebo')}}">Kabupaten Tebo</a></li>

                               </ul>
                            </li>
                            <li class="{{(request()->is('berita*'))?'active': ''}}"><a href="{{route('berita')}}">Berita</a>
                            </li>
                            {{-- <li><a href="{{route('kontak')}}">Kontak</a></li> --}}
                       </ul>
                    </nav> <!-- /#mega-menu-holder -->
                   </div> <!-- /.menu-wrapper -->

                   <div class="right-widget float-right">
                       <ul>
                           <li class="social-icon">
                               <ul>
                                <li><a href="https://www.instagram.com/p/CHeWRh7pZ39/?igshid=1k6w1xy12bzns" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            </ul>
                           </li>
                           <li class="search-option">
                               <div class="dropdown">
                                   <button type="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></button>
                                <form action="{{route('berita')}}" method="get" class="dropdown-menu">
                                    <input type="text" name="search" Placeholder="Enter Your Search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                               </div>
                           </li>
                       </ul>
                   </div> <!-- /.right-widget -->
            </div> <!-- /.bg-wrapper -->
        </div> <!-- /.container -->
    </div> <!-- /.theme-menu-wrapper -->
</header>
