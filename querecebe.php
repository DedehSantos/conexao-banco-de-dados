<?php  include_once"config.php"; ?>

<html>
<body>
<?php 

$nome = $_POST["nome"];
$email = $_POST["email"];
$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname)
;
mysqli_select_db($conn, '$dbnome');
$sql = "INSERT INTO tbformulario (nome, email) VALUES ('$nome', '$email') "; 

if(mysqli_query($conn, $sql)){
    echo "<script>alert('Salvei seus dados !'); windows.location
    = 'index.php';  </script>";

} else {
    echo "Deu Errro: "  . $mql . "<br>" . mysqli_errno($conn);
}

mysqli_close($conn);


?>


</body>
</html>