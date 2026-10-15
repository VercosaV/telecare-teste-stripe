<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProntuarioController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\EspecialidadeController;
use App\Http\Controllers\pagamentos\StripeController;


Route::resource('pacientes', PacienteController::class);

Route::resource('prontuarios', ProntuarioController::class);

Route::resource('especialidades', EspecialidadeController::class);

Route::resource('profissionais', ProfController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); //->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('stripe/doacao', [StripeController::class, 'doacao'])
->name('stripe.doacao');

Route::post('stripe/pagamento', [StripeController::class, 'pagamento'])
->name('stripe.pagamento');

Route::get('stripe/sucesso', [StripeController::class, 'sucesso'])
->name('stripe.sucesso');

Route::get('stripe/cancelado', [StripeController::class, 'cancelado'])
->name('stripe.cancelado');

