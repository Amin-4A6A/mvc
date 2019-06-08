<?php

require_once "model/ExampleModel.php";

class Homecontroller {

    public function __construct() {
        $this->ExampleModel = new ExampleModel();
    }
    
    public function home() {
        
        include "view/test.php";
    }

    public function getXMLData()
    {
        if(isset($_POST['import']))
        {
            // copy($_FILES['xml']['tmp_name'], $_FILES['xml']['name']);

            $data = simplexml_load_file($_FILES['xml']['tmp_name']);

            return $data;
        }
    }

    public function storeXMLData()
    {
        $data = $this->getXMLData();
        $this->ExampleModel->processXMLData($data);
    }
    
}
