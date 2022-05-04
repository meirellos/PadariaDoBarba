<?php
  class Login extends CI_Controller{
    public function SalvarRegistro(){
      echo $_POST["nome"];
      echo $_POST["email"];

      $num1 = rand(0,9);
      $num2 = rand(0,9);
      $num3 = rand(0,9);
      $num4 = rand(0,9);
      $num5 = rand(0,9);
      $num6 = rand(0,9);

      $chave = $num1 . '' . $num2 . '' .
               $num3 . '-' . $num4 . '' .
               $num5 . '' . $num6 . '';

      $data = array(
        "email" => $_POST["email"],
        "nome" => $_POST["nome"],
        "chave" => "123-456"
      );

      $this->load->model("loginModel");
      $retorno = $this->loginModel->registrar($data);
      if($retorno){
        echo "Veja seu e-mail para confirmar o cadastro.";
      }else{
        echo "Erro ao criar usuário";
      }
      
    }
    public function Registro(){
      $this->load->view('login/register');
    }
    
  }
?>