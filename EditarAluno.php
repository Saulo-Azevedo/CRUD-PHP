 <?php
  require 'class.php';
  if (isset($_GET['id'])) {
    $id =  $_GET['id'];
    $aluno = Lista::AlunoUnico($id);
  }
 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Crud PHP - Cadastro de  Alunos</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="alunos.php">Lista de Alunos</a></li>        
      </ul>
    </div>
  </nav>

    <div class="row container">
    <form action="editar.php" method="POST" class="col s12">
      <h5 class="light">Editar Alunos</h5>

      <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome" value="<?php echo $aluno->nome?>" type="text" class="validate">
          <label for="name">Nome</label>   
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="email"  name="email"  value="<?php echo $aluno->email?>" type="email" class="validate">
          <label for="email">Email</label>   
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input id="tel" name="telefone" value="<?php echo $aluno->telefone?>" type="tel" class="validate">
          <label for="tel">Telefone</label>   
        </div>
      </div>
      <input type="hidden" name="id" value="<?php echo $aluno->id?>">

      <div>
         <button class="btn waves-effect waves-light" type="submit" name="action">Editar
            <i class="material-icons right">send</i>
          </button>
      </div>
      <br>
      <div>
       <a href="#" class="brand-logo"></a>
         <button class='btn btn-small red' type="submit" name="action">Voltar
            <i class="material-icons right">send</i>
          </button>
      </div>

    </form>
  </div>

   


    

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>