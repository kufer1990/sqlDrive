const btnAddClass = document.querySelector('.btnAddClass');

btnAddClass.addEventListener('click', ()=>{
    document.querySelector('.addElementPopUp').style.visibility ="inherit";
    document.querySelector('.formSectionClass').style.visibility="inherit";
})


const addClassButton = document.querySelector('.addClassButton');
addClassButton.addEventListener('click', ()=>{
    let addClassInput = document.querySelector('.addClassInput');
    let schoolID = document.querySelector('#inputPlaceValue');
    let neighID=document.querySelector('#inputNeighClickValue');
  
    
    let sendElement={
        "addClassInput": addClassInput.value.toUpperCase(),
        "schoolID": schoolID.value,
        "neighID":neighID.value
    } 
 if(addClassInput.value>""){

    ajaxDeleteSchool(sendElement, 'addClassToDb');
 }  
})

let nameClassToDelete ="";
// classCheckbox
const arrayCheckBox= document.querySelectorAll('.classCheckbox');
arrayCheckBox.forEach(element=>{
element.addEventListener('click',()=>{
nameClassToDelete = document.querySelector(` .nameContent-${element.id}`).textContent;
})
});

document.querySelector('.btnDeleteClass').addEventListener('click',()=>{
    if(nameClassToDelete>""){
     ajaxDeleteSchool(nameClassToDelete, 'deleteClass');
    };
})

function ajaxDeleteSchool(sendElement, whatRun) {
    
    xhr = new XMLHttpRequest;
    xhr.onload = function () {
        if (xhr.status === 200) {
            location.reload();
            alert(xhr.responseText);
         }
    }
    xhr.open('POST', '../php/components/addElementToDB.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    // xhr send jeżeli usuwamy szkołę
    if(whatRun==='addClassToDb'){
    xhr.send('sendElement=' + JSON.stringify(sendElement) + '&whatRun=' + whatRun);
    }else if(whatRun==='deleteClass'){
        xhr.send('sendElement=' + sendElement + '&whatRun=' + whatRun);
    }

}