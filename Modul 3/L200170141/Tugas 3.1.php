<html>
<head>
<title>Tugas ke-3.1</title>
</head>
<body>
<H1>Ganjil Genap</H1>
<form method='Post' action='Tugas 3.1.php'>
<p>Masukkan Nilai    : <input type='text' name='A' size ='20'></p>
<p><input type='submit' value='submit' name='submit'></P>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$a =$_POST['A'];
$submit = $_POST['submit'];
if($submit){
    if($a%2 == 0){
        echo"$a = Bilangan Genap </br>";
    }else{
        echo"$a = Bilangan Ganjil </br>";
    }    
}
?>
</body>
</html>