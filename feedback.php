<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8"> 
    <title>Vueharjutus</title>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet"/>
    <script src="https://unpkg.com/vue"></script>
    <link rel="shortcut icon" href="src/assets/favicon.png"/>
  </head>
  
  <body id="body">
    
      <div class="jumbotron jumbotron-fluid" id="jumbo">
          <div class="container">
            <h1 class="display-4" id="title">Vue.js õppekeskkond</h1>
          </div>
        </div>
        
    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
      <a class="navbar-brand" href="https://vuejs.org/"><img src="src/assets/logoI.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto" id="link">
          <li class="nav-item active">
            <a class="nav-link" href="http://evelinarust.ikt.khk.ee/vue/">Avaleht</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="todo.html">ToDo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="example.html">Näited</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="resources.html">Materjalid</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="game.html">Mängime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="feedback.php">Tagasiside</a>
          </li>
        </ul>
      </div>
    </nav>

    <br>

<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "evelin.arust@khk.ee";
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $subject = $_REQUEST['subject'];
  $comment = $_REQUEST['comment'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>
    <div class="container">
    <form id="form" method="post">
        <div class="form-group">
          <label for="fullname">Nimi</label>
          <input type="fullname" class="form-control" id="name" name ="name" placeholder="Nimi">
        </div>
        <div class="form-group">
          <label for="email">E-mail</label>
          <input type="email" class="form-control" id="email" name ="email" placeholder="E-mail">
        </div>
        <div class="form-group">
          <label for="subject">Teema</label>
          <input type="subject" class="form-control" id="subject" name ="subject" placeholder="Teema">
        </div>
        <div class="form-group">
            <label for="feedback">Tagasiside</label>
            <textarea type="feedback" class="form-control" id="feedback" name="comment" placeholder="Tagasiside" rows="10"></textarea>
          </div>
        <button type="submit" class="btn btn-default" name="submit" style="background-color: #4fc08d;">Saada</button>
      </form>
    </div>
    <?php
  }
?>

<br>
<!--- jalus -->
<div>
<ul class="nav justify-content-center" id="footer">
      <li class="nav-item">
          <span class="navbar-text">&copy;EA 2018</span>
    </li>
</ul>
</div>
<script src="js/bootstrap.min.js"></script>
  </body>
</html>
