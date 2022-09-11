$('#btn_cadastrar').click(()=>{
    nome = $('#name').val();
    email = $('#email').val();
    senha = $('#password').val();
    confirm_pass = $('#password2').val();


    if(nome && email && senha && confirm_pass){

        $.ajax({
            method:'post',
            dataType:'json',
            url: 'api/user/createUser.php',
            data:{
                'name' : nome,
                'email':email,
                'passwd':senha,
                'confirm':confirm_pass
            },

            success: function (data){
                if(data.status == 0 ){
                    $('#response').empty();
                    $('#response').html(`${data.message}`);
                }
                else if(data.status == 1){
                    window.location.href = "login.php";
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