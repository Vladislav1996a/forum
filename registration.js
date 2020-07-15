function getData(){
    // получить значение инпута
    let getInpEmail = document.querySelector('#email');
    let getInpPass = document.querySelector('#password');
    let getInpPass_2 = document.querySelector('#password_2');
    let email = getInpEmail.value;
    let pass = getInpPass.value;
    if(email.length > 0 && pass.length > 0){
        // проверяем поля на совпадение паролей
        if(getInpPass_2.value == getInpPass.value){
            $.ajax({
                method: "POST",
                url: 'createUser.php',
                data: {
                    "email": email,
                    "pass": pass,
                },
                success: function(data){
                    console.log(data)
                    alert('пользователь успешно зарегистрирован')
                    location="http://forum/";
                },
                error: function(thrownError) {console.log(thrownError)}
            });
            // очистить формы
            getInpEmail.value = null;
            getInpPass.value = null;
            getInpPass_2.value = null;
        }
        else{
            alert('пароли не совпадают');
        }
    }
    else{
        alert('поля email и password должны быть заполнены');
    }
    
}

