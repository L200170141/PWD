<html>
<head>
<title>Tugas ke-3</title>
</head>
<body>
<H1>Program Hitungan</H1>
<form method='Post' action='Tugas 3.php'>
<p>Nilai A adalah    : <input type='text' name='A' size ='20'></p>
<p>Nilai B adalah    : <input type='text' name='B' size ='20'></P>

<p><input type='submit' value='jumlahkan' name='submit'></P>
</form>
<?php error_reporting (E_ALL ^ E_NOTICE);
$A =$_POST['A'];
$B =$_POST['B'];
$submit = $_POST['submit'];
if($submit){
    $hasil = $A+$B;
    echo"Nilai A adalah  : $A</br>";
    echo"Nilai B adalah  : $B</br>";
    echo"Jadi Nilai A ditambah Nilai B adalah  : $hasil";
    }
?>
</body>
</html>