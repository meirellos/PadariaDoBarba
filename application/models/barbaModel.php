<?php
/* Aqui ficará tudo que será mexido no banco */
  class barbaModel extends CI_Model{
    //Criando novo produto
    public function criaProduto($nome, $perecivel, $valor, $tipo, $imagem){
     $sql = "INSERT INTO Produto
        (nome, perecivel, valor, tipo, imagem) VALUES
        ('" . $nome . "', '" . $perecivel . "', '" . $valor . "', '" . $tipo . "', '" . $imagem . "')";
      $this->db->query($sql);
     return true;
    }

    //Excluindo um produto
    public function excluirProduto($id) {
      $sql = "DELETE FROM produto WHERE ID = ". $id;
      $this->db->query($sql);
      return true;
    }

    //Alterando um produto
    public function alterarProduto($id, $nome, $perecivel, $valor, $tipo, $imagem){
      $sql = "UPDATE produto 
        SET
          nome = '". $nome ."',
          perecivel = '".$perecivel ."',
          valor =' ".$valor ."',
          tipo = '".$tipo ."',
          imagem = '".$imagem ."'
        WHERE id = ".$id."
      ";
      $this->db->query($sql);
      return true;
    }

    //Buscando todos os produtos
    public function selectTodos(){
      $retorno = $this->db->query("SELECT * FROM produto");
      return $retorno->result();
      
    }

    //Buscando produto por ID
    public function selectID($id){
      $retorno = $this->db->query("SELECT * FROM produto where id = " . $id);
      return $retorno->result();
      var_dump($retorno);
    }

    //Buscando pelo tipo do produto
    public function selectTipo($tipo){
      $sql = "SELECT COUNT(1) as total FROM produto where tipo= '" . $tipo ."'";
      $retorno = $this->db->query($sql)->result();
      return $retorno;
    }
  }

?>