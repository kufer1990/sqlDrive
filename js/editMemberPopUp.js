const buttonCloseEditElement = document.querySelector('.buttonCloseEditElement');

buttonCloseEditElement.addEventListener('click', () => {
    document.querySelector('.editMemberPopUp').style.display = "none";

})



document.querySelector('.sendUpdate').addEventListener('click', () => {
    // console.log('test');
    
    const input = [...document.querySelectorAll('.editInputItem')];

    let sendElement = {
        "name": input[0].value.toUpperCase(),
        "lastName":input[1].value.toUpperCase(),
        "street":input[2].value.toUpperCase(),
        "numberHome":input[3].value.toUpperCase(),
        "postCode":input[4].value.toUpperCase(),
        "city":input[5].value.toUpperCase(),
        "phoneOne":input[6].value.toUpperCase(),
        "phoneTwo":input[7].value.toUpperCase(),
        "status":input[8].value.toUpperCase(),
        "elementId": document.querySelector('#inputMemberValue').value,
        "idClass": document.querySelector('#inputClassValue').value,
        "idPlace":  document.querySelector('#inputPlaceValue').value,
        "idNeigh":  document.querySelector('#inputNeighClickValue').value
        
        }

        ajaxToUpdate(sendElement);

    
});

function ajaxToUpdate(sendElement) {

    
    const xhr = new XMLHttpRequest;
    xhr.onload = function () {
        if (xhr.status == 200) {
            location.reload();
        alert(xhr.responseText);
         
        }
    }

    xhr.open('POST', '../php/components/updateMember.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('sendElement=' + JSON.stringify(sendElement));
}