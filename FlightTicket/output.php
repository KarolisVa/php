<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <?php
    ?>
    <div class="container">
        <div class="text-center row bg-success text-white h1 my-0">
            <div class="col py-4">
                AfraTravel
            </div>
        </div>
        <div class="row">
            <div class="col bg-secondary text-white text-center border-bottom border-right">
                Vardas ir Pavarde: <?php echo $_POST['Vardas']?>
            </div>
            <div class="col bg-secondary text-white text-center">
                Is kur: <?php echo $_POST['Is_Kur_skrenda']?>
            </div>
        </div>

        <div class="row border-bottom bg-secondary text-white text-center">
            <div class="col border-right">
            Asmens Kodas: <?php echo $_POST['Asmens_Kodas']?>
            </div>
            <div class="col">
                I kur: <?php echo $_POST['I_kur_skrenda']?>
            </div>
        </div>
        <div class="row">
            <div class="col bg-secondary text-white text-center border-right">
            Kaina: <?php echo $_POST['Kaina']." Euru"?>
            </div>
            <div class="col text-center bg-secondary text-white ">
                Bagazas: <?php echo $_POST['Bagazas']." Kg"?>
            </div>
        </div>
        <div class="row border-top">
            <div class="col bg-secondary text-white text-left py-2">
                Komentarai: <?php echo $_POST['Pastabos']?>
            </div>
        </div>
        <div class="row text-center row bg-success text-white py-1">
            <div class="col">
            <?php echo $_POST['skrydziai']?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>