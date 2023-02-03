<?php
	ini_set('display_errors', '1');
	ini_set('display_startup_errors', '1');
	error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Updation Page</title>
	<style type="text/css">
		.container {
			width: 200px;
		}	
		#dots {
			/*display: none;*/
		}
		#more {
			display: none;
		}
	</style>
</head>
<body>

		<div class="container">
			<p id="content">
		<?php
			include('connection.php');

			$stmt = $myConn->prepare("SELECT msg FROM get_data WHERE id = 5");
			$stmt->execute();
			$details = $stmt->fetchAll();
			foreach($details as $user)
			{
				$wholeMsg = $user["msg"];	
				$length = strlen($wholeMsg);
						// print_r($length);die();
				if ($length > 20 ) { ?>
					<p id="content">

						<?php
						$short = substr($wholeMsg, 0, 20) ;
						echo $short; ?>
						<span id="dots">...
						</span>

						<span id="more">
							<?php  $long = substr($wholeMsg, 20, $length);
								echo $long;
							?>
						</span>
						<button onclick="myFunction()" id="myBtn">Read more</button>
					</p>
					<?php
				}else{
					echo $wholeMsg;
				}	
			}
			?>

				
		</div>
		<script>
			function myFunction() {

				let text =  document.getElementById("content"); 
				// let result = text.substr(0, 20);



				var dots = document.getElementById("dots");
				var moreText = document.getElementById("more");
				var btnText = document.getElementById("myBtn");

				// moreText.style = " transition: background-color 0.5s ease-in 0.3s";
				let button = document.querySelector("button");

				button.addEventListener("mouseover", function() {
				  button.style.backgroundColor = "lightblue";
				  setTimeout(function() {
				    button.style.backgroundColor = "";
				  }, 1000);
				});


				if (dots.style.display === "none") {
					dots.style.display = "inline";
					btnText.innerHTML = "Read more"; 
					moreText.style.display = "none";
				} else {
					dots.style.display = "none";
					btnText.innerHTML = "Read less"; 
					moreText.style.display = "inline";
				}
			}
		</script>


</body>
</html>