<?php
class Controller_Products extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $products_model = $this->model->load('products');               // model_products

        $this->data['products'] = $products_model->get_products($limit, 0);     // array with data from db
        $this->view->generate('template_view.php', 'products_view.php', $this->data);
    }


}
