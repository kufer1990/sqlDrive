<?php 
include 'components/header.php';
include 'components/navbar.php';

include 'components/connect.php';
// $SELECT_NEIGH="SELECT * FROM `okręgi`";
// $conn->exec($SELECT_NEIGH)
$dbh = $conn->query('SELECT * FROM `okręgi`');

// while($row = $dbh->fetch()){
//     global $Neigh;
//     $Neigh = $row[1];
//     echo $Neigh ;
// }
// header("Refresh:0.5 ");
?>
<div class="bg-mySite">
    <!-- <img src="../img/watercolor-ga2e23b0ff_1280.png" alt=""> -->
    <img src="../img/background-g88c946023_1280.jpg" alt="">
</div>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5">
            <h1><p>Wybierz Swój Okręg</p></h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class='tableItem'>#</th>
                        <th scope="col" class='tableItem'>OKRĘGI</th>
                        <th scope="col" class='tableItem'>Wejście</th>
                    </tr>
                </thead>
                <tbody>
            <?php 
            $i=0;
                while($row=$dbh->fetch()){    
                    $i++;
                    global $table; 
                    $table = $row[1];
                    echo "<tr>
                    <th scope='row' class='tableItem'>$i</th>
                    <td class='tableItem'>";
                    echo $table;
                    echo "</td>
                    <td><i class='far fa-edit tableItem tdTableItem' id='choiceNeigh$i'></i></td>
                    </tr>";
                };
                
                
           ?>




                    <!-- <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><i class="far fa-edit"></i></td>
                    </tr> -->
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
<!-- fild for scripts js -->
<script src="../js/choiceInstitution.js"></script>
<?php
include 'components/footer.php';