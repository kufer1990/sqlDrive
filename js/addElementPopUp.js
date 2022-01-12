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




// dodanie placówki - szkoły
document.querySelector('.addSchollButton').addEventListener('click', () => {
    const addSchoolInput = [...document.querySelectorAll('.addSchoolInput')];
    let testArr = [];

    // walidacja formularza
    addSchoolInput.forEach(element => {
        testArr.push(element.value);

        if (element.value === "") {
            element.style.background = "rgb(162, 132, 240)";
            element.style.border = "3px solid white";
            element.classList.add('changePlaceholder');
            setTimeout(() => {
                element.style.border = "1px solid rgb(118,118,118)";
                element.style.background = "white";
                element.classList.remove('changePlaceholder');
            }, 1000)
        }
        else if(element.value>""){  
                    

// stworzenie obiektu do przekazania ajaxowi
            if(testArr.length==5){
            
            let addSchoolParameters = {
                "name":testArr[0].toUpperCase(),
                "street":testArr[1].toUpperCase(),
                "postCode":testArr[2].toUpperCase(),
                "city":testArr[3].toUpperCase(),
                "phone":testArr[4].toUpperCase(),
                "idokregi": document.querySelector('#okregId').value
             } 
             ajaxSend(addSchoolParameters,'addSchool')

            }
        }
    });
})


//funkcja przyjmuje przesłany element do dodania i akcję którą wykonuje;
function ajaxSend(sendElement, whatRun) {
    xhr = new XMLHttpRequest;
    xhr.onload = function () {

        if (xhr.status === 200) {
            location.reload();
            alert(xhr.responseText);
 
        }
    }
    xhr.open('POST', '../php/components/addElementToDB.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');


    // xhr send jeżeli dodajemy okreg lub kasujemy
    if (whatRun == "neigh" || whatRun == "deleteNeigh") {
        xhr.send('sendElement=' + sendElement + '&whatRun=' + whatRun);
    }else if (whatRun == "addSchool") {
        xhr.send('whatRun='+whatRun+'&sendElement='+JSON.stringify(sendElement));


    }

}