<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Cadastro de veículo</h5>

          <!-- Vertical Form -->
          <form method="POST" action="/index.php/barba/salvarnovo">
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Nome</label>
              <input type="text" class="form-control" name="nome" required>
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Perecivel</label>
              <input type="text" class="form-control" name="perecivel" required>
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Valor</label>
              <input type="text" class="form-control" name="valor" required>
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Tipo</label>
              <input type="text" class="form-control" name="tipo" required>
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Imagem</label>
              <input type="text" class="form-control" name="imagem" required>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Salvar</button>
              <a class="btn btn-secondary" href="/index.php/barba">Voltar/Cancelar</a>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>

  </div>
</section>