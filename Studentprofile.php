<?php
  include("./functions.php");
  is_authorized(["root", "student"]);
  include("./connect_db.php");
?>
<br>

</header>

<div>
    <div class="container">
        <div class="card-header">
            <h4>Mijn gegevens</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Studentnr</th>
                        <th>Voornaam</th>
                        <th>tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Mobiel</th>
                        <th>E-mail</th>
                        <th>Update</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($conn, $query);
                    
                    if(mysqli_num_rows($query_run) > 0) {
                        foreach($query_run as $row){
                            ?>
                             <tr>
                                <td><?= $row['studentnr']; ?></td>
                                <td><?= $row['voornaam']; ?></td>
                                <td><?= $row['tussenvoegsel']; ?></td>
                                <td><?= $row['achternaam']; ?></td>
                                <td><?= $row['mobiel']; ?></td>
                                <td><?= $row['email']; ?></td>

                                <td>
                                <a href='./index.php?content=updatestudentprofile'>
                                <img src='./images/icons/b_edit.png' alt='pencil'>
                                </a>
                                </td>
                             </tr>

                            <?php
                        }

                    } else {
                        ?>
                        <tr>
                            <td colspan="7">No record found</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>woonplaats</th>
                        <th>Straat</th>
                        <th>Postcode</th>                     
                        <th>Docent</th>
                        <th>Update</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM student";
                    $query_run = mysqli_query($conn, $query);
                    
                    if(mysqli_num_rows($query_run) > 0) {
                        foreach($query_run as $row){
                            ?>
                             <tr>

                                <td><?= $row['woonplaats']; ?></td>
                                <td><?= $row['straat']; ?></td>
                                <td><?= $row['postcode']; ?></td>
                                <td><?= $row['docent']; ?></td>
                                <td>
                                <a href='./index.php?content=updatestudentprofile'>
                                <img src='./images/icons/b_edit.png' alt='pencil'>
                                </a>
                                </td>
                             </tr>

                            <?php
                        }

                    } else {
                        ?>
                        <tr>
                            <td colspan="7">No record found</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div></div>