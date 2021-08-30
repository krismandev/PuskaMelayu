<aside class="sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    <img src="{{asset('dashboard/user.png')}}" alt="user-img" class="img-circle">
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> {{auth()->user()->name}}</a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">
                {{-- <li>
                    <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="icon-basket fa-fw"></i> <span class="hide-menu"> eCommerce </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="">Webinar</a> </li>
                        <li> <a href="">Seminars & Conferences</a> </li>
                        <li> <a href="">Pengabdian</a></li>
                        <li> <a href="">Survey</a> </li>
                        <li> <a href="">Buku</a> </li>
                        <li> <a href="{{route('getGaleri')}}">Galeri</a> </li>
                    </ul>
                </li> --}}
                <li>
                    <a href="{{route('dashboard')}}" aria-expanded="false" class="{{(request()->is('admin'))?'active': ''}}"><i class="icon-screen-desktop fa-fw"></i> <span class="hide-menu">Dashboard</span></a>
                </li>
                <li>
                    <a href="{{route('getBanner')}}" aria-expanded="false" class="{{(request()->is('admin/banner*'))?'active': ''}}"><i class="fa fa-picture-o"></i> <span class="hide-menu">Banner</span></a>
                </li>
                <li>
                    <a href="{{route('getBerita')}}" aria-expanded="false" class="{{(request()->is('admin/berita*'))?'active': ''}}"><i class="icon-book-open"></i> <span class="hide-menu">Berita</span></a>
                </li>
                {{-- <li>
                    <a href="{{route('getTentang')}}" aria-expanded="false" class="{{(request()->is('admin/tentang*'))?'active': ''}}"><i class="fa fa-dot-circle-o"></i> <span class="hide-menu">Tentang</span></a>
                </li> --}}
                <li>
                    <a class="waves-effect {{(request()->is('admin/tentang-kami*'))?'active': ''}}" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-dot-circle-o"></i> <span class="hide-menu"> Tentang </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('getProfil')}}">Profil</a> </li>
                        <li> <a href="{{route('getVisiMisi')}}">Visi Misi</a> </li>
                        <li> <a href="{{route('getTujuanTentang')}}">Tujuan</a> </li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect {{(request()->is('admin/tentang-kami*'))?'active': ''}}" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-map-signs"></i> <span class="hide-menu"> Koleksi </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('getEtnografi')}}">Etnografi</a> </li>
                        <li> <a href="{{route('getGeografi')}}">Geografi</a> </li>
                        <li> <a href="{{route('getFilologi')}}">Filologi</a> </li>
                        <li> <a href="{{route('getCagarBudaya')}}">Cagar Budaya</a> </li>
                        <li> <a href="{{route('getSejarah')}}">Sejarah</a> </li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect {{(request()->is('admin/tentang-kami*'))?'active': ''}}" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-location-arrow"></i> <span class="hide-menu"> Destinasi Wisata </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('getKotaJambi')}}">Kota Jambi</a> </li>
                        <li> <a href="{{route('getSungaiPenuh')}}">Kota Sungai Penuh</a> </li>
                        <li> <a href="{{route('getBatanghari')}}">Kabupaten Batanghari</a> </li>
                        <li> <a href="{{route('getBungo')}}">Kabupaten Bungo</a> </li>
                        <li> <a href="{{route('getKerinci')}}">Kabupaten Kerinci</a> </li>
                        <li> <a href="{{route('getMerangin')}}">Kabupaten Merangin</a> </li>
                        <li> <a href="{{route('getMuaroJambi')}}">Kabupaten Muaro Jambi</a> </li>
                        <li> <a href="{{route('getSarolangun')}}">Kabupaten Sarolangun</a> </li>
                        <li> <a href="{{route('getTJB')}}">Kabupaten Tanjung Jabung Barat</a> </li>
                        <li> <a href="{{route('getTJT')}}">Kabupaten Tanjung Jabung Timur</a> </li>
                        <li> <a href="{{route('getTebo')}}">Kabupaten Tebo</a> </li>
                    </ul>
                </li>
                {{-- <li>
                    <a href="{{route('getProfil')}}" aria-expanded="false" class="{{(request()->is('admin/profil-sdgs*'))?'active': ''}}"><i class="fa fa-dot-circle-o"></i> <span class="hide-menu">Profil Pusat Kajian SDGs</span></a>
                </li> --}}
                {{-- <li>
                    <a href="{{route('getDokumen')}}" aria-expanded="false" class="{{(request()->is('admin/dokumen*'))?'active': ''}}"><i class="fa fa-file"></i> <span class="hide-menu">Dokumen</span></a>
                </li> --}}
                <li>
                    <a class="waves-effect {{(request()->is('admin/publikasi*'))?'active': ''}}" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-file-pdf-o"></i> <span class="hide-menu"> Publikasi </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('getJurnal')}}">Jurnal</a> </li>
                        <li> <a href="{{route('getBuku')}}">Buku</a> </li>
                        {{-- <li> <a href="{{route('getReport')}}">SDGs Annual Report</a> </li> --}}
                    </ul>
                </li>
                <li>
                    <a class="waves-effect {{(request()->is('admin/kegiatan*'))?'active': ''}}" href="javascript:void(0);" aria-expanded="false"><i class="icon-pin fa-fw"></i> <span class="hide-menu"> Kegiatan </span></a>
                    <ul aria-expanded="false" class="collapse">
                        {{-- <li> <a href="{{route('getWebinar')}}">Webinar</a> </li> --}}
                        <li> <a href="{{route('getSeminar')}}">Seminars & Conferences</a> </li>
                        <li> <a href="{{route('getPengabdian')}}">Pengabdian</a></li>
                        <li> <a href="{{route('getPelatihan')}}">Pelatihan</a></li>
                        <li> <a href="{{route('getSurvey')}}">Survey</a> </li>
                        <li> <a href="{{route('getKerjaSama')}}">Kerja sama</a></li>
                        <li> <a href="{{route('getGaleri')}}">Galeri</a> </li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="{{route('getPilar')}}" aria-expanded="false" class="{{(request()->is('admin/pilar-sdgs*'))?'active': ''}}"><i class="icon-cursor-move"></i> <span class="hide-menu">Pilar SDGs</span></a>
                </li> --}}

                {{-- <li>
                    <a href="{{route('getResearch')}}" aria-expanded="false" class="{{(request()->is('admin/research*'))?'active': ''}}"><i class="icon-grid"></i> <span class="hide-menu">Research</span></a>
                </li> --}}
                {{-- <li>
                    <a href="{{route('getTujuan')}}" aria-expanded="false" class="{{(request()->is('admin/tujuan*'))?'active': ''}}"><i class="fa fa-info"></i> <span class="hide-menu">Tujuan SDGs</span></a>
                </li> --}}
                <li>
                    <a href="{{route('getTim')}}" aria-expanded="false" class="{{(request()->is('admin/mitra*'))?'active': ''}}"><i class="fa fa-users"></i> <span class="hide-menu">Pengurus</span></a>
                </li>
                <li>
                    <a href="{{route('getMitra')}}" aria-expanded="false" class="{{(request()->is('admin/mitra*'))?'active': ''}}"><i class="icon-globe"></i> <span class="hide-menu">Mitra</span></a>
                </li>
                {{-- <li>
                    <a href="{{route('getInbox')}}" aria-expanded="false" class="{{(request()->is('admin/inbox*'))?'active': ''}}"><i class="icon-envelope-letter fa-fw"></i> <span class="hide-menu">Inbox</span></a>
                </li> --}}
            </ul>
        </nav>

    </div>
</aside>
