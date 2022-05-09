<?php

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


Route::get("/", function(){return view("Home.home");})->name("HomePage");

Route::get("/faturamento","FaturamentoController@index")->name("FaturamentoPage");

Route::get("/cadastro/site","CadastroController@procurarDominioGet")->name("CadastroSite");

Route::any("/cadastro/buysite/{site}","CadastroController@buysite")->name("CadastroBuySite");

Route::post("/cadastro/site","CadastroController@procurarDominio")->name("CadastroSiteProcuraDominio");

//Route::get("/cadastro/comprardominio","CadastroController@buydomain")->name("CadastroBuyDomain");
Route::post("/cadastro/comprardominio","CadastroController@buydomain")->name("CadastroBuyDomain");

Route::get("/cadastro","CadastroController@create")->name("Cadastro");
Route::post("/cadastro","CadastroController@store")->name("CadastroStore");
