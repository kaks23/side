<?php 
    namespace conn;
    use PDO;
    use PDOException;

class connect
{
    //const params mysql
    private const hostname = 'localhost';
    private const username = 'root';
    private const password = '';
    private const dbname = 'ksiegarnia';
    private $conn;

    public function __construct()
    {
        try
        {
            $conn = new PDO('mysql:host='.connect::hostname.';dbname='.connect::dbname, connect::username, connect::password); //connect
            return $this->conn = $conn; //return connect
            $conn = null; //clsoe connect
        }catch(PDOException $e){
            echo $e->getMessage();//print error
        }

    }
    public function prepare($query)//prepare function
    {
        return $this->conn->prepare($query);
    }
}
?>