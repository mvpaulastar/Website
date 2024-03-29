<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="assets/css/bootstrap.css" rel="stylesheet"/>
		<link href="assets/css/style.css" rel="stylesheet"/>
	</head>

	<body>
		<!--Navigation-->
		<nav class="navbar navbar-light" >
			<div class="container-fluid d-flex justify-content-center">
				<ul class="navbar nav">
					<li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
					<li class="nav-item"><a class="nav-link" href="classes.php">Classes</a></li>
					<li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="hobbies.php">Hobbies</a></li>
				</ul>
			</div>
		</nav>
		
		<!--Page Content-->
		<div class="container-fluid overflow-hidden body-content fade-in">
			<div class="row text-center">
				<div class = "col">
					<h1>Hello and welcome to my website!</h1>
					<h2>My name is Paula Sirisumpund</h2>
					<p class="lead">I am currently a <b>Senior</b> at the <b>University of Texas San Antonio</b></p>
					<p class="lead">Some things about me:</p>
					<ol class="lead single-list">
						<li>I graduate Spring 2023</li>
						<li>I am getting a degree in Computer Science</li>
						<li>My ideal job is a Software Engineer</li>
					</ol>
				</div>
				<div class = "col rotate"> <img src="../images/Me.png" class="img-thumbnail img-fluid rounded-circle"> </div>
			</div>
			<div class="row text-center">
				<div class="row text-center mt-5">
					<div class = "col" ><h3>This iteration of my website introduces CSS, and Bootstrap 5.2.3</h3> </div>
				</div>
			</div>
			<div class="row text-center">
				<table class="table" >
					<tbody>
						<tr>
						 	<th colspan = "7">About Me</th>
						</tr>
						<tr>
							<th>First Name</th>
							<th>Nickname</th>
							<th>Last Name</th>
							<th>Age</th>
							<th>School Year</th>
							<th>Degree</th>
							<th>GPA</th>
						</tr>
						<tr>
							<td><strong>Punsaporn</strong></td>
							<td><strong>Paula</strong></td>
							<td><strong>Sirisumpund</strong></td>
							<td><strong>24</strong></td>
							<td><strong>Senior</strong></td>
							<td><strong>Computer Science</strong></td>
							<td><strong>3.36 Overall / 3.55 CS only</strong></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>
