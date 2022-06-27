<?php

class Player
{
	function get()
	{
		$DB = new Database();
		$query = "select * from player";
		$data = $DB->read($query);
		return $data;
	}
	function view_player()
	{
		$DB = new Database();
		$query = "select PlayerID, FullName, ClubName, DOB, Position, Nationality, Number from player join club on player.ClubID = club.ClubID";
		$data = $DB->read($query);
		return $data;
	}
    function add_player($POST)
	{

		$DB = new Database();
		show($POST);
		$_SESSION['error'] = "";
		$query = "SELECT PlayerID FROM player ORDER BY PlayerID DESC LIMIT 1";

        //Get the result
		$id = 0;
		$getid = $DB->read($query);
		if(isset($POST['Fullname']))
		{
			if($getid)
			{	
				foreach($getid as $row)
				{
					$id = $row->PlayerID + 1;
				}
				
			}
			else{
				$id = 1;
			}
				$arr['PlayerID'] =  $id;
				$arr['FullName'] = $POST['Fullname'];
				$arr['ClubID'] = $POST['clubid'];
				$arr['DOB'] = $POST['Dob'];
				$arr['Position'] = $POST['position'];
				$arr['Nationality'] = $POST['nationality'];
				$arr['Number'] = $POST['number'];

				$query1 = "insert into player (PlayerID,FullName,ClubID, DOB, Position, Nationality, Number) values 
				(:PlayerID,:FullName,:ClubID, :DOB, :Position, :Nationality, :Number)";
				// show($query1);
				$data = $DB->write($query1,$arr);
				show($data);
				if($data)
				{
					// header("Location:". ROOT . "add_player");
					// die;
				}

		}
		else{
			$_SESSION['error'] = "please enter a valid player name";
		}
		
	}

	function update_player($POST)
	{

		$DB = new Database();
		show($POST);
		$_SESSION['error'] = "";
		if(isset($POST['PlayerID']))
		{
			
				$arr['PlayerID'] = $POST['PlayerID'];
				$arr['FullName'] = $POST['Fullname'];
				$arr['ClubID'] = $POST['clubid'];
				$arr['DOB'] = $POST['Dob'];
				$arr['Position'] = $POST['position'];
				$arr['Nationality'] = $POST['nationality'];
				$arr['Number'] = $POST['number'];

				$query1 = "insert into player (PlayerID,FullName,ClubID, DOB, Postition, Nationality, Number) values 
				(:PlayerID,:FullName,:ClubID, :DOB, :Position, :Nationality, :Number)";
				// show($query1);
				$data = $DB->write($query1,$arr);
				show($data);
				if($data)
				{
					// header("Location:". ROOT . "add_player");
					// die;
				}

		}
		else{
			$_SESSION['error'] = "please enter a valid player name";
		}
		
	}

	function delete_player($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
		show($POST);
		if(isset($POST['delete_playerid']))
		{
							
			$query1 = "delete from  player
			where PlayerID = :delete_playerid";
			$data = $DB->write($query1);
			if($data)
			{
					
				header("Location:". ROOT . "rud_club");
				die;
			}

		}
		else
		{
			$_SESSION['error'] = "Hãy nhập tên phù hợp";
		}
		
	}
    
}