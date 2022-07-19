<html>
  <?php include "cabeçalho.php"?>

  <link rel="stylesheet" href="style.css">
  <body>
    <nav class="nav-extended grey">
      <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="cadastrar.php">Cadastrar</a></li>
        </ul>
      </div>
      <div class="nav-wrapper">
        <div class="nav-header center">
          <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
          <ul class="tabs tabs-transparent grey lighten-1">
            <li class="tab"><a class="active" href="galeria.php">Todos</a></li>
            <li class="tab"><a href="assistidos">assistidos</a></li>
            <li class="tab"><a href="#test3">favoritos</a></li>
          </ul>
        </div>
      </div>     
    </nav>

    <div class="row">
      <form action="inserirfilme.php" method="POST">
        <div class="col s6 offset-s3">
          <div class="card grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Cadastrar Filmes</span>
              <div class="row">
                <div class="input-field col s12">
                  <input  id="titulo" type="text" class="validate" name="titulo" require>
                  <label for="Titulo do filme">Titulo do filme</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <input  id="Sinopse" name="sinopse" type="text" class="validate" require>
                  <label for="Sinopse">Sinopse</label>
                </div>
              </div>
            </div> 

            <div class="row">
              <div class="input-field col s4">
                <input  id="nota_filme" name="nota" type="number"  step=".1" min=0 max=10 class="validate" require>
                <label for="nota">Nota</label>
              </div>
            </div>
                    <!--Imput capa -->
            <div class="file-field input-field">
              <div class="btn purple lighten-2 black-text">
                <span>Capa</span>
                <input type="file"  name="poster">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" name="poster"/>
              </div>
            </div>
        
      
            <div class="card-action">
              <a class=" btn waves-effect waves-light red" href="galeria.php"></i>Cancelar</a>
              <button type="submit" class="waves-effect waves-light btn purple" href="inserirfilmes.php">Confirmar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
      

  </body>
</html>