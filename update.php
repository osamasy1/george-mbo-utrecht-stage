<?php
  
include("./connect_db.php");

$sql = "SELECT * FROM `voortgang`";

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
        <h1 class="display-4">Wijzigen Student</h1>
  </div>
</div>

<div class="row">
  <div>
    <form action="./update_script.php" method="post">
    <div class="form-group">
      <label for="student" class="form-label">student</label>
      <input type="text" class="form-control" id="student" aria-describedby="firstnameHelp" placeholder="student" name="student" value="<?php echo $array["student"]?>">
    </div>
    
    <div class="form-group">
      <label for="begleider">begleider</label>
      <input type="begleider" class="form-control" id="begleider" aria-describedby="infixHelp" placeholder="begleider" name="begleider" value="<?php echo $array["begleider"]?>">
    </div>
    
    <div class="form-group">
      <label for="vak" class="form-label">vak</label>
      <input type="text" class="form-control" id="vak" aria-describedby="lastnameHelp" placeholder="vak" name="vak" value="<?php echo $array["vak"]?>">
    </div>

    <div class="form-group">
      <label for="cijfer">cijfer</label>
      <input type="text" class="form-control" id="cijfer" aria-describedby="cijferHelp" placeholder="cijferadres" name="cijfer" value="<?php echo $array["cijfer"]?>">
    </div>


    <div class="form-group">
      <input type="hidden" class="form-control" id="id" aria-describedby="idHelp" placeholder="id" name="id" value="<?php echo $array["id"]?>"> 
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



