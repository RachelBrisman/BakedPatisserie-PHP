<?php
function emptyInputSignup($name, $phone, $email){
    $result;
    if(empty($name) || empty($phone) || empty($email)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}
function invalidTel($tel){
    $result;
    $justNums = preg_replace("/[^0-9]/", '', $tel);

    if (strlen($justNums) == 11) {
        $justNums = preg_replace("/^1/", '',$justNums);
    }

    if (strlen($justNums) == 10){
        $result = false;
    } else{
        $result = true;
    }
    return $result;
}
function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
}