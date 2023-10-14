<?php
    class Database{
    private $connection;
    function __construct(){
      $this->connect_db();
    }
    public function connect_db(){
      $this->connection = mysqli_connect('localhost', 'root', '', 'assignment1_php');
      if(mysqli_connect_error()){
        die("Database Connection Failed" . mysqli_connect_error());
      }
    }
    public function create($name,$id,$grade,$birthday){
      $sql = "INSERT INTO students (name, id, grade, birthday) VALUES ('$name', '$id', '$grade',' $birthday')";
      $res = mysqli_query($this->connection, $sql);
      if($res){
	 		    return true;
		  }
      else{
			    return false;
		  }
    }
    public function read(){
		    $sql = "SELECT * FROM students";
 		    $res = mysqli_query($this->connection, $sql);
 		    return $res;
	  }
    
  }
  $database = new Database();
?>
