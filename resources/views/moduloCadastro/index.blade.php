@extends('layout')

@section('cabecalou')
Adicionar Bolsa
@endsection

@section('conteudo')
    <form action="" method="get">
        @csrf
        <label for="fname">Nome</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Sobrenome</label>
        <input type="text" name="lname" id="lname">
        <a href="/confirmacaoCadastro">
            <input type="submit" value="Salvar">
        </a>
    </form>
@endsection