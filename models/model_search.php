<?php

class Model_Search extends Model
{
    function search_products($limit=30, $offset=0) //$product_name,
    {
        $query = $this->db->prepare("SELECT nume from animale"); //where nume = '" . $product_name . "';");

        $query->execute(array(
            ':limit'       => $limit
        ));

        $categories = $query->fetchAll(PDO::FETCH_ASSOC);

        return $categories;
    }
}