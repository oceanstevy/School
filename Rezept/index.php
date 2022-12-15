
<!doctype html>
<html lang = "en">

<head>
	<meta charset = "utf-8">
	
	<title>SponsorMan</title>
	
	<meta name = "description" content = "SponsorMan">
	<!--<meta http-equiv=Refresh CONTENT="5; URL=index.php">-->
	<meta name = "author" content = "Nicolas Scheer">
	<link rel = "stylesheet" href = "styles/style.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	      integrity = "sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	      crossorigin = "anonymous">

</head>

<body>
<div class = "background">
	<main class = "container-fluid container-main">
		
		<?php
			include_once "includes/php/navigation.php";
			
			$page = "";
			
			if (isset($_GET['page'])) {
				$page = $_GET['page'];
			}
			
			
			if ($page == "documentation") {
				
				include_once "includes/php/documentation.php";
				
			} else {
				
				include_once "includes/php/api.php";
				
			}
		
		?>
	
	
	</main>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>