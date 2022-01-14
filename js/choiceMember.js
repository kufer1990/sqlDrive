const iconElement = [...document.querySelectorAll('.tdTableItem')];
//klik icon odpala ajax
iconElement.forEach(element => {
    element.addEventListener('click',()=>{
document.querySelector('#inputMemberValue').value = document.querySelector('#choiceMemberName'+element.id).textContent;
document.querySelector('.editMemberPopUp').style.display="block";
let idMemberToChange = document.querySelector('#inputMemberValue');
console.log(idMemberToChange.value);
ajaxSend(idMemberToChange.value, "editMember")
    })   
});







//checkbox member
let nameMemberToDelete ="";
let lastNameMemberToDelete ="";
// schoolCheckbox
const arrayCheckBox= document.querySelectorAll('.schoolCheckbox');
arrayCheckBox.forEach(element=>{
element.addEventListener('click',()=>{
nameMemberToDelete = document.querySelector(` #nameContent-${element.id}`).textContent;
lastNameMemberToDelete = document.querySelector(` #lastNameContent-${element.id}`).textContent;


})
});
//click delete member
document.querySelector('.btnDeleteMember').addEventListener('click',()=>{

let nameAndLnameToDelete = {
    "name": nameMemberToDelete,
    "lastName": lastNameMemberToDelete
}
console.log(nameAndLnameToDelete['name']);
if(nameAndLnameToDelete['name']>""){
    ajaxSend(nameAndLnameToDelete, 'deleteMember');
}
})

//visible popup dodania do bazy 
const btnAddMember = document.querySelector('.btnAddMember');
const btnDeleteMember = document.querySelector('.btnDeleteMember');
btnAddMember.addEventListener('click', ()=>{
    document.querySelector('.addElementPopUp').style.visibility ="inherit";
    document.querySelector('.formSectionMember').style.visibility="inherit";
})


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
            if(testArr.length==9){
            
            let addMemberParameters = {
                "name":testArr[0].toUpperCase(),
                "lastName":testArr[1].toUpperCase(),
                "street":testArr[2].toUpperCase(),
                "numberHome":testArr[3].toUpperCase(),
                "postCode":testArr[4].toUpperCase(),
                "city":testArr[5].toUpperCase(),
                "phoneOne":testArr[6].toUpperCase(),
                "phoneTwo":testArr[7].toUpperCase(),
                "status":testArr[8].toUpperCase(),
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

        if (xhr.status === 200 && whatRun!="editMember") {
            location.reload();
            alert(xhr.responseText);
 
        }else{
            //jezeli edytuje istniejacego ucznia to wpelnia inputy poprawnymi danymi z bazy
            let memberInfo = JSON.parse(xhr.responseText);
            const input = document.querySelectorAll('.editInputItem');
            for (let index = 0; index < memberInfo.length; index++) {
                input[index].value = memberInfo[index];              
            }
        }
    }
//jezeli chce poprawic istniejącego ucznia
    if(whatRun==="editMember"){

        xhr.open('POST', '../php/components/editMemberQuestoin.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('sendElement='+sendElement);


    }else{
        //jeżeli chce dodac ucznia do bazy
    xhr.open('POST', '../php/components/addElementToDB.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   if (whatRun == "addMember"||whatRun=="deleteMember") {
        xhr.send('whatRun='+whatRun+'&sendElement='+JSON.stringify(sendElement));
   }}

}



