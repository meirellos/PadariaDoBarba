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
       
       if($this->ValidaEmail($data["email"])){
        $this->db->insert('usuario', $data);
         return true;
       } else {
         return false;
       }
     }
     catch (Exception $ex) {
      return false;
     }

    }

    public function ValidaEmail($email) {
      $sql = "SELECT count(1) as total FROM usuario WHERE email ='". $email . "'";
      $retorno = $this->db->query($sql)->result();

      //var_dump($retorno);
      if($retorno[0]->total == 0){ //Se encontrou retorna true, pois irá contar os emails e verificar se ja existe
        return true;
      }
      return false;
      
    }

    public function criarSenha($email, $senha, $chave){
      if( $this->ValidaChave($email, $chave)){
        $sql = "UPDATE usuario SET senha = '". $senha ."' 
        WHERE email = '". $email ."' 
        AND chave = '" . $chave ."'"; //Irá dar update somente se a chave for igual a que ja estiver no bd.
        try {
          $this->db->query($sql);
          return true;
        } catch (Exception $ex) {
          return false;
        }

      }else{
        return false;
      }
    }

    public function ValidaChave($email, $chave) {
      $sql = "SELECT count(1) as total FROM usuario WHERE email = '". $email ."' AND chave = '". $chave ."'";
      $retorno = $this->db->query($sql)->result();

      if($retorno[0]->total == 0){ //Se não encontrou, retorna false
        return false;
      }
      return true;

    }

    public function ValidaLogin($email, $senha){
      $sql = "SELECT COUNT(1) AS total FROM usuario WHERE email = '".$email."' AND senha = '".$senha."' ";
      $retorno = $this->db->query($sql)->result();

      if( $retorno[0]->total == 0){
        return false; //Não encontrou o usuário ou a senha
      }
      else {
        return true; //Encontrou
      }
    }
  }
