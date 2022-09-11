<?php
    ob_start();
    session_start();

    if(isset($_SESSION['dev']) || isset($_SESSION['user'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RS Prototype</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/login.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
		crossorigin="anonymous" referrerpolicy="no-referrer">

</head>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  
	<symbol id="home" viewBox="0 0 16 16">
		<path
			d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
	</symbol>
  
	<symbol id="speedometer2" viewBox="0 0 16 16">
		<path
			d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
		<path fill-rule="evenodd"
			d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
	</symbol>
  
	<symbol id="people-circle" viewBox="0 0 16 16">
		<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
		<path fill-rule="evenodd"
			d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
	</symbol>
  
  
	<symbol id="tradutor"  viewBox="0 0 16 16">
	  <path fill-rule="evenodd" 
		  d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z"/>
	</symbol>
  
	<symbol id="cadastrar" viewBox = "0 0 16 16">
	 
			 <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
		  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
	</symbol>
  </svg>

<body>
	<header>
        <div class="px-3 py-2 bg-dark text-white">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php"
                        class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
  

                        <img width="100" height="50" src="images/kisspng-midland-dow-chemical-company-chemical-industry-dup-dow-logo-5a75303cb53f19.5870197215176295007424.png" alt="">
                    </a>

                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

                        <li>
                            <a href="index.php" class="nav-link text-light">
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#home" /></svg>
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="tradutor.php" class="nav-link text-light">
         
                                <svg class="bi d-block mx-auto mb-1" width="24" height="24">
                                    <use xlink:href="#tradutor" /></svg>
                                Tradutor
                            </a>
                        </li>
						
						<?php if (!isset($_SESSION['user']) && !isset($_SESSION['dev'])) { ?>
							<li>
								<a href="cadastro.php" class="nav-link text-light">
									<svg class="bi d-block mx-auto mb-1" width="24" height="24">
										<use xlink:href="#cadastrar" /></svg>
									Cadastrar
								</a>
							</li>

							<li>
								<a href="login.php" class="btn btn-danger">
									<svg class="bi d-block mx-auto mb-1" width="24" height="24">
										<use xlink:href="#people-circle" /></svg>
									Login
								</a>
							</li>

						<?php }?>

                    </ul>
                </div>
            </div>
        </div>
  
    </header>

	<main class="container-fluid d-flex justify-content-center align-items-center mt-5">
		<div class="containerLogin shadow">

			<!-- <div class="d-flex justify-content-center"> -->
				<div class="pic">
					<i class="fas fa-user"></i>
				</div>
			<!-- </div> -->
			
	
			<h2 class="title d-flex justify-content-center">Login</h2>
	
			<div class="form">
				<div id="response"></div>
				<label for="email">Email</label>
				<input type="text" name="email" id="email" class="input" autocomplete="off" placeholder="Email">
	
				<label for="password">Senha</label>
				<input type="password" name="password" id="password" class="input" autocomplete="off" placeholder="Senha">
	
				<div class="links">
					<a href="#">Esqueceu a senha?</a>
					<p>Não é cadastrado? <a href="">Cadastre-se</a></p>
				</div>
	
				<button type="submit" id="btn_login"> Login </button>
	
			</div>
	
		</div>
	</main>



	<script src="https://kit.fontawesome.com/21000a3443.js" crossorigin="anonymous"></script>

	<script src="js/jquery.min.js"></script>
	<script src="js/login.js"></script>

	</script>
</body>

</html>