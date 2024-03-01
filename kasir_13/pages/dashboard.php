<?php 
    session_start();
    require_once('../db/DB_connection.php');

    if (!isset($_SESSION['loggedin']) || $_SESSION[ 'loggedin'] !== true) {
        header('Location: ../index.php');
        exit;
    }

    $realName = $_SESSION['nama'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shopiria | Welcome Cashier!</title>
        <link rel="stylesheet" href="../assets/styles/dashboard.css">
        <style>
body {
  margin: 0;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: #04AA6D;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: white;
}
</style>
    </head>
        
    
<body>



<h1>Hello, <?php echo htmlspecialchars($realName); ?>! Welcome to the dashboard!</h1>
        <form action="../db/DB_logout.php" method="post">
            <button type="submit" class="btn-logout">Log Out</button>
        </form>
        
        <div class="dashboard-content">
            <h2>Dashboard</h2>
            <p>Welcome to the Shopiria cashier dashboard. You can manage products and perform other tasks here.</p>
        </div>
        <div class="additional-content">
        <h2>Manage product</h2>
        <p>would you like to manage products?</p>
        <p><a href="./kasir/manage_product.php" class="text-blue-500 hover:underline">Click here</a></p>
    </div>
</body>
</html>


