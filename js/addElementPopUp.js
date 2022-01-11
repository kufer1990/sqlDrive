document.querySelector('#closeButton').addEventListener('click', () => {
    document.querySelector('.addElementPopUp').style.visibility = "hidden";
    document.querySelector('.addNeighButton').style.transition = "0s";
    document.querySelector('.deleteNeighButton').style.transition = "0s";  
    document.querySelector('#closeButton').style.transition = "0s";
})

// usunięcie okręgu z bazy
const addNeighInput = document.querySelector('.addNeighInput');
document.querySelector('.deleteNeighButton').addEventListener('click', () => {
    if (addNeighInput.value == "") {
        alert("Wpisz Nazwę Okręgu");
    } else {
        ajaxSend(addNeighInput.value.toUpperCase(), "deleteNeigh")
    }
})

// klik przycisku sprawdza czy input nie jest pusty i wywołuje ajax 
// przekazuje parametr dodawanego okręgu oraz drugi parametr akcji. czy dodajemy okręg, szkołe, itp
document.querySelector('.addNeighButton').addEventListener('click', () => {
    if (addNeighInput.value == "") {
        alert("Wpisz Nazwę Okręgu");
    } else {
        ajaxSend(addNeighInput.value.toUpperCase(), "neigh")
    }
})


document.querySelector('.addSchollButton').addEventListener('click',()=>{
const addSchoolInput = [...document.querySelectorAll('.addSchoolInput')];

// walidacja formularza

addSchoolInput.forEach(element => {
    if(element.value===""){
        console.log('wypelnij formularz');
        
    }
    // console.log(addSchoolInput[0].value);   
    
});

    
})







//funkcja przyjmuje przesłany element do dodania i akcję którą wykonuje;
function ajaxSend(sendElement, whatRun) {
    xhr = new XMLHttpRequest;
    xhr.onload = function () {
        if (xhr.status === 200) {
            alert(xhr.responseText);
        }
    }
    xhr.open('POST', '../php/components/addElementToDB.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    if(whatRum==="neigh"){
    xhr.send('sendElement=' + sendElement + '&whatRun=' + whatRun);}

}