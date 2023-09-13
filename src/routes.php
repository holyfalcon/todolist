<?php

use Illuminate\Support\Facades\Route;
use Todolist\TodolistController;
Route::resource('/task', 'DevLabs\Todolist\TodolistController');
