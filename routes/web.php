<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('index');
// Route::get('/login','Dashboard\LoginController@login')->name('login');
Auth::routes();


Route::group(['prefix' => 'data'],function(){
    Route::get('dokumen','DataController@dokumen')->name('dokumen');

});

Route::group(['prefix' => 'tentang'],function(){
    Route::get('/profil','HomeController@profil')->name('profil');
    Route::get('/pengurus','HomeController@tim')->name('tim');

});


Route::group(['prefix' => 'kegiatan'],function(){
    Route::get('/seminar&conference','KegiatanController@seminar')->name('seminar');
    Route::get('/pengabdian','KegiatanController@pengabdian')->name('pengabdian');
    Route::get('/pelatihan','KegiatanController@pelatihan')->name('pelatihan');
});


Route::group(['prefix' => 'publikasi'],function(){
    Route::get('/buku','PublikasiController@buku')->name('buku');
    Route::get('/jurnal','PublikasiController@jurnal')->name('jurnal');
});

Route::group(['prefix' => 'destinasi-wisata'],function(){
    Route::get('/{slug}','DestinasiWisataController@destinasiWisata')->name('destinasiWisata');
});

Route::group(['prefix' => 'koleksi'],function(){
    Route::get('/{slug}','KoleksiController@koleksi')->name('koleksi');
});

Route::get('/berita','BeritaController@berita')->name('berita');
Route::get('/berita/{id}/{slug}','BeritaController@showBerita')->name('showBerita');


Route::get('/tujuan-{id}','TujuanController@showTujuan')->name('showTujuan');
Route::get('/kontak','KontakController@kontak')->name('kontak');
Route::post('/kontak','KontakController@postkontak')->name('postKontak');
// Route::get('/pilar-sosial','DataController@sosial')->name('sosial');
// Route::get('/pilar-ekonomi','DataController@ekonomi')->name('ekonomi');
// Route::get('/pilar-hukum','DataController@hukum')->name('hukum');
// Route::get('/pilar-lingkungan','DataController@lingkungan')->name('lingkungan');
Route::get('/galeri-kegiatan','KegiatanController@galeri')->name('galeri');
Route::get('/tentang','HomeController@tentang')->name('tentang');
Route::get('/maps','HomeController@petaKampus')->name('petaKampus');

Route::get('/report','PublikasiController@report')->name('report');
Route::get('/webinar','KegiatanController@webinar')->name('webinar');

Route::get('/kerja-sama','KegiatanController@kerjasama')->name('kerjasama');

Route::get('/survey','KegiatanController@survey')->name('survey');
Route::get('/our-research','ResearchController@research')->name('research');
Route::get('/our-research/{id}','ResearchController@detailResearch')->name('detailResearch');




// ----------------------------------------------------------------------------------------------------
Route::group(['middleware'=>['auth','checkRole:1,2'],'prefix' => 'admin'],function(){
    Route::get('/','Dashboard\HomeController@index')->name('dashboard');

    Route::group(['prefix' => 'berita'],function(){
        Route::get('/','Dashboard\BeritaController@getBerita')->name('getBerita');
        Route::get('/baru','Dashboard\BeritaController@createBerita')->name('createBerita');
        Route::post('/','Dashboard\BeritaController@postBerita')->name('postBerita');
        Route::get('/{id}','Dashboard\BeritaController@editBerita')->name('editBerita');
        Route::patch('/','Dashboard\BeritaController@updateBerita')->name('updateBerita');
        Route::get('/delete/{id}','Dashboard\BeritaController@deleteBerita')->name('deleteBerita');
    });
    Route::group(['prefix' => 'tentang-kami'],function(){
        Route::group(['prefix' => 'visi-misi'],function(){
            Route::get('/','Dashboard\TentangController@getVisiMisi')->name('getVisiMisi');
            Route::post('/','Dashboard\TentangController@postVisiMisi')->name('postVisiMisi');
            Route::patch('/','Dashboard\TentangController@updateVisiMisi')->name('updateVisiMisi');
        });

        Route::group(['prefix' => 'tentang'],function(){
            Route::get('/','Dashboard\TentangController@getTentang')->name('getTentang');
            Route::post('/','Dashboard\TentangController@postTentang')->name('postTentang');
            Route::patch('/','Dashboard\TentangController@updateTentang')->name('updateTentang');
        });

        Route::group(['prefix' => 'profil-sdgs'],function(){
            Route::get('/','Dashboard\TentangController@getProfil')->name('getProfil');
            Route::post('/','Dashboard\TentangController@postProfil')->name('postProfil');
            Route::get('/delete/{id}','Dashboard\TentangController@deleteProfil')->name('deleteProfil');
        });

        Route::group(['prefix' => 'tujuan'],function(){
            Route::get('/','Dashboard\TentangController@getTujuanTentang')->name('getTujuanTentang');
            Route::post('/','Dashboard\TentangController@postTujuanTentang')->name('postTujuanTentang');
            Route::get('/delete/{id}','Dashboard\TentangController@deleteTujuanTentang')->name('deleteTujuanTentang');
        });
    });
    Route::group(['prefix' => 'dokumen'],function(){
        Route::get('/','Dashboard\DokumenController@getDokumen')->name('getDokumen');
        Route::post('/','Dashboard\DokumenController@postDokumen')->name('postDokumen');
        Route::get('/{id}','Dashboard\DokumenController@editDokumen')->name('editDokumen');
        Route::patch('/','Dashboard\DokumenController@updateDokumen')->name('updateDokumen');
        Route::get('/delete/{id}','Dashboard\DokumenController@deleteDokumen')->name('deleteDokumen');

    });

    Route::group(['prefix' => 'galeri'],function(){
        Route::get('/','Dashboard\GaleriController@getGaleri')->name('getGaleri');
        Route::post('/','Dashboard\GaleriController@postGaleri')->name('postGaleri');
        Route::get('/delete/{id}','Dashboard\GaleriController@deleteGaleri')->name('deleteGaleri');
    });

    Route::group(['prefix' => 'banner'],function(){
        Route::get('/','Dashboard\BannerController@getBanner')->name('getBanner');
        Route::post('/','Dashboard\BannerController@postBanner')->name('postBanner');
        Route::get('/delete/{id}','Dashboard\BannerController@deleteBanner')->name('deleteBanner');
    });

    Route::group(['prefix' => 'tujuan'],function(){
        Route::get('/','Dashboard\TujuanController@getTujuan')->name('getTujuan');
        Route::post('/','Dashboard\TujuanController@postTujuan')->name('postTujuan');
        Route::get('/{id}','Dashboard\TujuanController@editTujuan')->name('editTujuan');
        Route::patch('/','Dashboard\TujuanController@updateTujuan')->name('updateTujuan');
    });

    Route::group(['prefix' => 'inbox'],function(){
        Route::get('/','Dashboard\InboxController@getInbox')->name('getInbox');
        Route::get('/{id}','Dashboard\InboxController@showMessage')->name('showMessage');
        Route::patch('/','Dashboard\InboxController@updateInbox')->name('updateInbox');
    });

    Route::group(['prefix' => 'mitra'],function(){
        Route::get('/','Dashboard\MitraController@getMitra')->name('getMitra');
        Route::post('/','Dashboard\MitraController@postMitra')->name('postMitra');
        Route::get('/delete/{id}','Dashboard\MitraController@deleteMitra')->name('deleteMitra');
    });

    Route::group(['prefix' => 'profile'],function(){
        Route::get('/','Dashboard\UserController@profile')->name('profile');
        Route::patch('/','Dashboard\UserController@updateProfile')->name('updateProfile');
    });

    Route::group(['prefix' => 'jurnal'],function(){
        Route::get('/','Dashboard\PublikasiController@getJurnal')->name('getJurnal');
        Route::post('/','Dashboard\PublikasiController@postJurnal')->name('postJurnal');
        Route::get('/{id}','Dashboard\PublikasiController@editJurnal')->name('editJurnal');
        Route::patch('/','Dashboard\PublikasiController@updateJurnal')->name('updateJurnal');
        Route::get('/delete/{id}','Dashboard\PublikasiController@deleteJurnal')->name('deleteJurnal');
    });

    Route::group(['prefix' => 'buku'],function(){
        Route::get('/','Dashboard\PublikasiController@getBuku')->name('getBuku');
        Route::post('/','Dashboard\PublikasiController@postBuku')->name('postBuku');
        Route::get('/{id}','Dashboard\PublikasiController@editBuku')->name('editBuku');
        Route::patch('/','Dashboard\PublikasiController@updateBuku')->name('updateBuku');
        Route::get('/delete/{id}','Dashboard\PublikasiController@deleteBuku')->name('deleteBuku');
    });

    Route::group(['prefix' => 'annual-report'],function(){
        Route::get('/','Dashboard\PublikasiController@getReport')->name('getReport');
        Route::post('/','Dashboard\PublikasiController@postReport')->name('postReport');
        Route::get('/{id}','Dashboard\PublikasiController@editReport')->name('editReport');
        Route::patch('/','Dashboard\PublikasiController@updateReport')->name('updateReport');
        Route::get('/delete/{id}','Dashboard\PublikasiController@deleteReport')->name('deleteReport');
    });

    Route::group(['prefix' => 'kegiatan'],function(){
        Route::group(['prefix' => 'webinar'],function(){
            Route::get('/','Dashboard\KegiatanController@getWebinar')->name('getWebinar');
            Route::post('/','Dashboard\KegiatanController@postWebinar')->name('postWebinar');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deleteWebinar')->name('deleteWebinar');
        });

        Route::group(['prefix' => 'seminar'],function(){
            Route::get('/','Dashboard\KegiatanController@getSeminar')->name('getSeminar');
            Route::post('/','Dashboard\KegiatanController@postSeminar')->name('postSeminar');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deleteSeminar')->name('deleteSeminar');
        });

        Route::group(['prefix' => 'pengabdian'],function(){
            Route::get('/','Dashboard\KegiatanController@getPengabdian')->name('getPengabdian');
            Route::post('/','Dashboard\KegiatanController@postPengabdian')->name('postPengabdian');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deletePengabdian')->name('deletePengabdian');
        });

        Route::group(['prefix' => 'survey'],function(){
            Route::get('/','Dashboard\KegiatanController@getSurvey')->name('getSurvey');
            Route::post('/','Dashboard\KegiatanController@postSurvey')->name('postSurvey');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deleteSurvey')->name('deleteSurvey');
        });

        Route::group(['prefix' => 'pelatihan'],function(){
            Route::get('/','Dashboard\KegiatanController@getPelatihan')->name('getPelatihan');
            Route::post('/','Dashboard\KegiatanController@postPelatihan')->name('postPelatihan');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deletePelatihan')->name('deletePelatihan');
        });

        Route::group(['prefix' => 'kerja-sama'],function(){
            Route::get('/','Dashboard\KegiatanController@getKerjaSama')->name('getKerjaSama');
            Route::post('/','Dashboard\KegiatanController@postKerjaSama')->name('postKerjaSama');
            Route::get('/delete/{id}','Dashboard\KegiatanController@deleteKerjaSama')->name('deleteKerjaSama');
        });


    });

    Route::group(['prefix' => 'research'],function(){
        Route::get('/','Dashboard\ResearchController@getResearch')->name('getResearch');
        Route::get('/create','Dashboard\ResearchController@createResearch')->name('createResearch');
        Route::get('/{id}','Dashboard\ResearchController@editResearch')->name('editResearch');
        Route::post('/','Dashboard\ResearchController@postResearch')->name('postResearch');
        Route::get('/delete/{id}','Dashboard\ResearchController@deleteResearch')->name('deleteResearch');
        Route::patch('/','Dashboard\ResearchController@updateResearch')->name('updateResearch');

    });

    Route::group(['prefix' => 'pilar-sdgs'],function(){
        Route::get('/','Dashboard\PilarController@getPilar')->name('getPilar');
        Route::post('/','Dashboard\PilarController@postPilar')->name('postPilar');
        Route::get('/delete/{id}','Dashboard\PilarController@deletePilar')->name('deletePilar');
    });

    Route::group(['prefix' => 'koleksi'],function(){
        Route::group(['prefix' => 'etnografi'],function(){
            Route::get('/','Dashboard\KoleksiController@getEtnografi')->name('getEtnografi');
            Route::post('/','Dashboard\KoleksiController@postEtnografi')->name('postEtnografi');
            Route::get('/delete/{id}','Dashboard\KoleksiController@deleteEtnografi')->name('deleteEtnografi');
        });

        Route::group(['prefix' => 'geografi'],function(){
            Route::get('/','Dashboard\KoleksiController@getGeografi')->name('getGeografi');
            Route::post('/','Dashboard\KoleksiController@postGeografi')->name('postGeografi');
            Route::get('/delete/{id}','Dashboard\KoleksiController@deleteGeografi')->name('deleteGeografi');
        });

        Route::group(['prefix' => 'filologi'],function(){
            Route::get('/','Dashboard\KoleksiController@getFilologi')->name('getFilologi');
            Route::post('/','Dashboard\KoleksiController@postFilologi')->name('postFilologi');
            Route::get('/delete/{id}','Dashboard\KoleksiController@deleteFilologi')->name('deleteFilologi');
        });
        Route::group(['prefix' => 'cagar-budaya'],function(){
            Route::get('/','Dashboard\KoleksiController@getCagarBudaya')->name('getCagarBudaya');
            Route::post('/','Dashboard\KoleksiController@postCagarBudaya')->name('postCagarBudaya');
            Route::get('/delete/{id}','Dashboard\KoleksiController@deleteCagarBudaya')->name('deleteCagarBudaya');
        });

        Route::group(['prefix' => 'sejarah'],function(){
            Route::get('/','Dashboard\KoleksiController@getSejarah')->name('getSejarah');
            Route::post('/','Dashboard\KoleksiController@postSejarah')->name('postSejarah');
            Route::get('/delete/{id}','Dashboard\KoleksiController@deleteSejarah')->name('deleteSejarah');
        });
    });

    Route::group(['prefix' => 'destinasi-wisata'],function(){
        Route::group(['prefix' => 'kota-jambi'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getKotaJambi')->name('getKotaJambi');
            Route::post('/','Dashboard\DestinasiWisataController@postKotaJambi')->name('postKotaJambi');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteKotaJambi')->name('deleteKotaJambi');
        });

        Route::group(['prefix' => 'muaro-jambi'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getMuaroJambi')->name('getMuaroJambi');
            Route::post('/','Dashboard\DestinasiWisataController@postMuaroJambi')->name('postMuaroJambi');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteMuaroJambi')->name('deleteMuaroJambi');
        });

        Route::group(['prefix' => 'sungai-penuh'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getSungaiPenuh')->name('getSungaiPenuh');
            Route::post('/','Dashboard\DestinasiWisataController@postSungaiPenuh')->name('postSungaiPenuh');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteSungaiPenuh')->name('deleteSungaiPenuh');
        });

        Route::group(['prefix' => 'batanghari'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getBatanghari')->name('getBatanghari');
            Route::post('/','Dashboard\DestinasiWisataController@postBatanghari')->name('postBatanghari');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteBatanghari')->name('deleteBatanghari');
        });

        Route::group(['prefix' => 'bungo'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getBungo')->name('getBungo');
            Route::post('/','Dashboard\DestinasiWisataController@postBungo')->name('postBungo');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteBungo')->name('deleteBungo');
        });

        Route::group(['prefix' => 'kerinci'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getKerinci')->name('getKerinci');
            Route::post('/','Dashboard\DestinasiWisataController@postKerinci')->name('postKerinci');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteKerinci')->name('deleteKerinci');
        });

        Route::group(['prefix' => 'merangin'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getMerangin')->name('getMerangin');
            Route::post('/','Dashboard\DestinasiWisataController@postMerangin')->name('postMerangin');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteMerangin')->name('deleteMerangin');
        });

        Route::group(['prefix' => 'bungo'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getBungo')->name('getBungo');
            Route::post('/','Dashboard\DestinasiWisataController@postBungo')->name('postBungo');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteBungo')->name('deleteBungo');
        });

        Route::group(['prefix' => 'sarolangun'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getSarolangun')->name('getSarolangun');
            Route::post('/','Dashboard\DestinasiWisataController@postSarolangun')->name('postSarolangun');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteSarolangun')->name('deleteSarolangun');
        });

        Route::group(['prefix' => 'tjb'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getTJB')->name('getTJB');
            Route::post('/','Dashboard\DestinasiWisataController@postTJB')->name('postTJB');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteTJB')->name('deleteTJB');
        });

        Route::group(['prefix' => 'tjt'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getTJT')->name('getTJT');
            Route::post('/','Dashboard\DestinasiWisataController@postTJT')->name('postTJT');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteTJT')->name('deleteTJT');
        });

        Route::group(['prefix' => 'tebo'],function(){
            Route::get('/','Dashboard\DestinasiWisataController@getTebo')->name('getTebo');
            Route::post('/','Dashboard\DestinasiWisataController@postTebo')->name('postTebo');
            Route::get('/delete/{id}','Dashboard\DestinasiWisataController@deleteTebo')->name('deleteTebo');
        });
    });

    Route::group(['prefix' => 'tim'],function(){
        Route::get('/','Dashboard\TimController@getTim')->name('getTim');
        Route::post('/','Dashboard\TimController@postTim')->name('postTim');
        Route::get('/delete/{id}','Dashboard\TimController@deleteTim')->name('deleteTim');
    });

    Route::patch('/password','Dashboard\UserController@updatePassword')->name('updatePassword');
    Route::get('/logout','Dashboard\UserController@logout')->name('logout');
});

Route::group(['middleware'=>['auth','checkRole:1'],'prefix' => 'admin'],function(){
    Route::group(['prefix' => 'users'],function(){
        Route::get('/','Dashboard\UserController@getUsers')->name('getUsers');
        Route::post('/','Dashboard\UserController@postUser')->name('postUser');
    });
});
