<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to Home Page";
})->name('home');

Route::get('/about', function () {
    return "This is the About Page";
});

Route::get('/program', function () {
    return "This is the Program Page";
});

Route::get('/our-team', function () {
    return "Meet Our Team Page";
});

Route::get('/contact-us', function () {
    return "This is the Contact Us Page";
});


Route::get('/program/{id}', function ($id) {
    return "Detail program dengan ID: " . $id;
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard Page";
    });
    Route::get('/users', function () {
        return "Admin Users Page";
    });
});


Route::redirect('/team', '/our-team');


Route::fallback(function () {
    return "Oops! Halaman tidak ditemukan.";
});




// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return "Hello World!";
// });

// Route::get('/', function () {
// return view('hello');
// });


// Route::get('/profil/{nama}', function ($nama) {
//     return "Tampilkan data mahasiswa bernama $nama";
// });

// Route::get('/stok_barang/{jenis}/{merek}', function ($jenis, $merek) {
//     return view('stok', [
//         'jenis' => $jenis,
//         'merek' => $merek
//     ]); 
// });

// Route::get('/user/{id}', function ($id) {
//     return view('user', ['id' => $id]);
// })->where('id', '[0-9]+');

