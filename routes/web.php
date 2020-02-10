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
use App\Pembeli;
Route::get('/', function () {
    return Pembeli::all();
});

Route::get('halo', function () {
    return 'halo hola';
});
//requered paramenter
Route::get('user/{nama}/{alamat}/{nomor}', function ($nama,$alamat,$nomor) {
    return 'halo'.$nama.' yang beralamat kan di '.$alamat.' nomor '.$nomor;
});
//
Route::get('angkot/{jurusan}/{warna}', function () {
    $jurusan ='cibaduyut-karansetra';
    $data ='angkot jurusan:';
    $warna='warna angkot adalah: merah';
    return $data.' '.$jurusan.' <br>'.$warna;
});
//
Route::get('variable', function () {
    $data1= 'data1';
    $data2='data2';

    $data3='data3';

    $data4='data4';

    $data5='data5';
    return "$data1 <br> $data2<br> $data3<br> $data4<br> $data5";
});

//optional[tidak wajib] paramenter
Route::get('nilai/{nilai?}', function ($nilai= 'kosong') {
    return $nilai;
});
//Route::get('soal/{?}/{?}', function ($a=null,$b=null) {
  //  return $a.'&'.$b;
//});









Route::get('hasil/{nama}/{nilai?}', function ($nama,$nilai=' tidak diketahui <br>dan tidak mendapatkan grade') {
if ($nilai>50){
    echo 'grade A';
}
elseif ($nilai<=50 && $nilai >=40){
    echo 'grade B';
}
elseif ($nilai<=40 && $nilai >=30){
    echo 'grade C';
}
elseif ($nilai<=50 && $nilai >=40){
    echo 'grade D';
}
elseif ($nilai<=20 && $nilai >=10 ){
    echo 'grade E';
    }

    return '<br>'.'nama '.$nama.'<br>'.'nilai'.$nilai;
});
route::get('contoh','ContohController@latihan4');
route::get('pesan2/{makanan?}/{minuman?}/{harganya?}','ContohController@soal');




route::get('buku','BukuController@index');
route::get('create/{judul}','BukuController@create');
route::get('get/{id}','BukuController@show');
route::get('hitung','BukuController@hitungBuku');
route::get('delete/{id}','BukuController@delete');
route::get('update/{id}/{judul}','BukuController@update');

//siswa
route::get('indexsis','SiswaController@index');
route::get('tampil/{id}','SiswaController@tampil');
route::get('createsis/{nama}','SiswaController@create');
route::get('hitungData','SiswaController@hitungData');
route::get('deletesis/{id}','SiswaController@delete');
route::get('updatesis/{id}/{nama}','SiswaController@update');

//route::get('buku','BukuController@create');
//passing data
route::get('pass','PracticeController@pass');
route::get('passing1','PracticeController@pass1');
//pasiing data menggunakan paramenter
route::get('status/{a?}','PracticeController@status');
route::get('buku','PracticeController@loop');

//book
route::get('book','BukuController@index');
route::get('book/{id}','BukuController@show');
route::get('penggajian','GajiController@index');
route::get('penggajian/{id}','GajiController@show');
//belajar temlate
route::get('/profile',function()
{
    return view('profile');
});

route::get('/kontak',function()
{
    return view('contact');
});


route::get('/blog',function()
{
    return view('blog');
});

//templating
//relasi
use App\Mahasiswa;
use App\Dosen;
use App\Hobi;
Route::get('relasi-1', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;

});


Route::get('relasi-2', function() {

    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama dosen pembimbing
    return $mahasiswa->dosen->nama;

});
Route::get('relasi-3', function() {

    # mencari data dosen yang bernama yulianto
    $dosen = Dosen::where('nama', '=', 'abdul musthafa')->first();
    #tampilkan seluruh data mahasiswa didikannya
    foreach ($dosen->mahasiswa as $temp)
    echo '<li> Nama : '.$temp->nama.
            '<strong>'.$temp->nim.'</strong></li>';
});
route::get('relasi-4',function(){
    #mencari data mahasiswa yang bernama noviyanto rachmadi
    $novay = Mahasiswa::where('nama','=','Noviyanto Rachmadi')->first();
    #menampilkan seluruh hobi si novay
    foreach ($novay->hobi as $temp)
    echo '<li>'.$temp->hobi.'</li>';


 });

route::get('relasi-5',function(){
    #mencari data hobbi yang bernama mandi hujan
    $mandi_hujan = Hobi::where('hobi','=','mandi hujan')->first();
    #menampilkan semua mahasiswa yang memiliki hobi mandi hujan
    foreach ($mandi_hujan->mahasiswwa as $temp)
    echo '<li> Nama : '.$temp->nama.
            '<strong>'.$temp->nim.'</strong></li>';


 });
 route::get('eloquent',function(){
     $data = Mahasiswa::with('wali','dosen','hobi')->get();
     return view('eloquent',compact('data'));
 });