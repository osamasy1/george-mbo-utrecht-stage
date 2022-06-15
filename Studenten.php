<?php
include("./connect_db.php");

$sql = "SELECT * FROM `voortgang`";

$result = mysqli_query($conn, $sql);


$arrays = "";
while ($array = mysqli_fetch_assoc($result)) {
  $arrays .= "<tr><th scope='row'>" . "</th>
              <td>" . $array["student"] . "</td>
              <td>" . $array["begleider"] . "</td>
              <td>" . $array["vak"] . "</td>
              <td>" . $array["cijfer"] . "</td>
              <td>
                <a href='./index.php?content=update'>
                  <img src='./images/icons/b_edit.png' alt='pencil'>
                  </a>
                  </td>
                </tr>";
};

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">
  <title>Cijfer student</title>
</head>

<body>

  <main class="container">

    <div class="row">
      <div class="col-12">
        <div class="jumpbotron jumpbotron-fluid">
          <div class="container">
            <h1 class="text-center mt-3">Studenten overzicht</h1>
            <p class="lead"></p>

          </div>
        </div>



        <div class="row">
          <div class="col-6">
            </form>
          </div>
          <div class="col-12">
            <table class="table table-light table-hover">
              <thead>
                <tr>
                <th scope="col"></th>
                  <th scope="col">student</th>
                  <th scope="col">begleider</th>
                  <th scope="col">vak</th>
                  <th scope="col">cijfer</th>
                  <th scope="col">update</th>
                </tr>
              </thead>
              <tbody>
                <?php
                echo $arrays;
                ?>
              </tbody>
            </table>
          </div>
        </div>
  </main>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>
</body>

</html>

