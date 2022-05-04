<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form method="POST" action="/index.php/barba/salvaralteracao">
        <input type="hidden" name="id" value="<?php echo $produto->id; ?> "/>

        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $produto->nome; ?>" required/>
        <br />

        <label>Perecivel</label>
        <input type="text" name="perecivel" id="perecivel" value="<?php echo $produto->perecivel; ?>" required/>
        <br />

        <label>Valor</label>
        <input type="text" name="valor" id="valor" value="<?php echo $produto->valor; ?>" required/>
        <br />

        <label>Tipo</label>
        <input type="text" name="tipo" value="<?php echo $produto->tipo; ?>"required/>
        <br />

        <label>Imagem</label>
        <input type="text" name="imagem" value="<?php echo $produto->imagem; ?>"required/>
        <br />
        
        <br />
        <input type="submit" value="Salvar" />
        <a href='/index.php/barba'>Voltar/Cancelar</a>

    </form>
</body>
</html>