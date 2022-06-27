<?php

class User
{
    function login($POST)
    {
        $DB = new Database();
        $_SESSION['error'] = "";
        if(isset($POST['username']) && isset($POST['password']))
        {
            $arr['username'] = $POST['username'];
            $arr['password'] = $POST['password'];
    
            $query = "select * from user where username = :username and password = :password limit 1";
            $data = $DB->read($query,$arr);
            if(is_array($data))
            {
                $_SESSION['user_id'] = $data[0]->userid;
                $_SESSION['user_naem'] = $data[0]->username;
                $_SESSION['user_id'] = $data[0]->userid;
            }
            else
            {
                $_SESSION['error'] = "wrong username or password";
            }
    
        } 
        else 
        {
            $_SESSION['error'] = "please enter valid user and password";
        }

        
    }
    function check_login()
    {
        $DB = new Database();
		if(isset($_SESSION['user_id']))
		{

			$arr['user_id'] = $_SESSION['user_id'];

			$query = "select * from users where user_id = :user_id limit 1";
			$data = $DB->read($query,$arr);
			if(is_array($data))
			{
				//logged in
 				$_SESSION['user_name'] = $data[0]->username;
				$_SESSION['user_id'] = $data[0]->userid;

				return true;
			}
		}

		return false;

    }
    
}