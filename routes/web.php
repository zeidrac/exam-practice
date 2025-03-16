<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sample;

Route::get('/test', function () {
    $samples = Sample::all();
    return view('test', compact('samples'));
});

