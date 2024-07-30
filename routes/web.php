<?php

use Illuminate\Support\Facades\Route;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['prefix' => 'api/{domain}', 'middleware' => ['validate.domain']], function () use ($router) {
    $router->get('test', function(){
        dd(1);
    });
    $router->get('maestros', 'MaestroController@index');
    $router->post('maestros', 'MaestroController@store');
    $router->get('maestros/{id}', 'MaestroController@show');
    $router->put('maestros/{id}', 'MaestroController@update');
    $router->delete('maestros/{id}', 'MaestroController@destroy');


    $router->get('parametros', 'ParametroController@index');
    $router->post('parametros', 'ParametroController@store');
    $router->get('parametros/{id}', 'ParametroController@show');
    $router->put('parametros/{id}', 'ParametroController@update');
    $router->delete('parametros/{id}', 'ParametroController@destroy');
    $router->get('parametrosAll', 'ParametroController@indexAll');
    $router->get('parametrosRecursive', 'ParametroController@indexRecursive');

    $router->get('instituciones', 'InstitucioneController@index');
    $router->post('instituciones', 'InstitucioneController@store');
    $router->get('instituciones/{id}', 'InstitucioneController@show');
    $router->put('instituciones/{id}', 'InstitucioneController@update');
    $router->delete('instituciones/{id}', 'InstitucioneController@destroy');

    $router->get('carreras', 'CarreraController@index');
    $router->post('carreras', 'CarreraController@store');
    $router->get('carreras/{id}', 'CarreraController@show');
    $router->put('carreras/{id}', 'CarreraController@update');
    $router->delete('carreras/{id}', 'CarreraController@destroy');


    // DOCUMENTO GESTION RALVA
    $router->get('documento-gestion', 'DocumentoGestionController@index');
    $router->post('documento-gestion', 'DocumentoGestionController@store');
    $router->get('documento-gestion/{id}', 'DocumentoGestionController@show');
    $router->put('documento-gestion/{id}', 'DocumentoGestionController@update');
    $router->put('documento-gestion-eliminar/{id}', 'DocumentoGestionController@destroy');
    $router->get('documento-gestion-codigo', 'DocumentoGestionController@generateCode');

    $router->get('docentes/imagen','DocenteController@imagen');
    $router->get('docentes/listar','DocenteController@index');
    $router->get('docentes/listar/{id}','DocenteController@show');
    $router->post('docentes/registrar','DocenteController@store');
    $router->put('docentes/actualizar/{id}','DocenteController@update');
    $router->get('docentes/eliminar/{id}','DocenteController@destroy');

    $router->get('cursos', 'CursoController@index');
    $router->post('cursos', 'CursoController@store');
    $router->get('cursos/{id}', 'CursoController@show');
    $router->put('cursos/{id}', 'CursoController@update');
    $router->delete('cursos/{id}', 'CursoController@destroy');
    $router->get('cursos/carrera/{id}', 'CursoController@index');


    $router->get('grupo-de-evaluaciones/{curso_id}', 'GrupoDeEvaluacionesController@index');
    $router->post('grupo-de-evaluaciones', 'GrupoDeEvaluacionesController@store');
    $router->put('grupo-de-evaluaciones/{id}', 'GrupoDeEvaluacionesController@update');
    $router->delete('grupo-de-evaluaciones/{id}', 'GrupoDeEvaluacionesController@destroy');

    $router->get('alumnos', 'AlumnoController@index');
    $router->post('alumnos', 'AlumnoController@store');
    $router->get('alumnos/{id}/{dominio}', 'AlumnoController@show');
    $router->put('alumnos/{id}/{dominio}', 'AlumnoController@update');
    $router->delete('alumnos/{id}/{dominio}', 'AlumnoController@destroy');


    $router->post('evaluaciones', 'EvaluacionesController@store');
    $router->get('evaluaciones/{id}', 'EvaluacionesController@index');
    $router->put('evaluaciones/{id}', 'EvaluacionesController@update');
    $router->delete('evaluaciones/{id}', 'EvaluacionesController@destroy');

});

