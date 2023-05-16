<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BolsaDeSangue extends Model
{
    public $timestamps = false;
    protected string $registro;
    protected int $data;
    protected int $hora;
    protected string $tipoHemocomponente;
    protected string $subtipoHemocomponente;
    protected int $numeroDaFracao;
    protected string $tipoSanguineo;
    protected string $fatorRh;
    protected int $numeroDaBolsa;
    protected int $volume;
    protected int $validade;
    protected string $situacaoDaBolsa;
    protected string $segmentoDaBolsa;
    protected string $observacao;
}