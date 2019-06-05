<?php

require_once "DataHandler.php";

class ExampleModel {

    public function __construct() {
        $this->dataHandler = new DataHandler(DB_HOST, DB_DB, DB_USERNAME, DB_PASSWORD);
    }

    // example
    public function readProduct($id) {
        try {
        return $this->dataHandler->readData(
            "SELECT menuitem , prijs as 'p/s' , aantal, (prijs*aantal) as 'Totaal' FROM bestelling NATURAL JOIN menuitem NATURAL JOIN reservering WHERE reservering_id = $id");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function addProduct() {
        try {
        return $this->dataHandler->readData(
            "SELECT menuitem , prijs, menuitemcode, tafel, reservering_id FROM menuitem NATURAL JOIN bestelling NATURAL JOIN bestelling");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function readReservering() {
        try {
        return $this->dataHandler->readData(
            "SELECT * FROM reservering GROUP BY date");
        } catch (Exeption $e) {
            throw $e;
        }
    }

    public function addMenuitem($id, $id_m, $tafel) {
        $menu = "SELECT * FROM bestel_regels WHERE bon_id = $id" ;
        $aantal = $this->dataHandler->readData($menu);

        if ($aantal) {
            try {
                return $this->dataHandler->updateData(
                    "UPDATE bestel_regels SET aantal = aantal + 1 WHERE reservering_id = $id");
                } catch (Exeption $e) {
                    throw $e;
                }
        } else {
            try {
                return $this->dataHandler->readData(
                    "INSERT INTO bestel_regels (bon_id, menuitemcode, aantal) VALUES ($id_m, $tafel, 1)"
                
                );
                } catch (Exeption $e) {
                    throw $e;
                }
        }
           
    }

    public function deleteMenuitem($id) {

            $menu = "SELECT * FROM bestelling WHERE bestelling_id = $id" ;
            $aantal = $this->dataHandler->readData($menu)[0]['aantal'] - 1;
    
            if($aantal){
    
                try {
                    $this->dataHandler->updateData(
                        "UPDATE bestelling SET aantal = aantal - 1 WHERE reservering_id = $id"
             
                    );
                    } catch (Exeption $e) {
                        throw $e;
                    }
            }else{
                try {
                    $this->dataHandler->deleteData(
                        "DELETE FROM `bestelling` WHERE reservering_id = $id AND menuitemcode = $id_m"
                    );
                    } catch (Exeption $e) {
                        throw $e;
                    }
            }
    }
}