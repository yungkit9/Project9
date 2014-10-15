<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productclass
 *
 * @author Shams
 */
include_once '../Main.php';

class Productclass extends Main {

    function __construct() {
        parent::__construct();
    }

    function prodArray($type) {
        try {
            $prep = $this->pdo->prepare('select * from producten where Typenaam = :type;');
            $prep->execute(array(':type' => $type));
            $raw = $prep->fetchAll(PDO::FETCH_ASSOC);
            $this->echoData($raw);
        } catch (PDOException $ex) {
            echo $ex;
        }
        return;
    }

    function prodpageArray($id) {
        try {
            $prep = $this->pdo->prepare('select * from producten where id = :id;');
            $prep->execute(array(':id' => $id));
            $raw = $prep->fetchAll(PDO::FETCH_ASSOC);
            $this->echoData($raw);
        } catch (PDOException $ex) {
            echo $ex;
        }
        return;
    }

    function echoData($data) {
        echo json_encode($data);
    }

}

$obj = new Productclass();
if (isset($_GET['type'])) {
    $obj->prodArray($_GET['type']);
} elseif (isset($_GET['id'])) {
    $obj->prodpageArray($_GET['id']);
}