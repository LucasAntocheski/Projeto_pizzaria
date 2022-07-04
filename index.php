<?php
echo "Bem vindo a Pizzaria de Antocheski" . PHP_EOL;
///////////////////////COLETA DE DADOS////////////////////////|||
echo "Digite seu Nome: ";                                      //
$nome = strtoupper(fgets(STDIN));                       //
                                                              //
echo "Digite seu Telefone: ";                                //
$telefone = (fgets(STDIN));                           //
                                                            //
echo "Digite seu Endereço: ";                              //
$endereco = strtoupper(fgets(STDIN));               //
                                                          //
///////////////////////PROCESSOS/////////////////////////|||
$cardapio = [0,"calabresa" => 35.90,"peperone" => 39.99 ,"toscana" => 40.00 ,"mussarela"=> 25.00 ,
    "portuguesa" => 45.00, "refrigerante" => 10.00]; //associando o Indice (nome da pizza) da Array ao respectivo valor (=>)
$total = 0;
$pergunta = "s";

do {
    echo "Cardápio:
|Calabresa = R$ 35,90 | Peperone = R$ 39,99| Toscana = R$ 40,00| Mussarela = R$ 25,00| Portuguesa = R$ 45,00|
refrigerante = R$ 10,00|". PHP_EOL . PHP_EOL;

        echo "Escolha seu pedido: ";
        $pedido = strtolower(trim(fgets(STDIN)));
        $total = $total + $cardapio[$pedido]; // O cálculo será feito : A soma dele mesmo + o valor do índice que o usuário colocar
        echo "Valor do pedido R$" . $total . PHP_EOL;
        echo "Deseja colocar mais algo em seu pedido? {s/n}: ";
        $pergunta = strtolower(trim(fgets(STDIN)));
        $listapedido[] = $pedido; // Aqui será armazenada em uma Array todos os pedidos realizados no loop (do_while)

    if ($pergunta != "s") {
        echo "Olá ". $nome;
        echo " Itens de seu pedido:". PHP_EOL;
        print_r($listapedido). PHP_EOL; // Aqui será mostrado a array dos pedidos que foram feito de forma mais amigável.
        //var_dump($listapedido); Método alteranativo para exibir a lista
        echo "seu endereço é :". $endereco. "seu numero de contato é:". $telefone. PHP_EOL;
        echo "O valor total de sua compra é de:". $total;
        break;
    }
}while ($pergunta != "n");
