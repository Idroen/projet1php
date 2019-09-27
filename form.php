<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Your Message</title>



</head>

<body>


<div class="container">
	<div class="column is-12">
		<section class="hero is-info is-bold is-small">
			<div class="hero-body">
				<div class="container">
					<h1 class="title">Hello Mr <?php echo $_POST['user_name']. ' ';?>, your email adress <?php echo $_POST['user_mail'] . ' '; ?> as been save, and your message send : </h1>

					<h2 class="subtitle">Message:<br><?php echo $_POST['user_message'];  ?></h2>
				</div>
			</div>
		</section>
	</div>
</div>
<?php
include 'footerProjet1.php';

?>
</body>
</html>
