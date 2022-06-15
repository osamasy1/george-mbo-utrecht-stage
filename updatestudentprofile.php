<?php
  
include("./connect_db.php");

$sql = "SELECT * FROM `student`";

$result = mysqli_query($conn, $sql);

$array = mysqli_fetch_assoc($result);

// echo"<pre>"; var_dump($array); echo "</pre>"; 

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Wijzigen Student</title>
</head>

<body>
  <main class="container">
<div class="row">
  <div class="col-12">
    <div class="jumpbotron jumpbotron-fluid">
      <div class="container">
        <h1 class="display-4">Wijzigen</h1>
  </div>
</div>

<div class="row">
  <div>
    <form action="./updatestudentprofilescript.php" method="post">
    <div class="form-group">
      <label for="voornaam" class="form-label">voornaam</label>
      <input type="text" class="form-control" id="voornaam" aria-describedby="voornaamHelp" placeholder="voornaam" name="voornaam" value="<?php echo $array["voornaam"]?>">
    </div>
    
    <div class="form-group">
      <label for="tussenvoegsel">tussenvoegsel</label>
      <input type="tussenvoegsel" class="form-control" id="tussenvoegsel" aria-describedby="infixHelp" placeholder="tussenvoegsel" name="tussenvoegsel" value="<?php echo $array["tussenvoegsel"]?>">
    </div>
    
    <div class="form-group">
      <label for="achternaam" class="form-label">achternaam</label>
      <input type="text" class="form-control" id="vak" aria-describedby="achternaamHelp" placeholder="achternaam" name="achternaam" value="<?php echo $array["achternaam"]?>">
    </div>

    <div class="form-group">
      <label for="mobiel">mobiel</label>
      <input type="text" class="form-control" id="mobiel" aria-describedby="mobielHelp" placeholder="mobiel" name="mobiel" value="<?php echo $array["mobiel"]?>">
    </div>

    <div class="form-group">
      <label for="email" class="form-label">email</label>
      <input type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email" name="email" value="<?php echo $array["email"]?>">
    </div>
    
    <div class="form-group">
      <label for="woonplaats">woonplaats</label>
      <input type="woonplaats" class="form-control" id="woonplaats" aria-describedby="woonplaatsHelp" placeholder="woonplaats" name="woonplaats" value="<?php echo $array["woonplaats"]?>">
    </div>
    
    <div class="form-group">
      <label for="straat" class="form-label">straat</label>
      <input type="text" class="form-control" id="straat" aria-describedby="straatHelp" placeholder="straat" name="straat" value="<?php echo $array["straat"]?>">
    </div>

    <div class="form-group">
      <label for="postcode">postcode</label>
      <input type="text" class="form-control" id="postcode" aria-describedby="postcodeHelp" placeholder="postcodeadres" name="postcode" value="<?php echo $array["postcode"]?>">
    </div>

<br>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

  </main>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
    crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>
</body>

</html>



