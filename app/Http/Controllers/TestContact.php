<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestContact extends Controller
{
    public function index(){

        $fakeData = [
            (['id'=> 1,'name' => "teste1",'email' => 'teste1@hotmail.com', 'telephone' => '5521998788218', 'subject' => 'Teste', 'mensage' => 'Marcar teste verifique e-mail']),
            (['id' => 2, 'name' => "teste2", 'email' => 'teste2@hotmail.com']),
            (['id' => 3, 'name' => "teste3", 'email' => 'teste3@hotmail.com']),
        ];
        
        return response()->json( $fakeData);
    }

    public function store(Request $request): RedirectResponse
    {
        $name = $request->input('name');
        $email = $request->input('email');

 
        return redirect('/mycontact');
    }
    
}
