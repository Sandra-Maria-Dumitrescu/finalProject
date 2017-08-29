<h1>Categorii</h1>

<?php
$elements = count($category);

for ($i = 0; $i < $elements; $i++) {

    echo '<div class="categoryItem">';

        $category_name = ucfirst($category[$i]['nume']);

        if($category_name == 'Rozatoare'){  // provoke 404 page
            echo " <h1><a href=/products/". strtolower($category_name) . ">" . $category_name . " </a></h1> ";
        } else{
            echo " <h1><a href=/products/#". strtolower($category_name) . ">" . $category_name . " </a></h1> ";
        }

        $image = $category[$i]['img'];
        echo '<img class="fl imgStyle" src="data:image/jpeg;base64,' . base64_encode($image) . '"/>';

        echo $category[$i]['descriere'] . "<br>";
        echo '</div>';
}

?>




