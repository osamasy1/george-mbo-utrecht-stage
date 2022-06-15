
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   

    <main class="container">
<div class="row">
<P>  </p>
 <div class="col-12">

 <div class="alert alert-dark" role="alert">
      <div class="container">
        <h1 class="display-4">Ziekmelden</h1>
        <p class="lead">Telefonisch ziekmelden via: 030-2815175
                            Of digitaal via onderstaand formulier</p>
      </div>
    </div>
 </div>
</div>


<div class="row">
  <div class="col-6">

      <form action="./ziekmelden_script.php" method= "post">
      <P>  </p>
        <div class="form-group">
          <label for="firstname">Voornaam</label>
          <input type="text" class="form-control" id="Voornaam" aria-describedby="firstnameHelp" placeholder="Invoer voornaam" name="Voornaam">
        </div>
        <P>  </p>
        <div class="form-group">
          <label for="infix">Achternaam </label>
          <input type="text" class="form-control" id="Achternaam" aria-describedby="infixHelp" placeholder="Invoer Achternaam" name= "Achternaam">
        </div>
        <P>  </p>
        <div class="form-group">
          <label for="firstname">opleiding</label>
          <input type="text" class="form-control" id="opleiding" aria-describedby="firstnameHelp" placeholder="Invoer opleiding" name="opleiding">
        </div>         
        <P>  </p>

        <div class="form-group">
          <label for="firstname">Omschrijving</label>
          <input type="text" class="form-control" id="Omschrijving" aria-describedby="firstnameHelp" placeholder="" name="Omschrijving">
        </div>        

        <P>  </p>
        <div class="form-group">
          <label for="lastname">Naam ouder bij student 18-*</label>
          <input type="text" class="form-control" id="ouder" aria-describedby="lastnameHelp" placeholder="Invoer naam ouder" name= "ouder">
        </div>
      
        <P>  </p>
        <button type="submit" class="btn btn-primary">Versturen</button>
  
   
        <P>  </p>
        <P>  </p>
        
    </form>
  </div>


</main>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>