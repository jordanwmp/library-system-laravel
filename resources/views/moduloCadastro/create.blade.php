@extends('layout')

@section('cabecalou')
Adicionar Bolsa
@endsection

@section('conteudo')
    <ul>
        <li>
            <span id="1">Nome: {{ $fname }}</span><br>
        </li>
        <li>
            <span id="2">Sobrenome: {{ $lname }}</span><br>
        </li>
    </ul>
@endsection