<html>

<?php include "cabeçalho.php"?>

<?php

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $bd->query($sql);

$filme1 = [
  "titulo" => "Vingadores: Guerra infinita",
  "sinopse" => "Os Vingadores e seus aliados Super Heróis devem se dispor a sacrificar tudo em uma tentativa de derrotar o poderoso Thanos antes que seu ataque de devastação e ruína dê um fim ao universo.",
  "nota" => "8,4",
  "poster" => "https://www.themoviedb.org/t/p/original/89QTZmn34iwXYeCpVxhC9UrT8sX.jpg"
];
$filme2 = [
  "titulo" => "Batman (2022)",
  "sinopse" => "Após dois anos espreitando as ruas como Batman, Bruce Wayne se encontra nas profundezas mais sombrias de Gotham City. Com poucos aliados confiáveis, o vigilante solitário se estabelece como a personificação da vingança para a população.",
  "nota" => "8,3",
  "poster" => "https://www.themoviedb.org/t/p/original/cKNxg77ll8caX3LulREep4C24Vx.jpg"
];

//$filmes = [$filme1, $filme2];

?>

  
<body>

    <nav class="nav-extended grey lighten-1">
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="right">
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
        </ul>
      </div>
      <div class="nav-header center">
        <h1>CLOROCINE</h1>
      </div> 

      <div class="nav-content tabs-transparent grey darken-1">
        <ul class="tabs tabs-transparent">
          <li class="tab"><a class="active" href="#test1">Todos 1</a></li>
          <li class="tab"><a  href="#test2">Assistidos</a></li>
          <li class="tab"><a href="#test3">Favoritos</a></li>
        </ul>
      </div>
    </nav>

      <?php while ($filme = $filmes->fetchArray()) :?>
      <div class="row">
      <div container>
        <div class="col s3">
          <div class="card hoverable">
            <div class="card-image">
              <img src="<?= $filme["poster"]?>">
              
              <a class="btn-floating halfway-fab waves-effect waves-light red">
                <i class="material-icons">favorite_border</i></a>
            </div>
            <div class="card-content">
              <p class="valign-wrapper"><i class="material-icons amber-text">star</i><?= $filme["nota"]?></p>
              <span class="card-title"><?= $filme["titulo"]?></span>
              <p><?= $filme["sinopse"]?></p>
        </div>
      </div>
    </div>
  </div>
</div>
      </div>
<?php endwhile ?>



  </body>
  
<script>
  M.toast({
    html:"Filme inserido com sucesso"
  })
</script>

</html>