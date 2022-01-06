function ajaxRequest(){
    const xhr= new XMLHttpRequest;
xhr.onload = function(){
    if(xhr.status == 200){
        console.log('test');
    }
}

xhr.open('POST', '../php/choiceInstitution.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.send();
}