<?php

class Model_Category extends Model
{
   function get_category($limit=30, $offset=0)
   {
       $query = $this->db->prepare("SELECT id_specie,nume, descriere, img from categorie ");

       $query->execute(array(
           ':limit'       => $limit
       ));

       $categories = $query->fetchAll(PDO::FETCH_ASSOC);

       return $categories;
   }
}