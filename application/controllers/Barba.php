<?php

  class Barba extends CI_Controller {
    public function __construct(){
      parent::__construct();
      /*
      if ( !isset($_SESSION["session"]) ){ //isset = se existe.
        echo "Você precisa estar logado.";
        header("Location: /index.php/login");
      } */
    }

    public function index() {
      $this->load->model("barbamodel");

      $produtos = $this->barbamodel->selectTodos(); //Indo no model e executando a funcao selectTodos.
      $tabela = "";

      //echo "Bem vindo " . @$_SESSION["session"]["email"];
      foreach($produtos as $item) {
        //Passando por GET
        $tabela = $tabela . " <tr>";
          if( isset($_SESSION["session"])){
            $tabela = $tabela ."
          <td style='cursor: pointer'>
                <a href='/index.php/barba/alterar?id=" . $item->id . "'>
                ✏️</a> 
                <a href='/index.php/barba/excluir?id=" . $item->id . "'>
              ❌</a> 
              </td>";
            }

            $tabela = $tabela ."
              <td>". $item->nome."</td>
              <td>". $item->perecivel."</td>
              <td>". $item->valor."</td>
              <td>". $item->tipo."</td>
              <td>
                <img src='". $item->imagem ."' style='width:150px'/>
              </td>
          </tr>
        ";
      }

      //var_dump($produtos);
      //echo json_encode($produtos);
      $variavel = array(
        "lista_produtos" => $produtos,
        "tabela" => $tabela,
        "titulo" => "Você está em Padaria do Barba",
        "sucesso" => "Produto adicionado com sucesso!",
        "erro" => "Erro ao adicionar produto."
      );
       
      $this->load->view("barba/index", $variavel);
    }
    
    //Função de criação de um produto
    public function novo(){
      $nome = $_POST['nome'];
      $perecivel = $_POST['perecivel'];
      $valor = $_POST['valor'];
      $tipo = $_POST['tipo']; 
      $imagem = $_POST['imagem']; 

      $data = array(
        "nome" => $nome,
        "perecivel" => $perecivel,
        "valor" => $valor,
        "tipo" => $tipo,
        "imagem" => $imagem
      );

      $this->load->model("barbamodel");
      $this->barbamodel->criaProduto($data);
     var_dump($data);
    }

    //Excluindo um produto
    public function excluir(){
      $this->load->model("barbamodel");

      $id = $_GET["id"];
      
      $this->barbamodel->excluirProduto($id);

      header("Location: /index.php/barba");
    }

    //Alterando um produto
    public function alterar(){
      $this->load->model("barbamodel");

      $id = $_GET["id"];
      $retorno = $this->barbamodel->selectID($id);
      $data = array(
        "titulo" => "Alteração de produtos",
        "produto" => $retorno[0]
      );

      $this->load->view("barba/formAlterar", $data);
    }

    //Salvando alteração do produto
    public function salvarAlteracao() {

      $this->load->model("barbamodel");

      $id = $_POST["id"];
      $nome = $_POST["nome"];
      $perecivel =  $_POST["perecivel"];
      $valor =  $_POST["valor"];
      $tipo =  $_POST["tipo"];
      $imagem = $_POST["imagem"]; 
      
      $retorno = $this->barbamodel->alterarProduto( $id, $nome, $perecivel, $valor, $tipo, $imagem);
      if ($retorno == true) {
        header('location: /index.php/barba');
      }
      else{
        echo "Erro ao alterar.";
      }
     }

    //Linkando a view formNovo, onde tem o formulario de um novo produto
    public function formNovo(){
      $this->load->view("barba/formnovo");
    }

    //Salvando um novo produto
    public function salvarNovo(){
      $this->load->model("barbamodel");

      $nome = $_POST['nome'];
      $perecivel = $_POST['perecivel'];
      $valor = $_POST['valor'];
      $tipo = $_POST['tipo'];
      $imagem = $_POST['imagem'];

      /*
      $retorno = $this->barbamodel->selectTipo($tipo);
      //var_dump($retorno);

      if( $retorno[0]->total > 0 ) {
        echo "Não pode incluir, já existe um total de: " . $retorno[0]->total . " Itens" ;
      }else{
        $retorno = $this->barbamodel->criaProduto($nome, $perecivel, $valor, $tipo, $imagem);
        header("location: /index.php/barba");
      } */
     }

  }

?>