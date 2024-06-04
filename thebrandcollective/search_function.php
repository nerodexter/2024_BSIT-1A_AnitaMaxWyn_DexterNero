<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
    
    :root{
--color-lightcoral: #E19191 !important;
--color-slategray: #738290 !important;
--color-babypowder: #FFFCF7 !important; 
--text-babypowder: #FFFCF7 !important; 
--color-dark: #222222 !important;
--color-rufous: #B02E0C;
}

  *{
    margin: 0;
            padding: 0;

            box-sizing: border-box;
}

        body {
            font-family: "Montserrat", sans-serif;
            background-color: #f4f4f4;
            
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            max-width: 1200px;
            margin: 20px;
            padding: 20px;
        }
        .search-results {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;

            background-color: var(--color-dark);
        }
        .card img {
            width: 250px;
            height: 250px;
            border-radius: 4px;
        }
        .card h3 {
            font-size: 1.2em;
            margin: 10px 0;
            color: var(--text-babypowder);
        }
        .card p {
            font-size: 0.9em;
            color: var(--text-babypowder);
        }
        .card .price {
            font-size: 1.1em;
            color: var(--text-babypowder);
            margin: 10px 0;
        }
        .card form {
            width: 100%;
        }
        .card label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: var(--text-babypowder);
        }
        .card select, .card input[type="number"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }
        .card button {
            background-color: #E19191;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
        .card button:disabled {
            background-color: #ccc;
            cursor: not-allowed;
        }
        .quantityinput {
            margin: 0px;
        }
    </style>
</head>
<body>

<header>
<?php
include('./header.php');
?>
</header>

<main>
    <div class="container">
        <?php
 
        include ('./database/database.php');

        
        $searchQuery = isset($_GET['searchbar']) ? $_GET['searchbar'] : '';

   
        if (!empty($searchQuery)) {
          
            $stmt = $conn->prepare("
                SELECT product_id, product_name, product_price, color, size, shoe_type, shoe_brand, stocks, product_status, image_path 
                FROM products 
                WHERE product_name LIKE ? 
                OR color LIKE ? 
                OR size LIKE ? 
                OR shoe_type LIKE ? 
                OR shoe_brand LIKE ?");

            $likeQuery = "%".$searchQuery."%";
            $stmt->bind_param("sssss", $likeQuery, $likeQuery, $likeQuery, $likeQuery, $likeQuery);

            
            $stmt->execute();

            $result = $stmt->get_result();

            
            if ($result->num_rows > 0) {
                echo "<h2>Search Results:</h2>";
                echo "<div class='search-results'>";
                while ($row = $result->fetch_assoc()) {
                    $sizes = explode(",", $row['size']);
                    $colors = explode(",", $row['color']);
                
                    echo "<div class='card'>";
                    // if (!empty($row['image_path'])) {
                    //     echo '<img src="img/'.$row['image_path'].'" alt="display image">';
                    // }
                    if (!empty($row['image_path'])) {
                    echo "<img src='".$row['image_path']."' alt='".$row['product_name']."'>";
                }
                    echo "<h3>".$row['product_name']."</h3>";
                    echo "<p class='price'>Price: P".$row['product_price']."</p>";
                    echo "<p>Type: ".$row['shoe_type']."</p>";
                    echo "<p>Brand: ".$row['shoe_brand']."</p>";
                    echo '<form action="add_to_cart_process.php" method="post">
                        <strong><label for="size_select">Size: </label></strong>
                        <select name="size" id="size_select">';
                    foreach ($sizes as $size) {
                        echo '<option value="'.$size.'">'.$size.'</option>';
                    }
                    echo '</select><br>
                        <strong><label for="color_select">Color: </label></strong>
                        <select name="color" id="color_select">';
                    foreach ($colors as $color) {
                        echo '<option value="'.$color.'">'.$color.'</option>';
                    }
                    echo '</select><br>
                        <input type="hidden" name="product_id" value="'.$row['product_id'].'">
                        <input type="hidden" name="product" value="'.$row['product_name'].'">
                        <input type="hidden" name="price" value="'.$row['product_price'].'">
                        <input type="hidden" name="brand" value="'.$row['shoe_brand'].'">
                        <input type="hidden" name="shoe_type" value="'.$row['shoe_type'].'">
                        <input type="hidden" name="category" value="'.$row['shoe_type'].'">
                        <label for="quantity">Quantity</label>

                        <input type="number" id="quantity" name="quantity" min="1" max="'.$row['stocks'].'" value="1" class="quantityinput">
                        <p>Stocks: '.$row['stocks'].'</p>';
                    if ($row['stocks'] > 0) {
                        echo '<button type="submit" name="submit">Add to Cart</button>';
                    } else {
                        echo '<button type="submit" name="submit" disabled>Out of Stock</button>';
                    }
                    echo '</form>';
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "<p>No results found for '$searchQuery'</p>";
            }

            
            $stmt->close();
        } else {
            echo "<p>Please enter a search Item.</p>";
        }

        $conn->close();
        ?>
    </div>
</main>

<footer>
  <?php
  include('./footer.php')
  ?>
</footer>

</body>
</html>
