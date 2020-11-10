<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
<?php 
    require 'validation.php';
    $boolas = 0;
    $errors = [];
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $theval = new Validate($_POST);
      $errors = $theval->ValidateFields();
      echo "<br>";
      //print_r($errors);
      
      if(empty($errors))
      {
        $boolas = 1;
      }
    }
?>
<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

  <label>Skrydžio numeris</label>
  <select name="skrydziai">
  <?php getValue("skrydzio numeris")?>
  </select>
  <div class="error"><?php if(isset($errors['skrydziai'])){echo $errors['skrydziai'];}?></div>

  <label>Asmens Kodas</label>
  <input type="text" name="Asmens Kodas">
  <div class="error"><?php if(isset($errors['Asmens Kodas'])){echo $errors['Asmens Kodas'];}?></div>

  <label>Vardas, Pavardė</label>
  <input type="text" name="Vardas">
  <div class="error"><?php if(isset($errors['Vardas'])){echo $errors['Vardas'];}?></div>

  <label>Iš kur skrenda</label>
  <select name="Is Kur skrenda">
  <?php getValue("is kur skrenda")?>
  </select>
  <div class="error"><?php if(isset($errors['Is_Kur_skrenda'])){echo $errors['Is_Kur_skrenda'];}?></div>

  <label>Į kur skrenda</label>
  <select name="I kur skrenda">
  <?php getValue("i kur skrenda")?>
  </select>
  <div class="error"><?php if(isset($errors['I_kur_skrenda'])){echo $errors['I_kur_skrenda'];}?></div>

  <label>Bagažas</label>
  <input type="text" name="Bagazas">
  <div class="error"><?php if(isset($errors['Bagazas'])){echo $errors['Bagazas'];}?></div>

  <label>Kaina</label>
  <input type="text" name="Kaina">
  <div class="error"><?php if(isset($errors['Kaina'])){echo $errors['Kaina'];}?></div>

  <label>Pastabos</label>
  <input type="text" name="Pastabos">
  <div class="error"><?php if(isset($errors['Pastabos'])){echo $errors['Pastabos'];}?></div>

  <input type="submit">
</form>

<?php
if($boolas == 1)
{
  require 'output.php';
}
?>
</body>

</html>