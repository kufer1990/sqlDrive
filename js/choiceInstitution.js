const iconClickElement = [...document.querySelectorAll('.tdTableItem')];
let choiceNeigh = "";
iconClickElement.forEach(element => {
    element.addEventListener('click', () => {
        choiceNeigh = document.querySelector('#choiceNeighName' + element.id).textContent;
        document.querySelector('.firstTableNeigh').style.display = "none";

        ajaxFirstTable(choiceNeigh)
    })



});


function ajaxFirstTable() {
    console.log(choiceNeigh);
    xhr = new XMLHttpRequest;
    xhr.onload = function () {
        if (xhr.status === 200) {
            console.log('test');
            document.querySelector('.render').textContent = xhr.resposeText;
     console.log(xhr.resposeTex);
     
            
            // aktywowac nowa tabele i dodac do niej tekst
        }
    }
    xhr.open('post', 'choiceSchool.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('neighName=' + choiceNeigh);
}