<?php
session_start();
class users{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="portal";
	public $conn;
	public $data;
	public $cat;
	public $qus;




	public function __construct()
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if ($this->conn->connect_errno) {
			die("Database Connection Failed".$this->conn->connect_errno );
		}
	}

	public function users($data)
	{
		$this->conn->query($data);
		return true;
	}
	

	public function signin($email,$password)
	{
			$query= $this->conn->query("select * from admin where email='$email' && password='$password' ");
			$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0)
			{
				$_SESSION['email']=$email;
				return true;
			}
			else
			{
				return false;
			}
		
	}
	public function users_profile($email)
	{
		$query= $this->conn->query("select * from admin where email='$email'");
			$row=$query->fetch_array(MYSQLI_ASSOC);
			if($query->num_rows>0)
			{
				$this->data[]=$row;
				
			}
			return $this->data;
	}
	public function cat($rec)
	{
		$a=$this->conn->query($rec);
		return true;
	}
	public function url($url)
	{
		header("location:".$url);
	}
}
?>