<?php

class Controller_contact extends Controller
{
    function action_index($param = null)
    {
        $this->view->generate( 'template_view.php', 'contact_view.php', $this->data);
    }
}