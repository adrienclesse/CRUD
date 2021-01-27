<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern

class CardRepository
{
    
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create()
    {
        if(!empty($_POST["name"])&&!empty($_POST["type"])){
        $pokemonNames=$_POST["name"];
        $pokemonType=$_POST["type"];
        $sql="INSERT INTO  pokemon(name, type) VALUES(?,?)";
        $result = $this->databaseManager->database->prepare($sql);
        $result->execute([$pokemonNames,$pokemonType]);
        echo $pokemonNames. $pokemonType;
        }
    }

    // Get one
    public function find()
    {

    }

    // Get all
    public function get()
    {
        $sql="SELECT * FROM pokemon";
        return $this->databaseManager->database->query($sql);

        

        // TODO: replace dummy data by real one
        

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->database-> (runYourQueryHere)
    }

    //$result=$this->databaseManager->mydatabase->query("SELECT * FROM measures")
    public function update()
    {

    }

    public function delete()
    {

    }

}