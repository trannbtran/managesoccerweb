<?php
class add_club extends controller
{
    
    function index()
    {
        $coach = $this->loadModel("coach");
        $data['coach'] = $coach->get();
        $stadium = $this->loadModel("stadium");
        $data['stadium'] = $stadium->get();
        if(isset($_POST['Clubname']))
 	 	{
            
            $player = $this->loadModel("club");
            $player->addclub($_POST);

 	 	}
        
        $data['page_title'] = "Add club";
        $this->view("page/addClub", $data);
    }
    
}
?>