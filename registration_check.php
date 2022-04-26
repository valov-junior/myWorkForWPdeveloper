<?php

function redirect(){
    header("Location: index.php");
    exit;
}
function error(){
    header("Location: registration.php");
    exit;
}



$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));
$massage = htmlspecialchars(trim($_POST['massage']));

setcookie('username', $username, time() +5);
setcookie('email', $email, time() +5);
setcookie('password', $password, time() +5);
setcookie('massage', $massage, time() +5);

if(strlen($username) <= 2){
    setcookie('errorUserName', 'Такого имени не сущевствует', time() +5); 
    error();
}else if($username == ""){
    setcookie('errorUserName', 'Введите правильное имя' , time() +5); 
    error();
} else if($email == ""){
    setcookie('errorEmail', 'Введите правельный email', time() +5); 
    error();
}
else if($password == ""){
    setcookie('errorPassword', 'Введите пароль', time() + 5); 
    error();
} else if(strlen($massage) <= 10){
    setcookie('errorMassage', 'Не менее 10 символов', time() +5); 
    // setcookie('errorMassage', 'Не менее 10 символов', time() -5); 
    error();
} else{
    // setcookie('allseccess', 'Регистрация прошла успешно!', time() +10); 
    // setcookie('allseccess', 'Регистрация прошла успешно!', time() -5); 
    setcookie('allseccess', 'Регистрация прошла успешно!', time() +5); 
    redirect();
}
    