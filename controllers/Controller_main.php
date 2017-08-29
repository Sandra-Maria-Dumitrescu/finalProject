<?php
class Controller_Main extends Controller
{
    function action_index($param = null)
    {
        $this->view->generate( 'template_view.php', 'main_view.php', $this->data);
    }
}