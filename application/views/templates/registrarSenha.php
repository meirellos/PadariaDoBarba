<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registrar Senha</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="<?php echo base_url(); ?>public/assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="<?php echo base_url(); ?>public/assets/css/portal.css">

</head>

<body class="app app-reset-password p-0">
	<div class="row g-0 app-auth-wrapper">
		<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
			<div class="d-flex flex-column align-content-end">
				<div class="app-auth-body mx-auto">
					<div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2" src="<?php echo base_url(); ?>public/assets/images/app-logo.svg" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-4">Registro de Senha</h2>

					<div class="auth-intro mb-4 text-center">Logo abaixo, coloque seu e-mail, a senha que irá utilizar e a chave
						que foi enviada para seu e-mail. </div>

					<div class="auth-form-container text-left">

						<form class="auth-form resetpass-form" action="/index.php/login/alterarsenha" method="POST">
							<div class="input-group has-validation">
								<span class="input-group-text" id="inputGroupPrepend">@</span>
								<input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
								<div class="invalid-feedback">Por favor digite seu e-mail.</div>
							</div><br>
							<div class="email mb-3">
								<label class="sr-only" for="senha">Senha</label>
								<input id="senha" name="senha" type="password" class="form-control login-email" placeholder="Senha" required="required">
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="chave">Chave</label>
								<input id="chave" name="chave" type="text" class="form-control login-email" placeholder="Chave" required="required">
							</div>
							<!--//form-group-->
							<div class="text-center">
								<button type="submit" class="btn app-btn-primary btn-block theme-btn mx-auto">Criar</button>
							</div>
						</form>

						<div class="auth-option text-center pt-5"><a class="app-link" href="../login/">Login</a> <span class="px-2">|

							</span> <a class="app-link" href="../login/registro">Inscrever-se</a></div>
					</div>
					<!--//auth-form-container-->


				</div>
				<!--//auth-body-->

				<footer class="app-auth-footer">
					<div class="container text-center py-3">
						<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						<div class="credits">
							Feito por <a href="https://github.com/meirellos">Vinicius Meirelles</a>
						</div>

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
						<h5 class="mb-3 overlay-title">TAMO JUNTO ESCOBAR</h5>
						<div>Já vendi o site por 1k500.

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