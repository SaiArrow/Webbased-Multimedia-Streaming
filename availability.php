<?php
	include 'connect.php';
	session_start();
	
	$book_name = $_POST['book_name'];
	$user_id = $_SESSION['pat_id'];
	$user_name=$_SESSION['pat_name'];

	$sql = "SELECT * FROM book_details where book_name='$book_name'";

	$result = $mysqli->query($sql) or die("BLAH!");
	$result=$result->fetch_assoc();
 
 		$book_id=$result['book_id'];
 		$link=$result['link'];
		$_SESSION['user_id']=$user_id;
		$_SESSION['book_name']=$book_name;	
		$cost='500';
		
		header("Location:confirmbooking.php");	
		$query2 = "INSERT INTO reservation values(default,'$user_id','$book_id','$book_name','$cost','$link')";
		echo($query2);
		$mysqli->query($query2) or die("insert error");
		$roombooked=true;
			
	//$data = array();

	/*if ($result->num_rows > 0)
	{
		echo $result;
		while($row = $result->fetch_assoc())
		{
			echo '<script language="javascript">';
			echo 'alert("timeslot.1")';
			echo '</script>';
			
			$data[] = $row;
		}
		for($i=0;$i<$result->num_rows;$i++)
		{
			$x = $data[$i]['user_name'];
			$query = "SELECT * from reservation where user_name=".(int)$x;
			

			$result2 = $mysqli->query($query) or die("BANG");

			if($result2->num_rows == 0)  //that room is not booked
			{
				$_SESSION['doc_name']=$x;
				$_SESSION['Date']=$Date;
				$roombooked=true;
				header("Location:confirmbooking.php");
				MAKE PAYment page and then insert value to book room
				$query2 = "INSERT INTO reservation values(default,'$pat_id',".(int)$x.",'$Date','$checkout')";
				echo $query2;
				$mysqli->query($query2) or die("insert error");
				$roombooked=true;
				break;
			}
			else
			{
				$roombooked=false;
			}
		}
		$roombooked=false;
		if($roombooked==false)
		{
			for($j=0;$j<$result->num_rows;$j++) 
			{
				$val=0;
				$x = $data[$j]['doc_name'];

				$query = "SELECT * from reservation where doc_name=".(int)$x;

				

				$result2 = $mysqli->query($query) or die("BANG");
				while($row = $result2->fetch_assoc())
				{
					$booked[] = $row;
				}
				


				for($k=0;$k<$result2->num_rows;$k++)
				{

					$Timeslot = $booked[$k]['Timeslot'];           //get all the details of the room (on which which date periods it is booked)
					$cin = $booked[$k]['Date'];
					$cout = $booked[$k]['Checkout'];

					$cin = strtotime($cin);
					$cout = strtotime($cout);
					$tsDate = strtotime($Date);
					$tscheckout = strtotime($checkout);


					if((($tsDate < $cin)&&($tscheckout<=$cin))||(($tsDate>=$cout)&&($tscheckout>$cout)))
					{
						$val++;
					}
					else
					{
						$val = 0;
						$roombooked=false;
					}
					
				}
				if($val==$result2->num_rows)
				{
					$_SESSION['Timeslot']=$Timeslot;
					$_SESSION['Date']=$Date;
					header("Location:confirmbooking.php");	
					$query2 = "INSERT INTO reservation values(default,'$book_name','$author_name','$year_of_pub','genre')";
					$mysqli->query($query2) or die("insert error");
					$roombooked=true;
					
					break;
				}
				$booked = array();
			}
		}
		if($roombooked)
		{
			echo "Appointment successfully booked!";
		}
		else
		{
			echo '<script language="javascript">';
			echo 'alert("All appointments booked for these dates! Try different dates or select different timeslot.")';
			echo '</script>';
			$validation=0;
			

		}
	}
	else if($result->num_rows == 0)
	{	
		$x=$_POST['doc_name'];
		$_SESSION['doc_id']=$doc_id;
		$_SESSION['pat_id']=$pat_id;
		$_SESSION['pat_name']=$pat_name;
		$_SESSION['Timeslot']=$Timeslot;
		$_SESSION['Date']=$Date;
		header("Location:confirmbooking.php");	
		$query2 = "INSERT INTO reservation values(default,'$pat_id','$pat_name','".$x."','$Timeslot','$Date')";
		echo($query2);
		$mysqli->query($query2) or die("insert error");
		$roombooked=true;
					
		
	}
	else
	{
		echo '<script language="javascript">';
		echo 'alert("All appointments booked for these dates! Try different dates or select different timeslot.")';
		echo '</script>';

		$validation=0;
		
			
	}
	
	if($validation==0)
	{
		echo '<script>';
		echo 'location="bookroom.php"';
		echo '</script>';
	}*/
?>