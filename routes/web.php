<?php

use App\Http\Livewire\Admin\AdminView;
use App\Http\Livewire\Admin\AnuncioCreate;
use App\Http\Livewire\Admin\AnuncioDelete;
use App\Http\Livewire\Admin\AnuncioEdit;
use App\Http\Livewire\Admin\AnuncioIndex;
use App\Http\Livewire\Admin\Solicitud;
use App\Http\Livewire\Admin\UsuarioCreate;
use App\Http\Livewire\Admin\UsuarioIndex;
use App\Http\Livewire\Admin\UsuariosEdit;
use App\Http\Livewire\Admin\UsuarioShow;
use App\Http\Livewire\Conocenos\Mision;
use App\Http\Livewire\Conocenos\Valores;
use App\Http\Livewire\Conocenos\Vision;
use App\Http\Livewire\Index;
use App\Http\Livewire\IniciarSesion\Login;
use App\Http\Livewire\Usuarios\Usuario;
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

// Route::get('/', function () {
//     return view('livewire.index');
// });

Route::get('/', Index::class)->name('index');

//conocenos
Route::get('/mision', Mision::class)->name('conocenos.mision');
Route::get('/vision', Vision::class)->name('conocenos.vision');
Route::get('/valores', Valores::class)->name('conocenos.valores');

//Inicio de sesion
Route::get('/login', Login::class)->name('login');

//Admin
Route::get('/admin', AdminView::class)->name('admin.view');
Route::get('/admin/usuarios', UsuarioIndex::class)->name('admin.usuarios');
Route::get('/admin/usuarios/crear-usuario', UsuarioCreate::class)->name('admin.create-user');
Route::get('/admin/usuarios/{usuario}/editar-usuario', UsuariosEdit::class)->name('admin.user-edit');
Route::get('/admin/usuarios/{usuario}/usuario', UsuarioShow::class)->name('admin.show-user');
Route::get('/admin/usuarios/pdf', [UsuarioIndex::class, 'generarPDF'])->name('admin.users.pdf');


//Admin anuncios
Route::get('/admin/anuncios', AnuncioIndex::class)->name('admin.anuncios');
Route::get('/admin/anuncios/crear-anuncio', AnuncioCreate::class)->name('admin.anuncio-create');
Route::get('/admin/anuncios/{anuncio}/editar-anuncio', AnuncioEdit::class)->name('admin.anuncio-edit');
Route::get('/admin/anuncio/{anuncio}/eliminar', AnuncioDelete::class)->name('admin.anuncio-delete');


//Admin Solicitudes
Route::get('/admin/solicitudes', Solicitud::class)->name('admin.solicitudes');



