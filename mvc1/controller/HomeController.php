<?php

require_once "model/ExampleModel.php";

class Homecontroller {

    public function __construct() {
        $this->ExampleModel = new ExampleModel();
    }
    
    public function home() {
        
        $bon = $this->ExampleModel->readProduct();
        
        include "view/test.php";
    }

    public function bestelling($id) {
        // $id = $_GET['id'];
        
        $bon = $this->ExampleModel->readProduct($id);
        $card = $this->ExampleModel->addProduct();
        
        include "view/bestelling.php";
    }
    public function addtobon($id, $id_m, $tafel) {
        
        $menu = $this->ExampleModel->addMenuitem($id, $id_m, $tafel);
        
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    // public function deletebon($id, $id_m, $tafel) {
        
    //     $menu = $this->ExampleModel->addMenuitem($id, $id_m, $tafel);
        
    //     header('Location: ' . $_SERVER['HTTP_REFERER']);
    // }
    public function reservering() {
        
        // $bon = $this->ExampleModel->readProduct();
        $reservering = $this->ExampleModel->readReservering();
        
        include "view/reservering.php";
    }
    
}
