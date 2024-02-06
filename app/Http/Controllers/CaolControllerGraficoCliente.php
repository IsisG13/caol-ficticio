<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaolControllerGraficoCliente extends Controller
{
    public function exibirResultados()
    {
        // Dados fictícios para os gráficos
        $resultados = [];
        $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro'];

        // Gerar dados fictícios para cada cliente em cada mês
        for ($i = 0; $i < 10; $i++) {
            foreach ($meses as $mes) {
                $resultados[] = [
                    'no_contato' => "Cliente " . chr(65 + $i),
                    'mes_referencia' => $mes,
                    'receita' => rand(1000, 10000)
                ];
            }
        }

        return view('resultado-do-botao-grafico-cliente')->with('resultados', $resultados);
    }
}
