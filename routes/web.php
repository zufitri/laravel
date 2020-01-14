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
route::get('create','BukuController@create');
route::get('get','BukuController@show');
route::get('delete','BukuController@delete');
route::get('update','BukuController@update');

//route::get('buku','BukuController@create');