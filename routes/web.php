<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Dashboard;
use App\Livewire\Movimentacao\GestaoEstoque;
use App\Livewire\Produto\ProdutoCreate;
use App\Livewire\Produto\ProdutoEdit;
use App\Livewire\Produto\ProdutoIndex;
use App\Livewire\User\UserEdit;
use App\Livewire\User\UserIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('dashboard', Dashboard::class)->middleware('auth')->name('dashboard');

Route::get('/user', UserIndex::class)->middleware('auth')->name('user.index');

Route::get('/user/edit/{id}', UserEdit::class)->middleware('auth')->name('user.edit');

// Route::get('/logout', Logout::class)->middleware('auth')->name('logout');

Route::get('produto/create', ProdutoCreate::class)->middleware('auth');


Route::get('produto/', ProdutoIndex::class)->middleware('auth');

Route::get('produto/{id}', ProdutoEdit::class)->middleware('auth')->name('prod.edit');

Route::get('/movimentacao/{id}', GestaoEstoque::class)->middleware('auth')->name('movimentar');