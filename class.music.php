<?php

					

class paginate
{
	private $db;
	
	function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;

		// $this->db = $conn;
	}
	
	public function dataview($query)
	{
		//   error_reporting( ~E_NOTICE ); // avoid notice

		// $farmer_name = new FARMER();
		// 					$stmt = $farmer_name->runQuery("SELECT * FROM tbl_farmers WHERE email=:email_id");
		// 					$stmt->execute(array(":email_id"=>$_SESSION['farmerSession']));
		// 					$name = $stmt->fetch(PDO::FETCH_ASSOC);

		$stmt = $this->conn->prepare($query);
		$stmt->execute();
	
		if($stmt->rowCount()>0)
		{
			while($row=$stmt->fetch(PDO::FETCH_ASSOC))
			{
			  
				?>
				
			<div class="col-md-4 col-sm-4">
			<div class="col-md-12 card">
					<div class="col-md-12" id="hert">
                    	<h3 class="h3"><a href="music_view?song=<?php echo $row['ID']; ?>"><?php echo $row['title']; ?></a></h3>
                    </div>
                    <div class="col-md-12" id="hset">
                    <h6 class="h6"><a href="music_view?song=<?php echo $row['ID']; ?>">See the chord...</a></h6>
                    <span><?php echo $row['artist']; ?> <span class="pull-right"><?php
                    date_default_timezone_set('Africa/Nairobi');
                                            $timestamp1 = $row['timer'];
                                            //$today = date("Y-m-d H:i:s");
                                            $passed1 = time() - strtotime($timestamp1);
                                            $days1 = floor($passed1 / 86400);
                                            $passed1 %= 86400;
                                            $hours1 = floor($passed1 / 3600);
                                            $passed1 %= 3600;
                                            $minutes1 = floor($passed1 / 60);
                                            if ($days1>=1) {
                                                echo $hours1;    
                                            ?>&nbsp;Days&nbsp;<?php
                                            } else{
                                            if($hours1>=1){
                                            echo $hours1;    
                                            ?>&nbsp;Hrs&nbsp;<?php
                                                }
                                            echo $minutes1; ?>mins ago
                                            <?php }?> </span></span>
                    </div>
                </div>
             </div>
               
                <?php
			}
		}
		else
		{
			?>
            <tr>
            <td>Nothing here...</td>
            </tr>
            <?php
		}
		
	}
	
	public function paging($query,$records_per_page)
	{
		$starting_position=0;
		if(isset($_GET["page_no"]))
		{
			$starting_position=($_GET["page_no"]-1)*$records_per_page;
		}
		$query2=$query." limit $starting_position,$records_per_page";
		return $query2;
	}
	
	public function paginglink($query,$records_per_page)
	{
		
		$self = $_SERVER['PHP_SELF'];
		
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		
		$total_no_of_records = $stmt->rowCount();
		
		if($total_no_of_records > 0)
		{
			?><tr><td colspan="3"><?php
			$total_no_of_pages=ceil($total_no_of_records/$records_per_page);
			$current_page=1;
			if(isset($_GET["page_no"]))
			{
				$current_page=$_GET["page_no"];

			}
			if($current_page!=1)
			{
				$previous =$current_page-1;
				
				echo "<li><a href='".$self."?page_no=1'>First</a>&nbsp;&nbsp;</li>";
				echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a>&nbsp;&nbsp;</li>";
			}
			for($i=1;$i<=$total_no_of_pages;$i++)
			{
				if($i==$current_page)
				{		
					
					echo "<li class='active'><a href='".$self."?page_no=".$i."'>".$i."</a></li>";

				}
				else
				{	 
					echo "<li><a  href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;</li>";
				}
			}
			if($current_page!=$total_no_of_pages)
			{
				$next=$current_page+1;
				echo "<li><a  href='".$self."?page_no=".$next."'>Next</a>&nbsp;&nbsp;</li>";
				echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;</li>";
				
			}
			?></td></tr><?php
		}
	}
}