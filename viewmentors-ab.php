<?php
  include("./functions.php");
  is_authorized(["root", "begeleider"]);
  include("./connect_db.php");
?>

<br>
<div>
    <div class="container-management">
        <div class="card-header">
            <h4>Begeleiders</h4>
            <li><a href="/index.php?content=viewstudents-ab">Studenten</a></li> 
        <li><a href="/index.php?content=viewmentors-ab">Begeleiders</a></li>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Voornaam</th>
                        <th>Tussenvoegsel</th>
                        <th>Achternaam</th>
                        <th>Mobiel</th>
                        <th>E-mail</th>
                        <th>Afkorting</th>
                    </tr>                    
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM medewerker";
                    $query_run = mysqli_query($conn, $query);
                    
                    if(mysqli_num_rows($query_run) > 0) {
                        foreach($query_run as $row){
                            ?>
                             <tr>
                                <td><?= $row['voornaam']; ?></td>
                                <td><?= $row['tussenvoegsel']; ?></td>
                                <td><?= $row['achternaam']; ?></td>
                                <td><?= $row['mobiel']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['afkorting']; ?></td>
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
    </div>
</div>
</div>