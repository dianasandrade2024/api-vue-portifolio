<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class simple extends Controller
{
    Route::get('/data', function (Request $request) {
        return [
    
            `data` => [
                [
                    
                    'nome' => 'Diana Soares',
                    'email' => 'dianasandrade@hotmail.com',
                    'telefone' => '987790327',
                    'assunto' => 'Entrevista de emprego',
                    'mensagem'=> 'Marcar entrevista de emprego',
                ]
    
            ]
        ];
    });
    
    
}
