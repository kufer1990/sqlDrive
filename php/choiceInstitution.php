<?php 
include 'components/header.php';
include 'components/navbar.php';

include 'components/connect.php';
// $SELECT_NEIGH="SELECT * FROM `okręgi`";
// $conn->exec($SELECT_NEIGH)
$dbh = $conn->query('SELECT * FROM `okręgi`');

while($row = $dbh->fetch()){
    global $Neigh;
    $Neigh = $row[1];
    echo $Neigh ;
}


?>
<div class="container">
    <div class="row sectionTitleChoiceInstitution">
        <div class="col-12 text-center mt-5 mb-5">
            <p>Wybierz Swój Okręg</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
            <table class="table text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">OKRĘGI</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                 <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td><i class="far fa-edit"></i></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
<!-- fild for scripts js -->
<script src="../js/class.js"></script>
<?php
include 'components/footer.php';