<?php

use App\Http\Controllers\BonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\PaiementEleveController;
use App\Http\Controllers\PaiementEnseignantController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EnseignantController;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthentController;
use App\Http\Controllers\CategorieController;

use App\Http\Controllers\ClasseController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class,'index'])->name('accueil');
Route::get('/catalogues-formations', [FrontendController::class,'cataloguesFormation'])->name('accueil');
Route::get('/calendrier', [FrontendController::class,'calendrier'])->name('accueil');
Route::get('/information-orientation', [FrontendController::class,'informationOrientation'])->name('accueil');
Route::get('/pre-inscription', [FrontendController::class,'preInscription'])->name('pre-inscription');
Route::get('/scolarite-paiement', [FrontendController::class,'scolaritePaiement'])->name('scolarite-paiement');
Route::get('/', [FrontendController::class,'index'])->name('accueil');
Route::get('/', [FrontendController::class,'index'])->name('accueil');
Route::get('/', [FrontendController::class,'index'])->name('accueil');
Route::get('/', [FrontendController::class,'index'])->name('accueil');

Route::post('/pre-inscription', [FrontendController::class,'storePreInscription'])->name('pre-inscription.store');

Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('eleves/paiement', [EtudiantController::class,'paiement'])->name('eleves.paiement')->middleware('auth');
Route::post('eleves/paiement', [EtudiantController::class,'paiementPost'])->name('eleves.paiement.store')->middleware('auth');

Route::get('/dashboard',[DashboardController::class, '__invoke'])->name('dashboard.admin')->middleware('auth');

Route::resource('profils', ProfilController::class);
Route::resource('bons', BonController::class);
Route::resource('depenses', DepenseController::class);
Route::resource('classes', ClasseController::class);
Route::resource('enseignants', EnseignantController::class);
Route::resource('livres', LivreController::class);
Route::resource('matieres', MatiereController::class);
Route::resource('notes', NoteController::class);
Route::resource('parents', ParentController::class);
Route::resource('periodes', PeriodeController::class);
Route::resource('examens', ExamenController::class);
Route::resource('pays', PaysController::class);

Route::resource('eleves', EtudiantController::class)->parameters(['eleves'=>'eleve']);
Route::resource('messages', MessageController::class)->middleware('auth');
Route::resource('comptes', CompteController::class);
Route::resource('categories', CategorieController::class);
Route::resource('articles', ArticleController::class)->middleware('auth');
Route::resource('comptes', CompteController::class);
Route::resource('inscriptions', InscriptionController::class);
Route::resource('paiements-eleves', PaiementEleveController::class);
Route::resource('paiement-enseignant', PaiementEnseignantController::class);

Route::get('/profils-delete/{id}', [ProfilController::class, 'destroy'])->name('profils.delete');
Route::get('/bons-delete/{id}', [BonController::class, 'destroy'])->name('bons.delete');
Route::get('/depenses-delete/{id}', [BonController::class, 'destroy'])->name('depenses.delete');
Route::get('/classe-delete/{id}', [ClasseController::class, 'destroy'])->name('classes.delete');
Route::get('/eleves-delete/{id}', [EtudiantController::class, 'destroy'])->name('eleves.delete');
Route::get('/messages-delete/{id}', [MessageController::class, 'destroy'])->name('messages.delete');
Route::get('/comptes-delete/{id}', [CompteController::class, 'destroy'])->name('comptes.delete');
Route::get('/categories-delete/{id}', [CategorieController::class, 'destroy'])->name('categories.delete');
Route::get('/articles-delete/{id}', [MessageController::class, 'destroy'])->name('articles.delete');
Route::get('/enseignant-delete/{id}', [EnseignantController::class, 'destroy'])->name('enseignants.delete');
Route::get('/livre-delete/{id}', [LivreController::class, 'destroy'])->name('livres.delete');
Route::get('/matiere-delete/{id}', [MatiereController::class, 'destroy'])->name('matieres.delete');
Route::get('/note-delete/{id}', [NoteController::class, 'destroy'])->name('notes.delete');
Route::get('/parent-delete/{id}', [ParentController::class, 'destroy'])->name('parents.delete');
Route::get('/periodes-delete/{id}', [PeriodeController::class, 'destroy'])->name('periodes.delete');
Route::get('/inscriptions-delete/{id}', [InscriptionController::class, 'destroy'])->name('inscriptions.delete');
Route::get('/paiements-eleves-delete/{id}', [PaiementEleveController::class, 'destroy'])->name('paiements-eleves.delete');
Route::get('/paiement-enseignant-delete/{id}', [PaiementEnseignantController::class, 'destroy'])->name('paiement-enseignant.delete');
Route::get('pre-inscrits',[EtudiantController::class,'presInscrits'])->name('eleves.pre-inscrits');
Route::get('non-inscrits',[EtudiantController::class,'nonInscrits'])->name('eleves.non-inscrits');

Route::get('/message-receptions', [MessageController::class, 'reception'])->name('messages.reception');
Route::get('/message-envoi', [MessageController::class, 'envoi'])->name('messages.envoi');
Route::get('login',[AuthentController::class,'login'])->name('login.page');
Route::post('login',[AuthentController::class,'authenticate'])->name('login');
Route::get('logout',[AuthentController::class,'logout'])->name('logout');

Route::post('save-classe-matiere', [ClasseController::class,'saveClasseMatiere'])->name('save-classe-matiere');
Route::post('save-eleve-notes', [EtudiantController::class,'saveEleveNotes'])->name('save-eleve-notes');

//Route::get('paiement-enseignant', [PaiementEleveController::class,'paiementEnseignant'])->name('paiement-enseignant');

Route::post('message-response', [MessageController::class,'responseStore'])->name('messages.response.store')->middleware('auth');
