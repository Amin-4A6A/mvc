<?php

require_once "DataHandler.php";

class ExampleModel {

    public function __construct() {
        $this->dataHandler = new DataHandler(DB_HOST, DB_DB, DB_USERNAME, DB_PASSWORD);
    }

    public function processXMLData($scholen)
    {
        foreach($scholen->mboopen->scholen as $school)
        {
            $id = $school->ID;
            $naam = $school->Naam;
            
            $this->dataHandler->createData(
                "INSERT INTO school (id, naam) VALUES ($id, '$naam')"
            );
        }

       
    }

}