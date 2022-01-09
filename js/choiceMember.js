const iconElement = [...document.querySelectorAll('.tdTableItem')];

iconElement.forEach(element => {
    element.addEventListener('click',()=>{
console.log(element.id);
document.querySelector('#inputNeighClickValue').value = document.querySelector('#choiceNeighName'+element.id).textContent;
document.querySelector('#inputClassValue').value = document.querySelector('#choiceClassValue'+element.id).textContent;
document.querySelector('#inputPlaceValue').value = document.querySelector('#choicePlaceValue'+element.id).textContent;
document.querySelector('#btnSendChoiceFirstTable').click();

    })
    
});
