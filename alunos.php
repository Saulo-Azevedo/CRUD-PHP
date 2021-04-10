 <?php
  require 'class.php';
  $alunos = Lista::Alunos();  
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
        <li><a href="index.php">Cadastrar</a></li>
        
      </ul>
    </div>
  </nav>

    <div class="row container">
      <div class="col s12">
        <h5 class="light">Alunos Cadastrados</h5>

        <table>
        <thead>
          <tr>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Editar Aluno</th>
              <th>Apagar Aluno</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach($alunos as $aluno){?>
            <tr>
              <td><?php echo $aluno->nome; ?></td>
              <td><?php echo $aluno->email; ?></td>
              <td><?php echo $aluno->telefone; ?></td>
              <td><a href = 'EditarAluno.php?id= <?php echo $aluno->id; ?>' class='btn btn-small'>Editar</td>
              <td><a href = 'ApagarAluno.php?id= <?php echo $aluno->id; ?>' class='btn btn-small red'>Apagar</td>
            </tr>
          <?php } ?>
         
        </tbody>
      </table>

        
      </div>
      
    </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>