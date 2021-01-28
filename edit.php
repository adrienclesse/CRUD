<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body class="bg-primary">
    

<?php
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();

if (isset($_POST['change'])) {
    
if (isset($_GET['edit'])) {
    
    $id = $_GET['edit'];
    //echo $id;
    $name = $_POST['changeName'];
    $type = $_POST['changeType'];
    $sql = "UPDATE pokemon    SET name='$name', type='$type'    WHERE id=$id";
    $databaseManager->database->query($sql);
    
}
header("Location: index.php");
}

?>

<div class="row justify-content-center" >
<form  method="post">
<label>Name</label>
<input type="text" name="changeName" class="form-control" placeholder="new pokemon name"></input>
<br>
<label>Type  </label>
<input type="text" name="changeType" class="form-control" placeholder="new pokemon type"></input>
<br>
<button class="btn btn-default" name="change">CHANGE</button>
</form>
</div>

</body>

