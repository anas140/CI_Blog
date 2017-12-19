<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CI_Blog | <?= $title ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
		<div class="container">
			<div class="navbar-header">
				<a href="/" class="navbar-brand">CI Blog</a>
			</div>
			<div id="collapse navbar-collapse">
				<div class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url() ?>posts">Posts</a></li>
				</div>
			</div>
		</div>
	</nav>
	 
	<div class="container">