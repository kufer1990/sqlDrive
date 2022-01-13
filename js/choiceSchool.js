
const iconClickElement = [...document.querySelectorAll('.tdTableItem')];
let choiceNeigh = "";
iconClickElement.forEach(element => {
    element.addEventListener('click', () => {
        choiceNeigh = document.querySelector('#choiceNeighName' + element.id).textContent
        // console.log(choiceNeigh);
        document.querySelector('#inputNeighClickValue').value = choiceNeigh.toUpperCase();
        document.querySelector('#btnSendChoiceFirstTable').click();
           })
});


document.querySelector('.btnAddSchool').addEventListener('click', ()=>{
    document.querySelector('.addElementPopUp').style.visibility ="inherit";
    document.querySelector('.formSectionSchool').style.visibility="inherit";
});

let nameSchoolToDelete ="";
// schoolCheckbox
const arrayCheckBox= document.querySelectorAll('.schoolCheckbox');
arrayCheckBox.forEach(element=>{
element.addEventListener('click',()=>{
nameSchoolToDelete = document.querySelector(` #nameContent-${element.id}`).textContent;


})
});

document.querySelector('.btnDeleteSchool').addEventListener('click',()=>{
    ajaxDeleteSchool(nameSchoolToDelete, 'deleteSchool');
})







//funkcja przyjmuje przesłany element do dodania i akcję którą wykonuje;
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
    if (whatRun == "deleteSchool") {
        xhr.send('sendElement=' + sendElement + '&whatRun=' + whatRun);
    };

}