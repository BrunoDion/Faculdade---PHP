<?php 
    /*
    //Declarando um namespace

    namespace App\Produtos;

    //Definindo uma classe dentro do namespace
    class Produto{
        public function exibirDetalhes($detalhes){
            echo "Detalhes do Produto: $detalhes";
        }
    }

    //Importando e utilizando a classe com um alias

    use App\Produtos\Produto as ProdutoApp;
    $produto = new ProdutoApp();
    $produto->exibirDetalhes("Airless de diafragma");
    */


    include('loja.php');
    
    class Pagamento{

        public function relatorio($nome, $item, $valor){
            echo "Nome do Cliente: ".$nome."Item Comprado: ".$item."Valor do Produto: ".$valor;
        }
    }
    
    /*
    class Pagamento{
        public function estatisticas($n){
            echo $n;
        }
    }

    $fin = new Pagamento();

    $n = \Loja\Cliente::pagar();
    $fin->estatisticas($n);
    */

    $fin = new Pagamento();
    $nome = \loja\Cliente::nome();
    $item = \Loja\Pedido::item();
    echo $fin->relatorio($nome, $item, 14.000);

    








    

?>