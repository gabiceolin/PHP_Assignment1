<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment 1 | Read</title>
	<meta name="description" content="Assignment 1 Gabriela Ceolin">
	<meta name="robots" content="noindex, nofollow">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&family=Roboto&family=Roboto+Condensed&display=swap"
		rel="stylesheet">
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00b7eb;">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php"><img src="./img/logo.png" alt="header logo"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
					data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
					aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page"
								href="http://localhost/classes/assignment1/index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" aria-current="page"
								href="http://localhost/classes/assignment1/view_content.php">View Database</a>
						</li>
					</ul>

				</div>
			</div>
		</nav>
	</header>
	<div class="container">
		<div class="row">
			<table class="table">
				<tr>
					<th>Full Name</th>
					<th>ID</th>
					<th>Grade</th>
					<th>Birthday</th>
				</tr>
				<?php

				while ($r = mysqli_fetch_assoc($res)) {
					?>
					<tr>
						<td>
							<?php echo $r['Name']; ?>
						</td>
						<td>
							<?php echo $r['ID']; ?>
						</td>
						<td>
							<?php echo $r['Grade'] ?>
						</td>
						<td>
							<?php echo $r['Birthday'] ?>
						</td>
					</tr>
					<?php
				}
				?>
			</table>
		</div>
	</div>
	<footer>
		<p class="copy-right">&copy; Copyright Gabriela Ceolin 2023</p>
	</footer>
</body>

</html>