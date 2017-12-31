<?php
    $hierarquia = array(
        array(
            'nome_cargo'    => 'CEO',
            'subordinados'  => array(
                // Início: Diretor comercial 
                array(
                    'nome_cargo'    => 'Diretor Comercial',
                    'subordinados'  => array(
                        // I nício: Gerente de vendas
                        array(
                            'nome_cargo'    => 'Gerente de vendas'
                        )
                        // Término: Gerente de vendas
                    )
                ),
                // Término: Diretor comercial
                // Início: diretor financeiro
                array(
                    'nome_cargo'    => 'Diretor financeiro',
                    'subordinados'  => array(
                        // Início: Gerente de contas a pagar
                        array(
                            'nome_cargo'    => 'Gerente de contas a pagar',
                            'subordinados'  => array(
                                // Início: supervisor de pagamentos
                                array(
                                    'nome_cargo'    => 'Supervisor de pagamentos'
                                )
                                // Término: supervisor de pagamentos
                            )
                        ),
                        // Término: Gerente de contas a pagar
                        // Início: Gerente de compras
                        array(
                            'nome_cargo'    => 'Gerente de compras',
                            'subordinados'  => array(
                                // Início: Supervisor de suprimentos
                                array(
                                    'nome_cargo'    => 'Supervisor de suprimentos',
                                    'subordinados'   => array(
                                        // Início: Funcionário
                                        array(
                                            'nome_cargo'    => 'Funcionário'
                                        )
                                        // Término: Funcionário
                                    )
                                )
                                // Término: Supervisor de suprimentos
                            )
                        )
                        // Término: Gerente de compras
                    )
                )
                // Término: diretor financeiro
            )
        )
    );
    function exibe($cargos){
        $html = '<ul>';
        foreach ($cargos as $cargo) {
            $html .= "<li>";
            $html .= $cargo['nome_cargo'];
            if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                $html .= exibe($cargo['subordinados']);
            }
            $html .= "</li>";
        }
        $html .= '</ul>';
        return $html;
    }
    echo exibe($hierarquia);
?>