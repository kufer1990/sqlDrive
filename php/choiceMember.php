<?php
include 'components/header.php';
include 'components/navbar.php';
include 'components/connect.php';
include 'components/bgComponent.php';
include 'components/addElementPopUp.php';
include 'components/editMemberPopUp.php';


$inputClassValue = $_POST['inputClassValue'];//klasa jako oznaczenie
$inputPlaceValue = $_POST['inputPlaceValue'];//szkoła
$inputNeighClickValue = $_POST['inputNeighClickValue'];//okręg
// pobarnie id klasy
$result=$conn->query("SELECT * FROM `klasa` WHERE `Klasa` = '$inputClassValue' AND `ID_PLACOWKI` = $inputPlaceValue AND `ID_OKREG` = $inputNeighClickValue");
while($row = $result->fetch()){
    // id klasy
    global $idClass;
$idClass = $row[0];
}

// pobranie nazwy okręgu
$neighNameConn = $conn->query("SELECT * FROM `okręgi` WHERE `OkregID` = '$inputNeighClickValue'");
while($row2=$neighNameConn->fetch()){
    global $neighNameToRender;
    $neighNameToRender = $row2[1];
}

//pobranie nazwy szkoły
$result =$conn->query("SELECT * FROM `klasa` WHERE `ID_PLACOWKI` = '$inputPlaceValue '");
$schoolNameConn= $conn->query("SELECT * FROM `placówki` WHERE `PlacowkiID` = $inputPlaceValue");
while($row3=$schoolNameConn->fetch()){
    global $schoolNameToRender;
    $schoolNameToRender = $row3[1];
}

//pobranie tabeli
$result2 = $conn->query("SELECT * FROM `member` WHERE `ID_KLASA` = $idClass AND `ID_PLACOWKI` = $inputPlaceValue AND `ID_OKREG` = $inputNeighClickValue");
?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution __fontColor">
        <div class="col-12 text-center mt-5 mb-5">
            <h3><p><?php echo $neighNameToRender." > ".$schoolNameToRender." > ".$inputClassValue; ?></p></h3>
        </div>
        <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-2 mb-2">



     <a href="../php/choiceInstitution.php" class="text-decoration-none">
              <button class="btnReturn __fontColor">Wstecz</button>
            </a>
          <button class="btnAddMember __fontColor">Dodaj Ucznia</button>
          <button class="btnDeleteMember __fontColor">Usuń Ucznia</button>
        </div>
    </div>



    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <form method="post">
                <div class="table-responsive">
            <table class="table text-center firstTableNeigh">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class='tableItem'>#</th>
                        <th scope="col" class='tableItem'></th>
                        <th scope="col" class='tableItem'>IMIĘ</th>
                        <th scope="col" class='tableItem'>NAZWISKO</th>
                        <th scope="col" class='tableItem'>ADRES</th>
                        <th scope="col" class='tableItem'>NR DOMU</th>
                        <th scope="col" class='tableItem'>KOD POCZTOWY</th>
                        <th scope="col" class='tableItem'>MIEJSCOWOŚĆ</th>
                        <th scope="col" class='tableItem'>NR TEL 1</th>
                        <th scope="col" class='tableItem'>NR TEL 2</th>
                        <th scope="col" class='tableItem'>STATUS</th>
                        <th scope="col" class='tableItem'>EDYTUJ</th>
                    </tr>
                </thead>
                <tbody>
            <?php 
             $i=0;     
             while($row2=$result2->fetch()){
                 $i++;
                echo "<tr><th scope='row' class='tableItem'>$i</th>
                <td class='tableItem d-none' id='choiceMemberName$i'>$row2[0]</td>
                <td class='tableItem'><input type='checkbox'id='checkbox$i' class='schoolCheckbox''/></td>
                <td class='tableItem' id='nameContent-checkbox$i'>$row2[1]</td>
                <td class='tableItem' id='lastNameContent-checkbox$i'>$row2[2]</td>
                <td class='tableItem'>$row2[3]</td>
                <td class='tableItem'>$row2[4]</td>
                <td class='tableItem'>$row2[5]</td>
                <td class='tableItem'>$row2[6]</td>
                <td class='tableItem'>$row2[7]</td>
                <td class='tableItem'>$row2[8]</td>
                <td class='tableItem'>$row2[9]</td>
                <td class='tableItem'><i class='far fa-edit tableItem tdTableItem' id='$i'></i></td>
                </tr>";};    
          ?>
                </tbody>
            </table>
            </div>
            <input type="text" class="d-none" name="inputMemberValue" id='inputMemberValue'>
            <input type="text" class="d-none" name="inputClassValue" id='inputClassValue' value="<?php echo $idClass?>">
            <input type="text" class="d-none" name="inputPlaceValue" id='inputPlaceValue' value="<?php echo $inputPlaceValue?>">
            <input type="text" class="d-none" name="inputNeighClickValue" id='inputNeighClickValue' value="<?php echo $inputNeighClickValue?>">
         <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>


</body>
<!-- fild for scripts js -->
<script src="../js/choiceMember.js"></script>
<?php
include 'components/footer.php';