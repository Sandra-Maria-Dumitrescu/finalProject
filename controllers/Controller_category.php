<?php
class Controller_Category extends Controller
{
    function action_index($limit=null)
    {
        print_r($limit);
        //load our model
        $category_model = $this->model->load('category');               // model_category

        $this->data['category'] = $category_model->get_category($limit, 0);     // array with data from db
        $this->view->generate('template_view.php', 'category_view.php', $this->data);
    }


}
