<?php
class Controller_404 extends Controller
{
    function action_index($param = null)
    {
        $this->view->generate('template_view.php', '404_view.php', $this->data);
    }
}