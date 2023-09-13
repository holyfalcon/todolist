<?php

use Illuminate\Support\Facades\Route;
use DevLabs\Todolist\TodolistController;
Route::resource('/task', 'DevLabs\Todolist\TodolistController');
