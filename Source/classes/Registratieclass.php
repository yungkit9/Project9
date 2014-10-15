<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registratieclass
 *
 * @author Shams
 */
include_once '../Main.php';

class Registratieclass extends Main {

    function __construct() {
        parent::__construct();
    }

    function retrieveRegInput() {
        $user['naam'] = $_POST['naam'];
        $user['email'] = $_POST['email'];
        $user['straat'] = $_POST['straatnaam'];
        $user['nummer'] = $_POST['straatnummer'];
        $user['woonplaats'] = $_POST['woonplaats'];
        $user['username'] = $_POST['regisusername'];
        $user['pass'] = md5($_POST['regiswachtwoord']);
        $user['birth'] = $_POST['geboortedatum'];
      

        
        $this->validateUser($user['naam'], $user['email'], $user['straat'], $user['nummer'], 
                $user['woonplaats'], $user['username'], $user['pass'], $user['birth']);
        
        return;
    }
    

    function validateUser($voornaam, $email, $straat, $nummer, $woonplaats, $gebruiker, $wachtwoord, $geboorte) {
        $prep = $this->pdo->prepare('select * from gebruikers where gebruikersnaam = :user;');
        $prep->execute(array(':user' => $gebruiker));
        $rawdata = $prep->fetchAll(PDO::FETCH_ASSOC);

        if (empty($rawdata)) {
            $this->registreer($voornaam, $email, $straat, $nummer, $woonplaats, $gebruiker, $wachtwoord, $geboorte);
        } else {
            header('Location: ../pages/login.php?exists=true');
        }
        return;
    }

    function registreer($voornaam, $email, $straat, $nummer, $woonplaats, $gebruiker, $wachtwoord, $geboorte) {
        try{
            $prep = $this->pdo->prepare('INSERT INTO '
                . 'gebruikers(gebruikersnaam, '
                . 'wachtwoord, naam, straat, '
                . 'straatnummer, woonplaats, '
                . 'email, rol, geboortedatum) '
                . 'VALUES '
                . '(:username,:password,'
                . ':naam,:straatnaam,:straatnr,'
                . ':woonplaats, :email,"2",:dateofbirth)');
        $prep->execute(array(
            'naam'=>$voornaam,
            'email' => $email,
            'straatnaam'=>$straat,
            'straatnr'=> $nummer,
            'woonplaats'=> $woonplaats,
            'username'=> $gebruiker,
            'password'=> $wachtwoord,
            'dateofbirth'=> $geboorte));
        
        session_start();
        $_SESSION['user'] = $gebruiker;
        $_SESSION['rol'] = 2;
        header("Location: ../");
        return;
        } catch (PDOException $ex) {
              echo $ex;
        }
        

    }

}

$obj = new Registratieclass();

$obj->retrieveRegInput();
