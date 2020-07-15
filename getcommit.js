let getcommit = document.querySelector('#commit');

function addCommit(){
    if(getcommit.value.length >0){
        if(localStorage.getItem('number') != null){
            let commits = getcommit.value;
            $.ajax({
                method: "POST",
                url: 'comments.php',
                data: {
                    "commits": commits
                },
                success: function(data){
                    location="http://forum/";
                },
                error: function(thrownError) {console.log(thrownError)}
            });
            getcommit.value = null;
        }
        else{
            alert('Войдите или зарегиструйтесь')
        }
    }
    else{
        alert('введите текст комментария')
    }
}