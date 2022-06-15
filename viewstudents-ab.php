<?php
  include("./functions.php");
  is_authorized(["root", "begeleider"]);
  include("./connect_db.php");
?>
<br>

</header>
<div>
    <div class="container-management">
        <div class="card-header">
            <h4>Studenten</h4>
            <li><a href="/index.php?content=viewstudents-ab">Studenten</a></li>
        <li><a href="/index.php?content=viewmentors-ab">Begeleiders</a></li>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Studentnr</th>
                        <th>Voornaam</th>
                        <th>Achternaam</th>
                        <th>Mobiel</th>
                        <th>E-mail</th>                     
                        <th>Docent</th>
                        <th>Lespakket</th>
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
                                <td><?= $row['achternaam']; ?></td>
                                <td><?= $row['mobiel']; ?></td>
                                <td><?= $row['email']; ?></td>
                                <td><?= $row['docent']; ?></td>
                                <td><?= $row['lespakket']; ?></td>
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
</div></div>