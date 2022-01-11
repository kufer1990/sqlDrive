<?php
// header('refresh: .5')
?>
<!-- wypełnienie okna przeglądarki -->
<div class="row addElementPopUp">
    <div class="col-12">
        <!-- sekcja zamknięcie -->
        <div class="col-12">
            <div class="closeButton">
                <button id="closeButton">X</button>
            </div>
        </div>


        <!-- sekcja formularz okręg-->
        <div class="row text-center formSectionNeigh">
            <form method="POST">
                <div class="col-12"><input class="w-100 text-center p-2 addNeighInput" name="addNeighInput" type="text"
                        placeholder="Nazwa Okręgu"></div>
                <div class="col-12"><button class="w-100 __fontColor p-2 mt-2 btnNeigh addNeighButton"
                        >Dodaj Okręg</button></div>
                <div class="col-12"><button class="w-100 __fontColor p-2 mt-2 btnNeigh deleteNeighButton"
                        >Usuń Okręg</button></div>
            </form>
        </div>


        <div class="row text-center formSectionSchool">
            <form method="POST">
                <div class="col-12"><input class="w-100 text-center p-2 mt-2 addSchoolInput" name="addSchoolInputName" type="text" placeholder="Nazwa Szkoły"></div>
                <div class="col-12"><input class="w-100 text-center p-2 mt-2 addSchoolInput" name="addSchoolInputStreet" type="text" placeholder="Ulica"></div>
                <div class="col-12"><input class="w-100 text-center p-2 mt-2 addSchoolInput" name="addSchoolInputPost" type="text" placeholder="Kod Pocztowy"></div>
                <div class="col-12"><input class="w-100 text-center p-2 mt-2 addSchoolInput" name="addSchoolInputCity" type="text" placeholder="Miasto"></div>
                <div class="col-12"><input class="w-100 text-center p-2 mt-2 addSchoolInput" name="addSchoolInputPhone" type="text" placeholder="Numer Tel"></div>           
            </form>
            <div class="col-12"><button class="addSchollButton mt-2">Dodaj Element</button></div>
             <!-- <div class="col-12"><input class="w-100 text-center p-2 addSchoolInput" name="addSchoolInput" type="text" placeholder="Numer Tel"></div> -->
        </div>






    </div>
</div>










<script src="../js/addElementPopUp.js"></script>