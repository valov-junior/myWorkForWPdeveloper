<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
   
   
    


</head>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="" alt=""><img src="./img/Logologo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto nav_menu">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                    apparel
                  </a>
                  <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>                   
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                      office & home
                    </a>
                    <div class="dropdown-menu dropdown_line" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                <li class="nav-item"><a href="" class="nav-link">bags</a></li>
                <li class="nav-item"><a href="" class="nav-link">tech</a></li>
                <li class="nav-item"><a href="" class="nav-link">drinkware</a></li>
                <li class="nav-item"><a href="" class="nav-link">gifts</a></li>
              </ul>
              <div class="nav_right">
                <a href=""><i class="fa fa-trash icon_cart"  aria-hidden="true"></i></a>
                <a href="/registration.php"> <button>create an account</button></a>
                
              </div> 
                
            </div>
          </nav>
          
        <form action="registration_check.php" method="post" >
           <input type="text" name="username" value="<?= $_COOKIE['username'] ?>" placeholder="Введите имя" class="form-control" >
           <p class="text-danger"><?= $_COOKIE['errorUserName'] ?></p>
           <input type="email" name="email" value="<?= $_COOKIE['email'] ?>" placeholder="Введите email" class="form-control" >
           <p class="text-danger"> <?= $_COOKIE['errorEmail'] ?> </p>
           <input type="password" name="password" value="<?= $_COOKIE['password'] ?>" placeholder="Введите пароль" class="form-control" >
           <p class="text-danger"> <?= $_COOKIE['errorPassword'] ?>  </p>
           <textarea name="massage" placeholder="Введите сообщение" class="form-control" ><?= $_COOKIE['massage'] ?></textarea>
           <p class="text-danger"> <?= $_COOKIE['errorMassage'] ?>  </p>
           <input type="submit" value="Отправить" class="btn btn-success button">
        </form>

        <style>
            .button{
        padding: 9px 25px;
        background-color: #181818;
        text-transform: uppercase;
        color: white;
        border-radius: 3px;
        border: none;
        cursor: pointer;
        transition: all .3s ease 0s;
    }
    .button:hover{
        background: transparent;
        color: #181818;
        border-radius: 3px;
        border: 1px solid #181818
    }
            
        </style>
    </div>

    
</header>

