<?php

use Illuminate\Support\Facades\Route;

Route::get('/vika', function(){
   return view('welcome');
});

Route::get('/', \App\Livewire\DeveloperForm::class);
