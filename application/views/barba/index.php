<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titulo?></title>
</head>
<body>
<h1> Produtos da Padaria do barba </h1>
<a href="/index.php/barba/formnovo" class="btn btn-success" style="text-decoration: none;"> Adicionar </a>



<table border="1">
  <tr>
    <td>Options</td>
    <td>Nome</td>
    <td>Perecivel</td>
    <td>Valor</td>
    <td>Tipo</td>
    <td>Imagem</td>
  </tr>
    <?php 
    echo $tabela;
    ?> 

<!-- AQUI TA AQUELAS IMAGE FEIA <?php
  foreach($lista_produtos as $item){
    echo '
    <div style="border: 1px #ccc solid; border-radius: 5px; padding: 5px;
    width: 150px; height: 250px; float: left;margin:10px">
  <div>
    <img src="' . $item->imagem .'" style="width: 150px">
  </div>
    <div style="text-align: center">
      <h1 style="font-size:10px">' . $item->nome .'</h1>
      <h2 style="font-size:9px">' . $item->perecivel .'</h1>
      <h3 style="font-size:8px">' . $item->valor .'</h1>
      <h3 style="font-size:8px">' . $item->tipo .'</h1>
    </div>
  </div>
    ';
  } 
  ?> -->
</table>

</body>
</html>
