<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Goodcard - track your collection of Pokémon cards</title>
</head>
<body class="bg-primary">
    
<br>

<h1 class="row justify-content-center">Manage a  collection of Pokemon</h1>

<h3 class="row justify-content-center">My collection of Pokemon</h3>
<div class="row justify-content-center" >
<ul>
<?php foreach ($cards as $card) : ?>
    <li><?="Name: ". $card['name']. " ,                    Type: ". $card['type']; ?>
          <a href="edit.php?edit=<?php echo $card['id'];?>"  class='btn btn-info'>Edit</a>
          <a href="index.php?delete=<?php echo $card['id'];?>" class='btn btn-danger'>Delete</a></li>
<?php endforeach; ?>
</ul>
</div>

<br>
<h3 class="row justify-content-center">Add a Pokemon</h3>
<div class="row justify-content-center" >
<form  method="post">
<label>Name</label>
<input type="text" name="name" class="form-control" placeholder="pokemon name"></input>
<br>
<label>Type  </label>
<input type="text" name="type" class="form-control" placeholder="pokemon type"></input>
<br>
<button class="btn btn-default" name="submit">SUBMIT</button>
</form>
</div>



<?php// print_r(PDO::getAvailableDrivers());

?>

</body>
</html>