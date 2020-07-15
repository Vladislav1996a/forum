let user = document.querySelector('#user');
if(localStorage.getItem('number') != null){
    user.innerHTML = 'добро пожаловать ' + localStorage.getItem('number');
}
function signIn(){
    let emailSign = document.querySelector('#emailSign');
    let passSign = document.querySelector('#passSign');
  
    let emailValue = emailSign.value;
    let passValue = passSign.value;

    $.ajax({
        method: "POST",
        url: 'signInUser.php',
        dataType: 'json',
        data: {
            "emailSign": emailValue,
            "passSign": passValue,
        },
        success: function(data){
            localStorage.setItem('number',data[0].email)
            console.log(localStorage.getItem('number'))
            location="http://forum/";
        },
        error: function(thrownError) {console.log('ошибка')}
    });
}