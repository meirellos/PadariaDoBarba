<section class="section">
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
            <h5 class="card-title">Cadastro de veículo</h5>


            <form method="POST" action="/index.php/barba/salvarnovo">
              <label>Nome</label>
              <input type="text" name="nome"required>
              <br/>
              <label>Perecivel</label>
              <input type="text" name="perecivel"required>
              <br/>
              <label>Valor</label>
              <input type="text" name="valor"required>
              <br/>
              <label>Tipo</label>
              <input type="text" name="tipo"required>
              <br/>
              <label>Imagem</label>
              <input type="text" name="imagem"required>
              <br/>
              <input type="submit" value="Salvar" required>
                <a href="/index.php/barba">Voltar/Cancelar</a>
            </form>

                </div>
            </div>

        </div>

    </div>

</section>