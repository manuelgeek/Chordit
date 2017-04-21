<?php

require_once 'dbconfig.php';

class ADMIN
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	
	
	public function login($email,$upass)
	{
		try
		{
			$stmt = $this->conn->prepare("SELECT * FROM tbl_admin WHERE email=:email_id");
			$stmt->execute(array(":email_id"=>$email));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			
			if($stmt->rowCount() == 1)
			{
				
					if($userRow['pass']==$upass)
					{
						$_SESSION['adminSession'] = $userRow['email'];
						return true;
					}
					else
					{
						header("Location: index.php?error");
						exit;
					}
				
			}
			else
			{
				header("Location: index.php?error");
				exit;
			}		
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
	}
	
	
	public function is_logged_in()
	{
		if(isset($_SESSION['adminSession']))
		{
			return true;
		}
	}
	
	public function redirect($url)
	{
		header("Location: $url");
	}
	
	public function logout()
	{
		session_destroy();
		$_SESSION['adminSession'] = false;
	}
	
	public function admin_post($title,$description,$cartegory,$userpic,$artist)
	{
		try {
			 

					$stmt = $this->conn->prepare("INSERT INTO music_posts(title,description,cartegory,photo,artist) 
			                                             VALUES(:user_name, :user_desc, :user_cart, :user_pic, :user_art)");
					$stmt->bindparam(":user_name",$title);
					
					//$stmt->bindparam(":user_phone",$phone);
					
					$stmt->bindparam(":user_desc",$description);
					$stmt->bindparam(":user_cart",$cartegory);
					$stmt->bindparam(":user_pic",$userpic);
					$stmt->bindparam(":user_art",$artist);
					//$stmt->bindparam(":user_img",$piced);
					
					$stmt->execute();	
					return $stmt;
				
		} catch (PDOException $ex) {
			echo $ex->getMessage();
		}
	}
	

	
}