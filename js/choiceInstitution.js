const iconClickElement = [...document.querySelectorAll('.tdTableItem')];
let choiceNeigh = "";
iconClickElement.forEach(element => {
    element.addEventListener('click', () => {
        choiceNeigh = document.querySelector('#choiceNeighName' + element.id).textContent
        document.querySelector('#inputNeighClickValue').value = choiceNeigh.toUpperCase();
        document.querySelector('#btnSendChoiceFirstTable').click();
           })
});

