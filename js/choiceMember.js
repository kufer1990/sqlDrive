// const iconElement = [...document.querySelectorAll('.tdTableItem')];

// iconElement.forEach(element => {
//     element.addEventListener('click',()=>{
// console.log(element.id);
// document.querySelector('#inputNeighClickValue').value = document.querySelector('#choiceNeighName'+element.id).textContent;
// document.querySelector('#inputClassValue').value = document.querySelector('#choiceClassValue'+element.id).textContent;
// document.querySelector('#inputPlaceValue').value = document.querySelector('#choicePlaceValue'+element.id).textContent;
// document.querySelector('#btnSendChoiceFirstTable').click();

//     })
    
// });




const btnAddMember = document.querySelector('.btnAddMember');
const btnDeleteMember = document.querySelector('.btnDeleteMember');


btnAddMember.addEventListener('click', ()=>{
    document.querySelector('.addElementPopUp').style.visibility ="inherit";
    document.querySelector('.formSectionMember').style.visibility="inherit";
})


///////
// dodanie ucznia
document.querySelector('.addMemberButton').addEventListener('click', () => {
    const addMemberInput = [...document.querySelectorAll('.addMemberInput')];
    let testArr = [];

    // walidacja formularza
    addMemberInput.forEach(element => {
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
            if(testArr.length==8){
            
            let addMemberParameters = {
                "name":testArr[0].toUpperCase(),
                "lastName":testArr[0].toUpperCase(),
                "street":testArr[1].toUpperCase(),
                "numberHome":testArr[2].toUpperCase(),
                "postCode":testArr[3].toUpperCase(),
                "city":testArr[4].toUpperCase(),
                "phoneOne":testArr[5].toUpperCase(),
                "phoneTwo":testArr[6].toUpperCase(),
                "status":testArr[7].toUpperCase(),
                "idNeigh": document.querySelector('#inputNeighClickValue').value,
                "idSchool": document.querySelector('#inputPlaceValue').value,
                "idClass": document.querySelector('#inputClassValue').value
             } 
             ajaxSend(addMemberParameters,'addMember')
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
   if (whatRun == "addMember") {
        xhr.send('whatRun='+whatRun+'&sendElement='+JSON.stringify(sendElement));
   }

}



