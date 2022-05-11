<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Padaria do Barba</title>

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>public/favicon.ico">

  <!-- FontAwesome JS-->
  <script defer src="<?php echo base_url(); ?>public/assets/plugins/fontawesome/js/all.min.js"></script>

  <!-- App CSS -->
  <link id="theme-style" rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/portal.css">

</head>

<body class="app app-login p-0">
  <div class="row g-0 app-auth-wrapper">
    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
      <div class="d-flex flex-column align-content-end">
        <div class="app-auth-body mx-auto">
          <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2" src="<?php echo base_url(); ?>public/assets/images/app-logo.svg" alt="logo"></a></div>
          <h2 class="auth-heading text-center mb-5">Login em sua Conta</h2>
          <div class="auth-form-container text-start">
            <form class="row g-3 needs-validation" action="/index.php/login/validalogin" method="POST">
              <div class="col-12">
                <label for="yourUsername" class="form-label">E-mail</label>
                <div class="input-group has-validation">
                  <span class="input-group-text" id="inputGroupPrepend">@</span>
                  <input type="email" name="email" class="form-control" id="email" required>
                  <div class="invalid-feedback">Por favor digite seu e-mail.</div>
                </div>
              </div>
              <!--//form-group-->
              <div class="col-12">
                <label for="yourPassword" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" required>
                <div class="invalid-feedback">Por favor digite sua senha.</div>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                  <label class="form-check-label" for="rememberMe">Lembrar de mim</label>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Entrar</button>
              </div>

              <div class="col-12">
                <p class="small mb-0">Não tem conta? <a href="<?php echo base_url(); ?>login/registro">Crie sua
                    conta</a></p>
              </div>
              <div class="col-6">
                <p class="small mb-0"><a href="<?php echo base_url(); ?>">Voltar ao Menu</a></p>
              </div>
              <!--//form-group-->
            </form>

          </div>
          <!--//auth-form-container-->

        </div>
        <!--//auth-body-->

        <footer class="app-auth-footer">
          <div class="credits">
            Feito por <a href="https://github.com/meirellos">Vinicius Meirelles</a>
          </div>
        </footer>
        <!--//app-auth-footer-->
      </div>
      <!--//flex-column-->
    </div>
    <!--//auth-main-col-->
    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
      <div class="auth-background-holder">
      </div>
      <div class="auth-background-mask"></div>
      <div class="auth-background-overlay p-3 p-lg-5">
        <div class="d-flex flex-column align-content-end h-100">
          <div class="h-100"></div>
          <div class="overlay-content p-3 p-lg-4 rounded">
            <h5 class="mb-3 overlay-title">Padaria do Barba</h5>
            <div>A melhor padaria de Bauru.
            </div>
          </div>
        </div>
      </div>
      <!--//auth-background-overlay-->
    </div>
    <!--//auth-background-col-->

  </div>
  <!--//row-->


</body>

</html>