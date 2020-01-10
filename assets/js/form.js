function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validadeNome(nome, secondNome, thirdNome){
    
    console.log(nome, secondNome, thirdNome);

    if(nome != undefined && secondNome != undefined && nome.length >= 3 && secondNome.length >= 3){

        console.log("Caiu no true");
        return true;
        
    } else {

        if(thirdNome != undefined && thirdNome >= 3){ 
            return true;
        } else {
            return false;    
        }
    }


}

let checkEmail;

let checkNome;
let checkFirstNome = '';
let checkSecondNome = '';
let checkThirdNome = '';

$('form').submit( function(ev) {
    ev.preventDefault();

    let nome = document.querySelector('#name').value;
    let telefone = document.querySelector('#tel').value;
    let email = document.querySelector('#email').value;
    let assunto = document.querySelector('#assunto').value;
    let message = document.querySelector('#mensagem').value;

    checkNome = nome.split(" ");
    checkFirstNome = checkNome[0];
    checkSecondNome = checkNome[1];
    checkThirdNome = checkNome[2];

    checkNome = validadeNome(checkFirstNome, checkSecondNome, checkThirdNome);

    checkEmail = validateEmail(email);

    if (email != '') {
        if(checkEmail == false) {
            alert("Este email não é valido!");
            document.querySelector('#email').focus();
            return false;
        }
    }
    
    if (nome != '') {
        if(checkNome == false) {
            alert("Este nome não é valido!");
            document.querySelector('#name').focus();
            return false;
        }
    }

    if (checkEmail && checkNome && telefone != '' && assunto != '' && message != '') {
        $(this).unbind('submit').submit();
    } else {
        alert('Preencha todos os campos!');
    }

});