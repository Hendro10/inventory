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

Route::get('/hello', function () {
    $hello = 'Hello World';
    dd($hello);
    
    return $hello;
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/barang/fasilkom/monotor ASUS', function () {
    echo '<h2 style="text-align: center"><u>Welcome monitor ASUS</u></h2>';
});

Route::get('/barang/{nama}', function ($nama) {
    return "Tampilkan data barang bernama $nama";
}); 
    
Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek) {
    return "Cek sisa stok untuk $jenis $merek";
});

Route::get('/stok_barang/{jenis?}/{merek?}', 
    function ($a = 'smartphone',$b = 'samsung') {
    return "Cek sisa stok untuk $a $b";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
});

Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');
     
Route::get('/user/{id}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
    Route::redirect('/contact-us', '/hubungi-kami');

Route::prefix('/admin')->group(function () {
    Route::get('/inventory', function () {
    echo "<h1>Daftar Inventory</h1>";
});
    Route::get('/barang', function () {
    echo "<h1>Daftar Barang</h1>";
});
    Route::get('/karyawan', function () {
    echo "<h1>Daftar Karyawan</h1>";
});
});

Route::fallback(function () {
    return "Maaf, alamat tidak ditemukan";
});

Route::get('/buku/1', function () {
    return "Buku ke-1";
});
    Route::get('/buku/1', function () {
    return "Buku saya ke-1";
});
    Route::get('/buku/1', function () {
    return "Buku kita ke-1";
});    

Route::get('/buku/{a}', function ($a) {
    return "Buku ke-$a";
});
Route::get('/buku/{b}', function ($b) {
    return "Buku saya ke-$b";
});
Route::get('/buku/{c}', function ($c) {
    return "Buku kita ke-$c";
});

Route::get('/barang/{nama}/{kode}/{jumlah}', 
    function ($nama, $kode, $jumlah) {
    return view('inventory.barang')
    ->with('nama', $nama)
    ->with('kode', $kode)
    ->with('jumlah', $jumlah);
});
 
Route::get('/barang/ilkom/inventoryku', function () {
    $arrBarang = ["Monitor ASUS","Samsung Galaxy A52","Lenovo Flex 5",
    "CPU Rakitan", "Kabel Printer"];
    
    return view('inventory.barang',['barang' => $arrBarang]);
});   
      
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
