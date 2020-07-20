let valueOfActor = document.getElementById('actorValue').value;
let valueOfGender = document.getElementById('genderValue').value;

function add_actor(){
    valueOfActor++;
    let divContent = document.getElementById('actorAdd');  
    let divFlex = document.createElement('div');
    let input = document.createElement('input');
    let a = document.createElement('a');
    let actorQtd = document.getElementById('actorQtd');

    divContent.className = "form-group";
    divFlex.className = 'd-flex mt-2';
    divFlex.id = 'child_actor';
    input.type = 'text';
    input.className = "form-control";
    input.id = 'actor_'+valueOfActor;
    input.name = 'actor_'+valueOfActor;
    a.href = '#actorLabel';
    a.addEventListener('click',remove_actor);
    a.className = 'btn btn-dark ml-2';
    a.innerText = '-';

    divFlex.appendChild(input);
    divFlex.appendChild(a);
    divContent.appendChild(divFlex);

    actorQtd.value = parseInt(actorQtd.value) + 1;
}
function add_gender(){
    valueOfGender++;
    let divContent = document.getElementById('genderAdd');    
    let divFlex = document.createElement('div');
    let input = document.createElement('input');
    let a = document.createElement('a');
    let genderQtd = document.getElementById('genderQtd');

    divContent.className = "form-group";
    divFlex.className = 'd-flex mt-2';
    divFlex.id = 'child_gender';
    input.type = 'text';
    input.className = "form-control";
    input.id = 'gender_'+valueOfGender;
    input.name = 'gender_'+valueOfGender;
    a.href = '#genderLabel';
    a.addEventListener('click',remove_gender);
    a.className = 'btn btn-dark ml-2';
    a.innerText = '-';

    divFlex.appendChild(input);
    divFlex.appendChild(a);
    divContent.appendChild(divFlex);
    genderQtd.value = parseInt(genderQtd)+1;
}
function remove_actor(){
    let divContent = document.getElementById('actorAdd');
    let div = document.getElementById('child_actor');
    let actorQtd = document.getElementById('actorQtd');

    divContent.removeChild(div);
    valueOfActor--;
    actorQtd.value = valueOfActor;
}
function remove_gender(){
    let divContent = document.getElementById('genderAdd');
    let div = document.getElementById('child_gender');
    let genderQtd = document.getElementById('genderQtd');

    divContent.removeChild(div);
    valueOfGender--;
    genderQtd.value = valueOfGender;
}