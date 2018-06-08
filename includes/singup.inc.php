<?php
include 'db.php';

if(!isset($_POST["submit"])){
    header("Location:index.php");
}
else{
        $first = $_POST["firstName"];
        $last = $_POST["lastName"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];



        if(empty($first) || empty($last) || empty($username) || empty($email) || empty($password)){
             header("Location:../singup.php?error");
    }else{
        //check if username  is taken
        $sql = "SELECT username, email FROM users";
        $array = query( $sql,$conn);
  
        foreach($array as $item ){
            if($item['username'] === $username){
                header("Location: ../signup.php?error=taken");
                die();
            }else if($item['email'] === $email){
                header("Location: ../signup.php?error=taken");
                die();
            }

        }
                //insert into username
            $insql = "INSERT INTO users(username, email, firstName, lastName, password) VALUES ('$username','$email','$first','$last','$password')";
            insertOrDelete($insql, $conn);
            header("Location:../index.php?success");

        }
      

                    
                    
    }
