<?php

class Controller_Search extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $search_model = $this->model->load('search');               // model_search

        $this->data['products'] = $search_model->search_products( $limit, 0); //$product_name    // array with data from db
        $this->view->generate('template_view.php', 'search_view.php', $this->data);
    }
}