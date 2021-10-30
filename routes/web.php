<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route :: get('tentang' , function () {
    return "<h1>Hello</h1>"
        . "selamat datang di webapp saya<br>"
        . "laravel emang keren";
});

Route :: get('saya',function () {
    // me return view ke file yang bernaa 'profile'
    // di folder 'resources/view'
    $mamat = "Mamat Abdullah";
    return view('profile',compact('mamat'));
});


Route :: get('Rio',function () {
    $nama = "Riofhrz";
    $kelas = "XII RPL 3";
    $tgl = "19-09-2004";
    $tb = 168;
    $agama = "Islam";
    return view('Riofhrz',compact('nama', 'kelas', 'tgl', 'tb', 'agama'));
});

Route :: get('norman',function () {
    $nama = "Norman";
    $kelas = "XII RPL 3";
    $tgl = "05-09-2004";
    $tb = 168;
    $agama = "Islam";
    return view('norman',compact('nama', 'kelas', 'tgl', 'tb', 'agama'));
});

Route :: get('iqbal',function () {
    $nama = "iqbal";
    $kelas = "XII RPL 3";
    $tgl = "01-09-2004";
    $tb = 170;
    $agama = "Islam";
    return view('iqbal',compact('nama', 'kelas', 'tgl', 'tb', 'agama'));
});

Route :: get('resta',function () {
    $nama = "Resta";
    $kelas = "XII RPL 3";
    $tgl = "02-09-2004";
    $tb = 170;
    $agama = "Islam";
    return view('resta',compact('nama', 'kelas', 'tgl', 'tb', 'agama'));
});

Route :: get('kiki',function () {
    $nama = "Kiki";
    $kelas = "XII RPL 3";
    $tgl = "03-09-2004";
    $tb = 168;
    $agama = "Islam";
    return view('kiki',compact('nama', 'kelas', 'tgl', 'tb', 'agama'));
});

//Route Parameter
Route :: get ('posting/{id}' , function ($a) {
    return "Halaman Posting ke - <b>$a</b>";
});

//Route Biodata
Route :: get('{param1}/{param2}/{param3}/{param4}/{param5}' ,function($nama, $alamat, $jk, $tb, $bb) {
    return view ('Biodata', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
});

//Route Optimal
Route::get('post/{id}', function ($a = 1) {
    return "Halaman Posting Ke - <b>$a</b>";
});

//ubah route biodata yang di atas ke dalam route optimal
//parameter
Route :: get('biodata/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}', function (
    $nama = null, $alamat = null, $jk = null, $tb = null, $bb = null) {
        return view ('bio', compact('nama', 'alamat', 'jk', 'tb', 'bb'));
    });


//mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', '%$s%')->get();
    return $query;
});

Route::get('testmodel-update', function(){
    $query = App\Models\Post::find(2);
    $query -> title = "Sholawat Penghapus Maksiat";
    $query -> title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

// menambah data baru
Route::get('testmodel-add', function(){
    $query = App\Models\Post::find();
    $query -> title = "Sholawat Penghapus Maksiat";
    $query -> title = "Lorem Ipsum si amet dolor";
    $query->save();
    return $query;
});

Route::get('testmodel-delete/{id]}', function(){
    $query = App\Models\Post::find($id);
    $query->delete();
    return $query;
});

Route::get('barang', function () {
    $barang = App\Models\Barang::all();
    return $barang;
});

Route::get('pembelian', function () {
    $pembelian = App\Models\pembelian::all();
    return $pembelian;
});

Route::get('pembeli', function () {
    $pembeli = App\Models\pembeli::all();
    return $pembeli;
});

Route::get('pesanan', function () {
    $query = App\Models\pesanan::all();
    return $pesanan;
});

Route::get('suplier', function () {
    $suplier = App\Models\suplier::all();
    return $suplier;
});
