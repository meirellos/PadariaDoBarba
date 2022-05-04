<?php
  class loginModel extends CI_Model{
    //Registro
      //Validação de e-mail
      //Pré registro -> dados, chave

    //Login
    //Esqueci senha

    //Alterar nome
    //Alterar senha
    //Alterar admin
    //Inativar usuario

    public function Registrar($data) {
      /*
      $data = array(
        "email" => "vinmeirellos@gmail.com",
        "nome" => "Vinicius Meirelles",
        "chave" => "123-456"
      ) */
     try { 
       $this->db->('login', $data);
       return true;
     }
     catch (Exception $ex) {
      return false;
     }

    }
    
  }
?>