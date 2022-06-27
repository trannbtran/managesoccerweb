<?php

class Club
{
    function getClub()
    {
        $DB = new Database();
        $query = "select * from club";
        $data = $DB->read($query);
		return $data;
    }
	function viewclub()
	{
		$DB = new Database();
        $query = "select ClubID, ClubName, Shortname, CFullName, SName from club join coach on club.CoachID = coach.CoachID join stadium on club.StadiumID = stadium.StadiumID;";
        $data = $DB->read($query);
		return $data;
	}
	function viewclubplayer($POST)
	{
		$DB = new Database();

		if(isset($POST['view_clubplayerid']))
		{
				
			$query1 = "select PlayerID,FullName, DOB, Position, Nationality, Number 
			from club join player on club.ClubID = player.ClubID 
			where player.ClubID = :clubplayerid";
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
		$data = $DB->read($query);
		return $data;
	}
    function addclub($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
        $query = "SELECT ClubID FROM club ORDER BY ClubID DESC LIMIT 1";

        //Get the result
		$id = 0;
		$getid = $DB->read($query);
		if(isset($POST['Clubname']))
		{
			if($getid)
			{	
				foreach($getid as $row)
				{
					$id = $row->ClubID + 1;
				}
				
			}
			else{
				$id = 1;
			}
			$arr['ClubID'] = $id;
			$arr['ClubName'] = $POST['Clubname'];
			$arr['Shortname'] = $POST['Shortname'];
			$arr['StadiumID'] = $POST['stadiumid'];
			$arr['CoachID'] = $POST['coachid'];
				
			$query1 = "insert into club (ClubID,ClubName,Shortname,StadiumID,CoachID) values 
			(:ClubID,:ClubName,:Shortname,:StadiumID,:CoachID)";
			$data = $DB->write($query1,$arr);
			if($data)
			{
					
				header("Location:". ROOT . "add_club");
				die;
			}

		}
		else
		{
			$_SESSION['error'] = "Hãy nhập tên phù hợp";
		}
		
	}

	function updateclub($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
    
		if(isset($POST['update_clubid']))
		{
			
			$arr['ClubName'] = $POST['Clubname'];
			$arr['Shortname'] = $POST['Shortname'];
			$arr['StadiumID'] = $POST['stadiumid'];
			$arr['CoachID'] = $POST['coachid'];
				
			$query1 = "update  club 
			set ClubName = :ClubName, Shortname = :Shortname, StadiumID = :StadiumID, CoachID = :CoachID) 
			where ClubID = :update_clubid";
			$data = $DB->write($query1,$arr);
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

	function deleteclub($POST)
	{

		$DB = new Database();
		$_SESSION['error'] = "";
		show($POST);
		if(isset($POST['delete_clubid']))
		{
							
			$query1 = "delete from  club 
			where ClubID = :delete_clubid";
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