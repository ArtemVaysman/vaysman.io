<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vaysman</title>
	<meta charset-"UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatable" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="shortcut icon" href=""> <!-- ICON -->
	<link href="bt.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	
<!-- <?php require "bt-preloader.php" ?> -->
	
<div style="width: 100%;">

<!-- Header --><?php require "bt-header.php" ?>

<main role="main">

<div class="price text-center">Price</div>

<div class="container text-center price-list-container">
	<table class="text-center">
		<tr>
			<th>What do you need</th>
			<th>Price</th>
		</tr>
		<tr>
			<td class="white-td">Only layout on Photoshop</td>
			<td>1.5$ / 100&#8381;</td>
		</tr>
		<tr>
			<td class="white-td">Non-adaptive layout of the site</td>
			<td>31$ - 62$ / 2 000&#8381; - 4 000&#8381;</td>
		</tr>
		<tr>
			<td class="white-td">Adaptive layout of the site</td>
			<td>78$ - 156$ / 5 000&#8381; - 10 000&#8381;</td>
		</tr>
		<tr>
			<td class="white-td">Redesign of the finished site</td>
			<td>24$ / 1 500&#8381;</td>
		</tr>
		<tr>
			<td class="white-td">Adding a block to the site (banner, modules)</td>
			<td>3$ - 6$ / 200&#8381; - 400&#8381;</td>
		</tr>
		<tr>
			<td class="white-td">Adding adaptability to the finished site</td>
			<td>46$ / 3 000&#8381;</td>
		</tr>
	</table>
</div>

<form action="send.php" method="post">
<input type="text" name="fio" placeholder="Text" required>
<input type="text" name="email" placeholder="Another text" required>
<input type="submit" value="Send">
</form>





</main>

<!-- Footer --><?php require "bt-footer.php" ?>

</div>
	
	
	<button id="topBtn"><i class="fas fa-arrow-up"></i></button>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bt.js"></script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>