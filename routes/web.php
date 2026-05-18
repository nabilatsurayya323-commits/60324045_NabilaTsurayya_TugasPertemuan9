<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerpustakaanController;
use App\Http\Controllers\KategoriController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| ROUTE SEDERHANA
|--------------------------------------------------------------------------
*/

// Return text biasa
Route::get('/hello', function () {
    return 'Hello dari Laravel!';
});

// Return HTML
Route::get('/info', function () {
    return '<h1>Sistem Perpustakaan</h1>
            <p>Selamat datang di aplikasi perpustakaan.</p>';
});

// Return JSON
Route::get('/buku-json', function () {
    return [
        'judul' => 'Laravel Programming',
        'pengarang' => 'John Doe',
        'harga' => 150000
    ];
});


/*
|--------------------------------------------------------------------------
| ROUTE PARAMETER
|--------------------------------------------------------------------------
*/

// Parameter required
Route::get('/buku/{id}', function ($id) {
    return "Detail buku dengan ID: " . $id;
});

// Parameter optional
Route::get('/kategori-data/{nama?}', function ($nama = 'Semua Kategori') {
    return "Kategori: " . $nama;
});

// Multiple parameter
Route::get('/search/{kategori}/{keyword}', function ($kategori, $keyword) {
    return "Mencari buku kategori $kategori dengan keyword $keyword";
});


/*
|--------------------------------------------------------------------------
| ROUTE NAMED
|--------------------------------------------------------------------------
*/

Route::get('/home-perpus', function () {
    return 'Halaman Home Perpustakaan';
})->name('perpus.home');

Route::get('/test-route', function () {

    $url = route('perpus.home');

    return "URL route perpustakaan: " . $url;

});


/*
|--------------------------------------------------------------------------
| ROUTE PERPUSTAKAAN
|--------------------------------------------------------------------------
*/

Route::get('/perpustakaan', function () {

    $nama_sistem = "Sistem Perpustakaan Laravel";
    $versi = "12.x";
    $total_buku = 5;

    $buku_list = [

        [
            'id' => 1,
            'judul' => 'Pemrograman PHP',
            'pengarang' => 'Budi Raharjo',
            'harga' => 75000,
            'stok' => 10
        ],

        [
            'id' => 2,
            'judul' => 'Laravel Framework',
            'pengarang' => 'Andi Nugroho',
            'harga' => 125000,
            'stok' => 5
        ],

        [
            'id' => 3,
            'judul' => 'MySQL Database',
            'pengarang' => 'Siti Aminah',
            'harga' => 95000,
            'stok' => 0
        ],

        [
            'id' => 4,
            'judul' => 'Web Design',
            'pengarang' => 'Dedi Santoso',
            'harga' => 85000,
            'stok' => 8
        ],

        [
            'id' => 5,
            'judul' => 'JavaScript Modern',
            'pengarang' => 'Rina Wijaya',
            'harga' => 80000,
            'stok' => 12
        ]

    ];

    return view(
        'perpustakaan.index',
        compact(
            'nama_sistem',
            'versi',
            'total_buku',
            'buku_list'
        )
    );

})->name('perpustakaan.index');


/*
|--------------------------------------------------------------------------
| DETAIL BUKU
|--------------------------------------------------------------------------
*/

Route::get('/perpustakaan/buku/{id}', function ($id) {

    $buku_list = [

        [
            'id' => 1,
            'judul' => 'Pemrograman PHP',
            'pengarang' => 'Budi Raharjo',
            'harga' => 75000,
            'stok' => 10
        ],

        [
            'id' => 2,
            'judul' => 'Laravel Framework',
            'pengarang' => 'Andi Nugroho',
            'harga' => 125000,
            'stok' => 5
        ],

        [
            'id' => 3,
            'judul' => 'MySQL Database',
            'pengarang' => 'Siti Aminah',
            'harga' => 95000,
            'stok' => 0
        ]

    ];

    $buku = collect($buku_list)->firstWhere('id', $id);

    if (!$buku) {
        abort(404);
    }

    return view('perpustakaan.show', compact('buku'));

})->name('perpustakaan.show');


/*
|--------------------------------------------------------------------------
| ROUTE ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/anggota', function () {

    $anggota_list = [

        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],

        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '082233445566',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ],

        [
            'id' => 3,
            'kode' => 'AGT-003',
            'nama' => 'Andi Wijaya',
            'email' => 'andi@email.com',
            'telepon' => '083344556677',
            'alamat' => 'Surabaya',
            'status' => 'Nonaktif'
        ],

        [
            'id' => 4,
            'kode' => 'AGT-004',
            'nama' => 'Dewi Lestari',
            'email' => 'dewi@email.com',
            'telepon' => '084455667788',
            'alamat' => 'Yogyakarta',
            'status' => 'Aktif'
        ],

        [
            'id' => 5,
            'kode' => 'AGT-005',
            'nama' => 'Rudi Hartono',
            'email' => 'rudi@email.com',
            'telepon' => '085566778899',
            'alamat' => 'Semarang',
            'status' => 'Aktif'
        ]

    ];

    return view('anggota.index', compact('anggota_list'));

})->name('anggota.index');


/*
|--------------------------------------------------------------------------
| DETAIL ANGGOTA
|--------------------------------------------------------------------------
*/

Route::get('/anggota/{id}', function ($id) {

    $anggota_list = [

        [
            'id' => 1,
            'kode' => 'AGT-001',
            'nama' => 'Budi Santoso',
            'email' => 'budi@email.com',
            'telepon' => '081234567890',
            'alamat' => 'Jakarta',
            'status' => 'Aktif'
        ],

        [
            'id' => 2,
            'kode' => 'AGT-002',
            'nama' => 'Siti Aminah',
            'email' => 'siti@email.com',
            'telepon' => '082233445566',
            'alamat' => 'Bandung',
            'status' => 'Aktif'
        ]

    ];

    $anggota = collect($anggota_list)->firstWhere('id', $id);

    if (!$anggota) {
        abort(404);
    }

    return view('anggota.show', compact('anggota'));

})->name('anggota.show');


/*
|--------------------------------------------------------------------------
| ROUTE CONTROLLER
|--------------------------------------------------------------------------
*/

Route::get('/about', [PerpustakaanController::class, 'about']);

Route::get('/kontak', [PerpustakaanController::class, 'kontak']);


/*
|--------------------------------------------------------------------------
| ROUTE KATEGORI
|--------------------------------------------------------------------------
*/

Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

Route::get('/kategori/search/{keyword}',
    [KategoriController::class, 'search'])
    ->name('kategori.search');

Route::get('/kategori/{id}',
    [KategoriController::class, 'show'])
    ->name('kategori.show');


/*
|--------------------------------------------------------------------------
| GROUP ROUTE
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return 'Dashboard Admin';
    });

    Route::get('/buku', function () {
        return 'Manajemen Buku';
    });

    Route::get('/anggota', function () {
        return 'Manajemen Anggota';
    });

});


/*
|--------------------------------------------------------------------------
| FALLBACK ROUTE
|--------------------------------------------------------------------------
*/

Route::fallback(function () {
    return 'Halaman tidak ditemukan';
});