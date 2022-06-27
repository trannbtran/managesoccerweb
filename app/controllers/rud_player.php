<?php
class rud_player extends controller
{
    
    function index()
    {
        $player = $this->loadModel("player");
        $data['player'] = $player->get();  
        $data['player'] = $player->view_player(); 
        $club = $this->loadModel("club");
        $data['club'] = $club->getClub();
        if(isset($_POST['update_playerid']))
        {
            $data['club'] = $club->update_player($_POST);
        }
        if(isset($_POST['delete_playerid']))
        {
            $data['club'] = $club->delete_player($_POST);
        }
        $data['page_title'] = "View player";
        $this->view("page/viewPlayer", $data);
    }
    
}
?>