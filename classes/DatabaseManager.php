<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $servername;
    private $username;
    private $password;
    private $charset;
    private $host;
    private $name;
    public $mydatabase="pokemon";
    
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database;

    public function __construct(string $host, string $name, string $password)
    {
        $this->host=$host;
        $this->name=$name;
        $this->password=$password;
        // TODO: Set any user and password information
    }

    public function connect()
    {    

        try{
            $dsn="mysql:host=localhost;dbname=pokemon;";
            $pdo = new PDO($dsn, $this->name, $this->password );
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->database=$pdo;
            echo "You have connected!";
        } catch (\Exception $e){
            echo"Connection failed: ".$e->getMessage();
        }
        


    }
        
}