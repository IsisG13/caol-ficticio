<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaolController extends Controller
{
    public function exibirResultados()
    {
        // Dados fictícios
        $resultadosFicticios = [
            [
                'no_usuario' => 'Usuário 1',
                'co_sistema' => '1',
                'in_ativo' => 'S',
                'co_tipo_usuario' => 'Tipo 1',
                'receita_liquida' => 1000,
                'custo_fixo' => 500,
                'comissao' => 100,
                'lucro' => 400,
            ],
            [
                'no_usuario' => 'Usuário 2',
                'co_sistema' => '1',
                'in_ativo' => 'S',
                'co_tipo_usuario' => 'Tipo 2',
                'receita_liquida' => 1500,
                'custo_fixo' => 600,
                'comissao' => 200,
                'lucro' => 700,
            ],
            [
                'no_usuario' => 'Usuário 3',
                'co_sistema' => '1',
                'in_ativo' => 'S',
                'co_tipo_usuario' => 'Tipo 1',
                'receita_liquida' => 1200,
                'custo_fixo' => 550,
                'comissao' => 150,
                'lucro' => 500,
            ],
            [
                'no_usuario' => 'Usuário 4',
                'co_sistema' => '1',
                'in_ativo' => 'S',
                'co_tipo_usuario' => 'Tipo 2',
                'receita_liquida' => 800,
                'custo_fixo' => 450,
                'comissao' => 80,
                'lucro' => 270,
            ],
            [
                'no_usuario' => 'Usuário 5',
                'co_sistema' => '1',
                'in_ativo' => 'S',
                'co_tipo_usuario' => 'Tipo 1',
                'receita_liquida' => 1700,
                'custo_fixo' => 700,
                'comissao' => 250,
                'lucro' => 750,
            ],
        ];

        // Passar os dados fictícios para a visualização
        return view('resultado-do-botao-relatorio')->with('resultados', $resultadosFicticios);
    }
}


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

// class CaolController extends Controller
// {
//     public function exibirResultados()
//     {
//         $resultados = DB::select
//         ("SELECT  
//         cao_usuario.*,
//         permissao_sistema.co_sistema,
//         permissao_sistema.in_ativo,
//         permissao_sistema.co_tipo_usuario,
//         ROUND(SUM(cao_fatura.valor - cao_fatura.total_imp_inc * cao_fatura.valor), 3) AS receita_liquida,
//         cao_salario.brut_salario AS custo_fixo,
//         ROUND(SUM((cao_fatura.valor - cao_fatura.total_imp_inc * cao_fatura.valor) * cao_fatura.comissao_cn / 100), 3) AS comissao,
//         ROUND(SUM(cao_fatura.valor - cao_fatura.total_imp_inc * cao_fatura.valor) - cao_salario.brut_salario - SUM((cao_fatura.valor - cao_fatura.total_imp_inc * cao_fatura.valor) * cao_fatura.comissao_cn / 100), 3) AS lucro
//     FROM 
//         cao_usuario
//     INNER JOIN 
//         permissao_sistema ON cao_usuario.co_usuario = permissao_sistema.co_usuario
//     INNER JOIN 
//         cao_os ON cao_usuario.co_usuario = cao_os.co_usuario
//     INNER JOIN 
//         cao_fatura ON cao_os.co_os = cao_fatura.co_os
//     LEFT JOIN 
//         cao_salario ON cao_usuario.co_usuario = cao_salario.co_usuario
//     WHERE 
//         permissao_sistema.co_sistema = 1 
//         AND permissao_sistema.in_ativo = 'S' 
//         AND permissao_sistema.co_tipo_usuario <= 2
//     GROUP BY 
//         cao_usuario.co_usuario, 
//         permissao_sistema.co_sistema, 
//         permissao_sistema.in_ativo, 
//         permissao_sistema.co_tipo_usuario,
//         cao_salario.brut_salario;");

//         return view('resultado-do-botao-relatorio')->with('resultados', $resultados);
//     }
// }
