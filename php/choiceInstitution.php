<?php 
include 'components/header.php';
// include 'components/navbar.php';
include 'components/connect.php';
$choiceIdNeigh = "";
?>
<div class="bg-mySite">
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
            <!-- //////////////////////////////////////////////////////////// -->
            <form method="post">
            <table class="table text-center firstTableNeigh">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class='tableItem'>#</th>
                        <th scope="col" class='tableItem'>OKRĘGI</th>
                        <th scope="col" class='tableItem'>Wejście</th>
                    </tr>
                </thead>
                <tbody>
            <?php 
            $dbh = $conn->query('SELECT * FROM `okręgi`');
            $i=0;
                while($row=$dbh->fetch()){    
                    $i++;
                    global $table; 
                    $table = $row[1];
                    echo "<tr>
                    <th scope='row' class='tableItem'>$i</th>
                    <td class='tableItem' id='choiceNeighName$i'>";
                    echo $table;
                    echo "</td>
                    <td><i class='far fa-edit tableItem tdTableItem' id='$i'></i></td>
                    </tr>";
                };               
           ?>
                </tbody>
            </table>
         <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>
<!-- /////////////////////////////////////////////////////////////////////////// -->
<div class="render">

</div>
        </div>
    </div>
</div>

</body>
<!-- fild for scripts js -->
<script src="../js/choiceInstitution.js"></script>
<?php
include 'components/footer.php';