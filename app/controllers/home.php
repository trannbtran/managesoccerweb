<?php
class home extends controller
{
    function index()
    {
        $data['page_title'] = "Home";
        $this->view("page/index", $data);
    }
    
}
?>