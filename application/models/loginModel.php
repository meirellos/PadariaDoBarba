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