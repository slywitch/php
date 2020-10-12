<?php

$hierarquia = array(
    array(
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //inicio diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                    //inicio gerente de vendas
                    array(
                        'nome_cargo'=>'Gerente de Vendas'
                    )
                    //fim gerente de vendas
                )
            ),
            //fim diretor comercial
            //inicio diretor financeiro
            array(
                'nome_cargo'=>'diretor financeiro',
                'subordinados'=>array(
                    //inicio gerente de contas a pagar
                    array(
                        'nome_cargo'=>'gerente de contas a pagar',
                        'subordinados'=>array(
                            //inicio supervisor
                            array(
                                'nome_cargo'=>'supervisor de pagamentos'
                            )
                            //fim supervisor
                        )
                    ),
                    //fim gerente de contas a pagar
                    //iniciio gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de Compras',
                        'subordinados'=>array(
                            //inicio supervisor
                            array(
                                'nome_cargo'=>'supervisor de suprimentos',
                                'subordinados'=>array(
                                    array(
                                        'nome_cargo'=>'comprador'
                                    )
                                )
                            )    
                            //fim supervisor                    
                        )
                    )
                )
            )
        )
        //fim diretor comercial
    )
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);

?>