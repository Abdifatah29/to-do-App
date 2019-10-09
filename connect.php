<?php
//create class
class Dbh 
{
    //Properties
    private $servername;
    private $username;
    private $password;
    private $dbname;


    //public methods of a class to run inside the brower
    public function connect() {
        $this->servername = "167.71.74.228";
        $this->username = "abdi";
        $this->password = "adaptive55hells55Yucca";
        $this->dbname = "todoapp";
        
       //try and catch method
       try {
          //created a variable data source name
        $dsn = "mysql:host=".$this->servername. ";dbname=". $this->dbname;
        
        //create the PDO connection
        $pdo = new PDO($dsn, $this->username, $this->password );
        //catch the error and display it on the browser
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully"; 

        //return
        return $pdo;
       } catch (PDOException $e) {
           //echo the error message
           echo "connection failed: ". $e->getMessage();
       }
       

    }
}
