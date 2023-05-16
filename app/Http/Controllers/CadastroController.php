<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index(Request $request)
    {
        if(!empty($request->all())){
            $dados = $request->all();
            $fname = $dados['fname'];
            $lname = $dados['lname'];
            return view('moduloCadastro.create', compact('fname','lname'));
        }
        return view('moduloCadastro.index');
    }

    public function create(Request $request)
    {
        $dados = $request->all();
        $fname = $dados['fname'];
        $lname = $dados['lname'];
        // print_r($dados);
        return view('moduloCadastro.create', compact('fname','lname'));
    }

    public function store()
    {
        //
    }

    public function destroy(Request $request)
    {
        //
    }
}