<?php

class Model_Products extends Model
{
    function get_products($limit=30, $offset=0)
    {
        //$query = $this->db->prepare("SELECT id_specie,nume, descriere,pret, img  from animale ");

        $query = $this->db->prepare(
            'SELECT specie.numeSpecie, animale.nume, animale.descriere, animale.pret, animale.img
                      from animale
                      inner JOIN specie on specie.id_specie = animale.id_specie');




        $query->execute(array(
            ':limit'       => $limit
        ));

        $animals = $query->fetchAll(PDO::FETCH_ASSOC);

        return $animals;
    }
}