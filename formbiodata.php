<!DOCTYPE HTML>  
<html>
<head>
    <title>Form Registrasi - Cahyati</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/query.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron text-center">
    <h1>Form Registrasi</h1>
</div>
 
<?php
// define variables and set to empty values
$name = $alamat = $tempat_lahir = $tanggal_lahir = $usia = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $alamat = test_input($_POST["alamat"]);
  $tempat_lahir = test_input($_POST["tempat_lahir"]);
  $tanggal_lahir = test_input($_POST["tanggal_lahir"]);
  $usia = test_input($_POST["usia"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Form</h1>
<h4>Isikan Data Diri Anda</h4>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<h5>
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Nama :</label>
  <div class="col-sm-10">
    <input type="text" name="name" placeholder="Isikan Nama Anda" />
  </div>
</div>
</h5>
<br>
<h5>
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Alamat :</label>
  <div class="col-sm-10">
    <textarea name="alamat" rows="5" cols="40" placeholder="Isikan Alamat Lengkap"></textarea>
  </div>
</div>
</h5>
<br><br><br><br>
<h5>
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Tempat Lahir :</label>
  <div class="col-sm-10">
    <input type="text" name="tempat_lahir" placeholder="Isikan Tempat Lahir" />
  </div>  
</div>
</h5>
<br>
<h5>
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Tanggal Lahir :</label>
  <div class="col-sm-10">
    <input type="date" name="tanggal_lahir" placeholder="date" />
  </div>
</div>
</h5>
<br>
<h5>
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Usia :</label>
  <div class="col-sm-10">
    <input type="text" name="usia" placeholder="Isikan Usia Anda" />
  </div>
</div>
</h5>
<br>
<h5>
  <label for="nama" class="col-sm-2 control-label">Gender :</label>
  <div class="col-sm-10">
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
</h5>
<br>
  <input type="submit" name="submit" value="Submit">  
  <br><br><br><br>
</form>

<div class="jumbotron text-center">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $alamat;
echo "<br>";
echo $tempat_lahir;
echo "<br>";
echo $tanggal_lahir;
echo "<br>";
echo $usia;
echo "<br>";
echo $gender;
?>
</div>
</body>
</html>