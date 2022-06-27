<?php
class add_player extends controller
{
    
    function index()
    {
        $club = $this->loadModel("club");
        $data['clubs'] = $club->getClub();
        if(isset($_POST['Fullname']))
 	 	{

            $player = $this->loadModel("player");
            $player->add_player($_POST);

 	 	}
        
        $data['page_title'] = "Add player";
        $this->view("page/addPlayer", $data);
    }
    
}
?>