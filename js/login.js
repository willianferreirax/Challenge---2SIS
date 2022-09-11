$('#btn_login').click(()=>{
    email = $('#email').val();
    senha = $('#password').val();

    // console.log(senha);

    if(email && senha){

        $.ajax({
            method:'post',
            dataType:'json',
            url: 'api/auth/login.php',
            data:{
                'email':email,
                'passwd':senha
            },

            success: function (data){
                if(data == 0 ){
                    $('#response').empty();
                    $('#response').html(`<p>Email e(ou) senha incorreto(s)!</p>`);
                }
                else if(data == 1){
                    window.location.href = "treinar.php";
                }
                else if(data == 2){
                    window.location.href = "index.php";
                }
                else{
                    alert('Algo deu errado');
                }
            }
        })
    }
    else{
        $('#response').empty();
        $('#response').html(`Preencha todos os campos`);
    }
})