<?php

class View
{
    function generate( $template_view, $content_view, $data = null)
    {
        if ($data) {
            extract($data);
        }
        include 'views/templates/' . $template_view;
    }
}
