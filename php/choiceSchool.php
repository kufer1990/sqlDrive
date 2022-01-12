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
    $choiceIdOkregi = $row[0];
}

$result2 = $conn->query("SELECT * FROM `placówki` WHERE `ID_OKRĘG` = $choiceIdOkregi");

?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5 __fontColor">
            <h3>
                <p><?php echo $choiceNeigh?></p>
            </h3>
        </div>
    </div>
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-2 mb-2">
        <a href="../php/choiceInstitution.php"><button class="btnReturn __fontColor">Wstecz</button></a>
          <button class="btnAddSchool __fontColor">Dodaj Placówkę</button>
          <button class="btnDeleteSchool __fontColor">Usuń Placówkę</button>
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
                                <th scope="col" class='tableItem'></th>
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
                        <td class='tableItem'><input type='checkbox'id='checkbox$i' class='schoolCheckbox''/></td>
                        <td class='tableItem' id='nameContent-checkbox$i'>$row2[1]</td>
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
                <input type="text" class="d-none" name="okregId" id="okregId" value="<?php echo $choiceIdOkregi?>"/>
                <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>
            </body>
            <script src="../js/choiceSchool.js"></script>
            <!-- <script src="../js/choiceInstitution.js"></script> -->
            <?php
            include 'components/footer.php';