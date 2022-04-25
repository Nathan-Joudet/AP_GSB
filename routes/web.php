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
/*Route::get('/', function () {
    return view('auth.login');
});*/
Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/visiteur',function () {
    return view('visiteur');
})->name('visiteur');*/


Route::get('/visiteur', function () {
    $visiteurs = App\Models\Visiteur::all();
    return view('visiteur', [
        'visiteurs' => $visiteurs
    ]);
})->name('visiteur');

Route::get('/searchVisiteur',[App\Http\Controllers\VisiteurController::class,'search'])->name('research');

/* ---------- Routes PRATICIEN ----------*/

Route::get('/praticien', function () {
    $praticiens = App\Models\Praticien::all();
    return view('praticien', [
        'praticiens' => $praticiens
    ]);
})->name('praticien');

Route::get('/searchPraticien',[App\Http\Controllers\PraticienController::class,'searchP'])->name('researchP');

/**-------------------------------------------------------------------------------------------------------------------- */

Route::get('/medicament', function () {
    $medicaments = App\Models\Medicament::all();
    return view('medicament', [
        'medicaments' => $medicaments
    ]);
})->name('medicament');

Route::get('/searchMedicament',[App\Http\Controllers\MedicamentController::class,'searchM'])->name('researchM');

/**-------------------------------------------------------------------------------------------------------------------- */

/*Route::get('/praticien', function () {
    return view('praticien');
})->middleware(['auth'])->name('praticien');*/


Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

/**-------------------------------------------------------------------------------------------------------------------- */
// Route::get('/profil', function () {$profils = App\Models\Profil::all();
//     return view('profil', 
//     [
//         'profils' => $profils
//     ]);
// })->name('profil');

// Route::get('/edit', function () {
//     return view('edit');
// });
    
/**-------------------------------------------------------------------------------------------------------------------- */

/* ---------- Routes RAPPORT ----------*/

    Route::get('/rapport', function () {
        return view('rapport');
    })->name('rapport');
});

Route::get('/rapport',[App\Http\Controllers\RapportController::class,'rapport'])->name('rapport');


/* ---------- Routes NOUVEAU RAPPORT ----------*/

Route::get('/nouveaurapport', function () {
    return view('nouveaurapport');
});

Route::post('/nouveaurapport',[App\Http\Controllers\RapportController::class,'store'])->name('nouveaurapport');
Route::get('/nouveaurapport',[App\Http\Controllers\RapportController::class,'rapportVisiteur'])->name('rapportVisiteur'); 




/**-------------------------------------------------------------------------------------------------------------------- */
// Route::get('/profil', function () {$profils = App\Models\Profil::all();
//     return view('profil', 
//     [
//         'profils' => $profils
//     ]);
// })->name('profil');


/*---------- Route PROFIL ----------*/

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

/*---------- Routes EDIT ----------*/

Route::get('/edit', function () {
    return view('edit');
});

Route::post('/edit', [App\Http\Controllers\ProfilController::class, 'storeEdit'])->name('editProfil');
Route::get('/edit', [App\Http\Controllers\ProfilController::class, 'profilVisiteur'])->name('profilVisiteur');



/**-------------------------------------------------------------------------------------------------------------------- */
Route::get('/download-PDF/{id}', [App\Http\Controllers\RapportController::class, 'downloadPDF'])->name('pdf');

require __DIR__.'/auth.php';
