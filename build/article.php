<html>

<?php  

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "technews";

$articleID = $_GET['article'];;

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
  }

  $query = "SELECT * FROM report WHERE id = $articleID";
  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result)==0) { 

	header("Location: index.php");
	die();
   }

?>

<?php  include "models/header.php" ?>


		<!-- news grid -->
	
		<section class="py-20 min-h-full">
            <div class="container">
				<?php
				include "../build/models/articleDets.php";
				?>
			</div>
		</section>

		<?php include "../build/models/footer.php" ?>

	</body>

	</html>