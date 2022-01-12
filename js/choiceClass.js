const btnAddClass = document.querySelector('.btnAddClass');

btnAddClass.addEventListener('click', ()=>{
    document.querySelector('.addElementPopUp').style.visibility ="inherit";
    document.querySelector('.formSectionClass').style.visibility="inherit";
})




const addClassButton = document.querySelector('.addClassButton');
addClassButton.addEventListener('click', ()=>{
    let addClassInput = document.querySelector('.addClassInput');
if(addClassInput.value>""){
    ajaxDeleteSchool(addClassInput.value, 'addClassToDb');
}  
})






function ajaxDeleteSchool(sendElement, whatRun) {
    xhr = new XMLHttpRequest;
    xhr.onload = function () {
        if (xhr.status === 200) {
            // location.reload();
            alert(xhr.responseText);
         }
    }
    xhr.open('POST', '../php/components/addElementToDB.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    console.log(whatRun);

    // xhr send jeżeli usuwamy szkołę
    xhr.send('sendElement=' + sendElement + '&whatRun=' + whatRun);
    

}