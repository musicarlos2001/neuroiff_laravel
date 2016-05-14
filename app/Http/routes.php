<?php

Route::get('users', function () {
    return DB::table('users')->get();
});

Route::get('/login', function () {
    return view('templates.tela_login');
});

Route::get('/painel', function () {
    return view('templates.painel');
});

Route::get('/home', function () {
    return view('templates.home');
});

Route::get('/modelo', function () {
    return view('paciente.modelo-logico');
});
Route::group(['prefix' => 'relacionamentos'], function () {
    
    Route::get('/one-to-one','RelationshipsController@oneToOne');
    
    Route::get('/one-to-many','RelationshipsController@oneToMany');
    
    Route::get('/many-to-one','RelationshipsController@manyToOne');
    
    Route::get('/many-to-many','RelationshipsController@manyToMany');
    
});




Route::resource('/paciente','PacienteController');

Route::get('/', function () {
    return view('templates.home');
});
