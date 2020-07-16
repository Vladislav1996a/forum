function getId(){
    const btn = document.querySelectorAll("#btn");
    const elem = document.querySelectorAll("#post");
    let getcommit = document.querySelectorAll('#reply_to_commit');
    for (let i = 0; i < btn.length; i++) {
        if(getcommit[i].value.length >0){
            if(localStorage.getItem('number') != null){
                btn[i]
                let id = elem[i].getAttribute("data-id");
                let value_commit = getcommit[i].value;
                $.ajax({
                    method: "POST",
                    url: 'coment.php',
                    data: {
                        "id": id,
                        'value': value_commit
                    },
                    success: function(data){
                        location="http://forum/";
                        console.log(data)
                    },
                    error: function(thrownError) {console.log(thrownError)}
                });
                getcommit[i].value = null;
            }
        }
    }
}