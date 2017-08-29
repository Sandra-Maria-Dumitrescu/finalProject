<?php
//connect db
try {
    $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
//we ask if search input has value
if (isset($_POST['search'])) {
    $search_prod = htmlspecialchars($_POST['search']);

    $query = $conn->prepare('SELECT specie.numeSpecie, animale.nume, animale.descriere, animale.pret, animale.img
        from animale inner JOIN specie on specie.id_specie = animale.id_specie where animale.nume = "' . $search_prod . '";');

    $query->execute(array());

    $categories = $query->fetchAll(PDO::FETCH_ASSOC);

    $size = count($categories);

    if( $size > 0){
        $products_name = ucfirst($categories[0]['nume']);    // mops

        echo '<div class="categoryItem">';

            echo " <h1>" . $products_name . "</h1> ";
            $image = $categories[0]['img'];
            echo '<img class="fl imgStyle" src="data:image/jpeg;base64, ' . base64_encode($image) . ' "/> ';
            echo $categories[0]['descriere'] . "<br>";

        echo "</div>"; // end categoryItem div

        goto end;
    }
    else{
        echo '<h1> No products found!</h1>';
        goto end;
    }
}


?>
<!--search box-->
    <div id="searchProduct">
<!--        <form method="POST" action="/search">-->
        <form method="POST">
            <input type="text" name="search" required>
            <input type="submit" name="submit" value="Search" >
        </form>
    </div>



<?php
echo '<h1>Produsee</h1>';
$elements = count($products);

for ($i = 0; $i < $elements; $i++) {

    $nume_specie = $products[$i]['numeSpecie'];         // caini
    $products_name = ucfirst($products[$i]['nume']);    // mops

    echo '<div id="' . $nume_specie . '">';
        echo '<div class="categoryItem">';

            echo " <h1>" . $products_name . "</h1> ";
            $image = $products[$i]['img'];
            echo '<img class="fl imgStyle" src="data:image/jpeg;base64, ' . base64_encode($image) . ' "/> ';
            echo $products[$i]['descriere'] . "<br>";
            //echo '<a href="/category">'. $products[$i]['descriere'] .'</a>';
            //<img class="fl imgStyle" src="data:image/jpeg;base64,<?php echo base64_encode($image); "/>

    echo "</div>"; // end categoryItem div
    echo "</div>"; // end caini div
}
end:
?>