<?php 
include 'components/header.php';
include 'components/navbar.php';
include 'components/connect.php';
include 'components/bgComponent.php';
include 'components/addElementPopUp.php';
$choiceIdNeigh = "";
?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5 __fontColor">
            <h3>
                <p>Wybierz Swój Okręg</p>
            </h3>
        </div>
    </div>
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-2 mb-2">
          <button class="btnAddInstitution __fontColor">Dodaj lub usuń okręgi</button>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <form action="choiceSchool.php" method="post">
                <div class="table-responsive">
                    <table class="table text-center firstTableNeigh">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class='tableItem __fontColor'>#</th>
                                <th scope="col" class='tableItem __fontColor'>OKRĘGI</th>
                                <th scope="col" class='tableItem __fontColor'>Wejście</th>
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
                    <th scope='row' class='tableItem __fontColor'>$i</th>
                    <td class='tableItem __fontColor' id='choiceNeighName$i'>";
                    echo $table;
                    echo "</td>
                    <td><i class='far fa-edit tableItem tdTableItem __fontColor' id='$i'></i></td>
                    </tr>";
                };               
                     ?>
                        </tbody>
                    </table>
                </div>
                <input type="text" class="d-none" name="inputNeighClickValue" id='inputNeighClickValue'>
                <button type="submit" class="d-none" id="btnSendChoiceFirstTable"></button>
            </form>


            </body>
            <!-- fild for scripts js -->
            <script src="../js/choiceInstitution.js"></script>
            <?php
include 'components/footer.php';