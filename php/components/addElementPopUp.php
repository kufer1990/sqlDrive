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
        <!-- dodalem display none ktory trzeba usunac -->
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
        </div>

        <div class="row text-center formSectionClass">
            <form method="POST">
                 <div class="col-12"><input class="w-100 text-center p-2 addClassInput" name="addNeighInput" type="text"
                        placeholder="Nazwa Klasy"></div>
              
            </form>
            <div class="col-12"><button class="w-100 __fontColor p-2 mt-2  btnNeigh addClassButton"
                        >Dodaj Klasę</button></div>
        </div>
        

<div class="formSectionMember">
        
            <form method="POST">
            <div class="row text-center   justify-content-around ">
                
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Imię"></div>
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Nazwisko"></div>               
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Ulica"></div>
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Nr Domu"></div>
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Kod Pocztowy"></div>
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Miejscowość"></div>
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Numer Tel 1"></div>           
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Numer Tel 2"></div>    
                <div class="col-sm-12 col-md-4 col-lg-5 p-2"><input class="border border-dark text-center addMemberInput" type="text" placeholder="Status"></div>               
            </form>
            </div>
            <div class="row w-100 justify-content-center">
            <div class="col-sm-3 col-md-5 text-center"><button class="p-2 addMemberButton border border-light mt-2">Dodaj Element</button></div>
            </div>
        </div>
    </div>
</div>










<script src="../js/addElementPopUp.js"></script>