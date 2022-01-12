
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

