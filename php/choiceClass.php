<?php
include 'components/header.php';
include 'components/navbar.php';
include 'components/connect.php';
include 'components/bgComponent.php';
include 'components/addElementPopUp.php';
// $choiceNeigh = $_POST['inputNeighClickValue'];

$neighId=$_POST['okregId'];
$neighNameConn = $conn->query("SELECT * FROM `okręgi` WHERE `OkregID` = '$neighId'");
while($row2=$neighNameConn->fetch()){
    global $neighNameToRender;
    $neighNameToRender = $row2[1];
}


$choiceSchoolID = $_POST['inputNeighClickValue'];
$result =$conn->query("SELECT * FROM `klasa` WHERE `ID_PLACOWKI` = '$choiceSchoolID '");
$schoolNameConn= $conn->query("SELECT * FROM `placówki` WHERE `PlacowkiID` = $choiceSchoolID");
while($row3=$schoolNameConn->fetch()){
    global $schoolNameToRender;
    $schoolNameToRender = $row3[1];
}



?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5 __fontColor">
            <h3>
                <p><?php echo $neighNameToRender." > ".$schoolNameToRender ?></p>
            </h3>
        </div>
    </div>
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-2 mb-2">



     <a href="../php/choiceInstitution.php" class="text-decoration-none">
              <button class="btnReturn __fontColor">Wstecz</button>
            </a>
          <button class="btnAddClass __fontColor">Dodaj Klasę</button>
          <button class="btnDeleteClass __fontColor">Usuń Klasę</button>
        </div>
    </div>



    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
                      <form action="choiceMember.php" method="post">
                      <div class="table-responsive">
            <table class="table text-center firstTableNeigh">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class='tableItem'>#</th>
                        <th scope="col" class='tableItem'></th>
                        <th scope="col" class='tableItem'>KLASA</th>
                        <th scope="col" class='tableItem'>WEJŚCIE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $i=0;     
                     while($row=$result->fetch()){
                         $i++;
                        echo "<tr><th scope='row' class='tableItem'>$i</th>
                        <td class='tableItem d-none'>$row[0]</td>

                        <td class='tableItem'><input type='checkbox'id='checkbox$i' class='classCheckbox''/></td>
                    

                        <td class='tableItem nameContent-checkbox$i' id='choiceClassValue$i'>$row[1]</td>
                        <td class='tableItem  d-none' id='choicePlaceValue$i'>$row[2]</td>
                        <td class='tableItem  d-none' id='choiceNeighName$i'>$row[3]</td>
                        <td class='tableItem'><i class='far fa-edit tableItem tdTableItem' id='$i'></i></td>
                        </tr>";};         
           ?>
                </tbody>
            </table>
            </div>
            <input type="text" class="d-none" name="inputClassValue" id='inputClassValue' >
            <input type="text" class="d-none" name="inputPlaceValue" id='inputPlaceValue' value="<?php echo $choiceSchoolID?>">
            <input type="text" class="d-none" name="inputNeighClickValue" id='inputNeighClickValue' value="<?php echo $neighId?>">
            <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>
            </body>
            <script src="../js/choiceClass.js"></script>
            <?php
            include 'components/footer.php';