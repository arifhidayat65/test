<?php include("test.php"); ?>

<!DOCTYPE html>
<html>

    <head>
    	<title>Twitter Bootstrap</title>
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    </head>
    <body class="bg-light">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    		<div class="container">
    			<a class="navbar-brand" href="#"></a>

    			<div class="collapse navbar-collapse">
    				<ul class="navbar-nav mr-auto">
    					<li class="nav-item active">
    						<a class="nav-link" href="#"><h5>List Produk Kategori</h5>
                  <span class="sr-only">(current)</span></a>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</nav>
</head>
<!-- Latest compiled and minified CSS -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>

<body align="center"><br>
    <div class="container">
    <header align="center">

    </header>

    <br>

    <table  align="center" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah Produk</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT product_categories.id, product_categories.name, COUNT(products.category_id) AS Jumlah_product FROM products INNER JOIN product_categories ON products.category_id = product_categories.id GROUP BY product_categories.id";
        $query = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['Jumlah_product']."</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
    </body>
</html>
