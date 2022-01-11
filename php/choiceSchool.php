<?php
include 'components/header.php';
include 'components/navbar.php';
include 'components/connect.php';
include 'components/bgComponent.php';
include 'components/addElementPopUp.php';

$choiceNeigh = $_POST['inputNeighClickValue'];

$result =$conn->query("SELECT * FROM `okręgi` WHERE `Okreg` = '$choiceNeigh'");
while($row= $result->fetch()){
    global $choiceIdOkregi;
    $choideIdOkregi = $row[0];
    echo $choiceIdOkregi;
}

$result2 = $conn->query("SELECT * FROM `placówki` WHERE `ID_OKRĘG` = $choideIdOkregi");

?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5">
            <h1>
                <p><?php echo $choiceNeigh?></p>
            </h1>
        </div>
    </div>
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-2 mb-2">
          <button class="btnAddSchool __fontColor">Dodaj lub usuń okręgi</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <form action="choiceClass.php" method="post">
                <div class="table-responsive">
                    <table class="table text-center firstTableNeigh">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class='tableItem'>#</th>
                                <th scope="col" class='tableItem'>NAZWA</th>
                                <th scope="col" class='tableItem'>ULICA</th>
                                <th scope="col" class='tableItem'>KOD POCZTOWY</th>
                                <th scope="col" class='tableItem'>MIASTO</th>
                                <th scope="col" class='tableItem'>TEL.</th>
                                <th scope="col" class='tableItem'>WEJŚCIE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                     $i=0;     
                     while($row2=$result2->fetch()){
                         $i++;
                        echo "<tr><th scope='row' class='tableItem'>$i</th>
                        <td class='tableItem d-none' id='choiceNeighName$i'>$row2[0]</td>
                        <td class='tableItem'>$row2[1]</td>
                        <td class='tableItem'>$row2[2]</td>
                        <td class='tableItem'>$row2[3]</td>
                        <td class='tableItem'>$row2[4]</td>
                        <td class='tableItem'>$row2[5]</td>
                        <td class='tableItem'><i class='far fa-edit tableItem tdTableItem' id='$i'></i></td>
                        </tr>";};         
                         ?>
                        </tbody>
                    </table>
                </div>
                <input type="text" class="d-none" name="inputNeighClickValue" id='inputNeighClickValue'>
                <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>
            </body>
            <script src="../js/choiceSchool.js"></script>
            <!-- <script src="../js/choiceInstitution.js"></script> -->
            <?php
            include 'components/footer.php';