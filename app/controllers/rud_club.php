<?php
class rud_club extends controller
{
    
    function index()
    {
        
        $coach = $this->loadModel("coach");
        $data['coach'] = $coach->get();
        $stadium = $this->loadModel("stadium");
        $data['stadium'] = $stadium->get();
        $club = $this->loadModel("club");
        $data['club'] = $club->getClub();
        $data['view'] = $club->viewclub();  
        
        if(isset($_POST['updateclubbtn']))
        {
            $data['club'] = $club->updateclub($_POST);
        }
        if(isset($_POST['delete_clubid']))
        {
            $data['club'] = $club->deleteclub($_POST);
        }
        /* if(isset($_POST['delete_clubid']))
        {
            $data['club'] = $club->viewclubplayer($_POST);
        } */
        $data['page_title'] = "View club";        
        $this->view("page/viewClub", $data);
    }
    
}
?>