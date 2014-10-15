<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inlogclass
 *
 * @author Shams
 */

include_once '../Main.php';
class Inlogclass extends Main {
        function __construct(){
            parent::__construct();
    }
    function retrieveLogInput(){
        if(isset($_POST['loguit'])){
            $this->login(false);
            return;
        }
        $user['name'] = $_POST['loginusername'];
        $user['pass'] = md5($_POST['loginww']);
        
        $this->checkUser($user['name'],$user['pass']);
        
        

        return;
    }
    
    function checkUser($user, $pass) {
            

        
    $prep = $this->pdo->prepare('select * from gebruikers where gebruikersnaam = :user and wachtwoord = :pass;');
    $prep->execute(array(':user' => $user, ':pass'=>$pass));
    $rawdata = $prep->fetchAll(PDO::FETCH_ASSOC);
  
    if (!empty($rawdata)){
        $this->login(true, $user, $pass, $rawdata[0]['rol']);
    } else {
        header('Location: ../pages/login.php');
        //bericht(error,"Gebruikersnaam of wachtwoord onjuist."); toekomstige foutmelding functie
    }
        return;
    }
    function login($bool, $user="", $rol=""){ //bool true = log in, bool false = log uit
        if($bool == true){
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['rol'] = $rol;
            header('Location:../');
        } elseif ($bool == false) {
            session_start();
            session_destroy();
            header('Location:../');
            
        }
        return;
    }
}
$obj = new Inlogclass();

$obj->retrieveLogInput();
