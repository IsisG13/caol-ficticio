<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaolControllerRelatorioCliente extends Controller
{
    public function exibirResultados()
    {
        // Dados fictícios
        $resultadosFicticios = [
            (object) [
                'co_cliente' => 1,
                'no_contato' => 'Contato 1',
                'nu_telefone' => '(11) 12345-6789',
                'mes_referencia' => '2024-01',
                'receita' => 1500,
                'is_champion' => 1,
            ],
            (object) [
                'co_cliente' => 2,
                'no_contato' => 'Contato 2',
                'nu_telefone' => '(22) 98765-4321',
                'mes_referencia' => '2024-01',
                'receita' => 1200,
                'is_champion' => 0,
            ],
            (object) [
                'co_cliente' => 3,
                'no_contato' => 'Contato 3',
                'nu_telefone' => '(33) 55555-5555',
                'mes_referencia' => '2024-02',
                'receita' => 1800,
                'is_champion' => 1,
            ],
            (object) [
                'co_cliente' => 4,
                'no_contato' => 'Contato 4',
                'nu_telefone' => '(44) 44444-4444',
                'mes_referencia' => '2024-02',
                'receita' => 1350,
                'is_champion' => 0,
            ],
            (object) [
                'co_cliente' => 5,
                'no_contato' => 'Contato 5',
                'nu_telefone' => '(55) 33333-3333',
                'mes_referencia' => '2024-03',
                'receita' => 1650,
                'is_champion' => 1,
            ],
            (object) [
                'co_cliente' => 6,
                'no_contato' => 'Contato 6',
                'nu_telefone' => '(66) 22222-2222',
                'mes_referencia' => '2024-03',
                'receita' => 1400,
                'is_champion' => 0,
            ],
            (object) [
                'co_cliente' => 7,
                'no_contato' => 'Contato 7',
                'nu_telefone' => '(77) 66666-6666',
                'mes_referencia' => '2024-04',
                'receita' => 1900,
                'is_champion' => 1,
            ],
            (object) [
                'co_cliente' => 8,
                'no_contato' => 'Contato 8',
                'nu_telefone' => '(88) 77777-7777',
                'mes_referencia' => '2024-04',
                'receita' => 1250,
                'is_champion' => 0,
            ],
            (object) [
                'co_cliente' => 9,
                'no_contato' => 'Contato 9',
                'nu_telefone' => '(99) 88888-8888',
                'mes_referencia' => '2024-05',
                'receita' => 1550,
                'is_champion' => 1,
            ],
            (object) [
                'co_cliente' => 10,
                'no_contato' => 'Contato 10',
                'nu_telefone' => '(00) 99999-9999',
                'mes_referencia' => '2024-05',
                'receita' => 1300,
                'is_champion' => 0,
            ],
        ];

        // Passar os dados fictícios para a visualização
        return view('resultado-do-botao-relatorio-cliente')->with('resultados', $resultadosFicticios);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class CaolControllerRelatorioCliente extends Controller
// {
//     public function exibirResultados()
//     {
//         $resultados = DB::select
//         ("SELECT 
//         cao_cliente.co_cliente,
//         cao_cliente.no_contato,
//         cao_cliente.nu_telefone,
//         DATE_FORMAT(cao_fatura.data_emissao, '%Y-%m') AS mes_referencia,
//         ROUND(SUM(cao_fatura.valor - cao_fatura.total_imp_inc), 3) AS receita,
//         CASE WHEN ROUND(SUM(cao_fatura.valor - cao_fatura.total_imp_inc), 3) = MAX(ROUND(SUM(cao_fatura.valor - cao_fatura.total_imp_inc), 3)) OVER (PARTITION BY DATE_FORMAT(cao_fatura.data_emissao, '%Y-%m')) THEN 1 ELSE 0 END AS is_champion
//     FROM 
//         cao_cliente
//     INNER JOIN 
//         cao_fatura ON cao_cliente.co_cliente = cao_fatura.co_cliente
//     WHERE 
//         cao_cliente.tp_cliente = 'A'
//     GROUP BY 
//         cao_cliente.co_cliente, mes_referencia
//     ORDER BY 
//         mes_referencia, receita DESC;");

//         return view('resultado-do-botao-relatorio-cliente')->with('resultados', $resultados);
//     }
// }
