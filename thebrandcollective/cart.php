<?php
include('./database/database.php');
session_start();

if (!isset($_SESSION['user_info_id'])) {
    echo "<p>You're not yet Logged in, <a href='../signin/signin.php'> Go to Login</a></p>";
    exit();
}

$user_id = $_SESSION['user_info_id'];
?>

<?php
  if(isset($_GET['logout'])){
    session_destroy();
    header("location: signin/signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Shopping Cart</title>
</head>
<body>

<header>
    <?php include("header.php"); ?>
</header>

<div class="wrapper">
    <div class="grid1">
        <div class="cartcontainer">
            <section class="shopping-cart">
                <?php
                $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);

                $total_price = 0;

                if ($result->num_rows > 0) {
                    echo "<table>
                        <thead>
                            <tr>
                                <th>Product ID</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Shoe Type</th>
                                <th>Brand</th>
                                <th>Size</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>";

                    while ($row = mysqli_fetch_assoc($result)) {
                        $item_total = floatval($row["price"]) * intval($row["quantity"]);
                        echo "<tr>
                                <td>{$row['product_id']}</td>
                                <td>{$row['product']}</td>
                                <td>₱" . number_format($row['price'], 2) . "</td>
                                <td>{$row['color']}</td>
                                <td>{$row['shoe_type']}</td>
                                <td>{$row['brand']}</td>
                                <td>{$row['size']}</td>
                                <td>{$row['quantity']}</td>
                                <td><button onclick='removeItem({$row['cart_id']})'>Remove</button></td>
                              </tr>";

                        $total_price += $item_total;
                    }

                    echo "</tbody></table>";
                    echo '<p id="total_price_display" style="margin-top: 10px; margin-bottom: 10px; font-weight: bold;">Total: ₱' . number_format($total_price, 2) . '</p>';
                    echo '<button onclick="randString()" class="button">Check Out</button>';
                } else {
                    echo "No items in the cart.";
                }
                ?>
            </section>
        </div>
    </div>

    <div class="grid2">
        <div class="flex">
            <div class="order-summary">
                <h2 style="font-weight: bold;">Order Summary</h2>
                <p style="font-weight: bold;">Reference Number: <span id="result"></span></p>

                <?php
                echo "<p>Address: " . $_SESSION['user_info_address'] . "</p>";
                echo "<p>Receiver: " . $_SESSION['user_info_username'] . "</p>";
                ?>

                <?php
                $sql = "SELECT * FROM cart WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);

                $total_price = 0;

                echo '<form action="insert_checkout_process.php" method="post">';
                echo "<table>";

                while ($row = mysqli_fetch_array($result)) {
                    $item_total = floatval($row["price"]) * intval($row["quantity"]);
                    echo "<tr>
                            <td>{$row['product']}</td>
                            <td>PHP " . number_format($item_total, 2) . "</td>
                          </tr>";
                    echo '<input type="hidden" name="products[]" value="' . $row['product'] . '">';
                    echo '<input type="hidden" name="prices[]" value="' . $item_total . '">';
                    echo '<input type="hidden" name="product_id[]" value="' . $row['product_id'] . '">';
                    echo '<input type="hidden" name="quantities[]" value="' . $row['quantity'] . '">'; 
                
                    $total_price += $item_total;
                }
                
                echo "</table>";
                echo '<p id="shipping_fee_display" style="font-weight: bold; display: none;">Shipping Fee: ₱50.00</p>';
                echo '<p id="summary_total_price" style="font-weight: bold;">Total: ₱' . number_format($total_price, 2) . '</p>';
                echo '<input type="hidden" id="total_price" name="total_price" value="' . $total_price . '">';
                ?>
                <input type="hidden" id="randomString" name="randomString">
                <input type="hidden" id="shipping_fee" name="shipping_fee" value="0">
                <label for="payment_method">Select Payment Method:</label>

                <select id="payment_method" name="payment_method" onchange="handlePaymentMethodChange()">
                    <option value="">select</option>
                    <option value="GCash">GCash</option>
                    <option value="Cod">Cash on Delivery</option>
                </select>
                <br>

                <div id="qrCodeContainer" style="display:none;">
                    <h3 style="margin-top: 18px;">Scan this QR Code to Pay via GCash:</h3>
                    <img style="width: 200px; height: 200px;" id="qrCode" src="./img/QRpayment.jpeg" alt="QR Code">
                </div>

                <button type="submit" name="submit">Place Order</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer>
    <?php include("footer.php"); ?>
</footer>
<script src="index.js"></script>
<script src="remove_item.js"></script>
<script>
function handlePaymentMethodChange() {
    updateShippingFee();
    generateQRCode();
}

function updateShippingFee() {
    const paymentMethod = document.getElementById('payment_method').value;
    const shippingFeeDisplay = document.getElementById('shipping_fee_display');
    const shippingFee = 50;
    shippingFeeDisplay.style.display = 'block';

    const totalPriceElement = document.getElementById('total_price');
    const totalDisplayElement = document.getElementById('total_price_display');
    const summaryTotalElement = document.getElementById('summary_total_price');
    const totalPrice = parseFloat(totalPriceElement.value);
    const newTotal = totalPrice + shippingFee;

    totalDisplayElement.innerHTML = 'Total: ₱' + newTotal.toFixed(2);
    summaryTotalElement.innerHTML = 'Total: ₱' + newTotal.toFixed(2);

    document.getElementById('shipping_fee').value = shippingFee;
}

function generateQRCode() {
    const paymentMethod = document.getElementById('payment_method').value;
    const qrCodeContainer = document.getElementById('qrCodeContainer');
    
    if (paymentMethod === 'GCash') {
        qrCodeContainer.style.display = 'block';
    } else {
        qrCodeContainer.style.display = 'none';
    }
}
</script>

</body>
</html>
