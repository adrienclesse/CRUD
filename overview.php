<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body>

<h1>Goodcard - track your collection of Pokémon cards</h1>

<h3>My collection of Pokemon</h3>

<ul>
<?php foreach ($cards as $card) : ?>
    <li><?="Name: ". $card['name']. " ,                    Type: ". $card['type']; ?></li>
<?php endforeach; ?>
</ul>
<br>
<h3>Add a Pokemon</h3>
<div class="row justify-content-center" >
<form  method="post">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="pokemon name"></input>
<br>
<label>Type  </label>
<input type="text" name="type" class="form-control" placeholder="pokemon type"></input>
<br>
<button name="submit">SUBMIT</button>
</form>
</div>

<?php// print_r(PDO::getAvailableDrivers());

?>

</body>
</html>