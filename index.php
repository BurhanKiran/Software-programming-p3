<!DOCTYPE html>
<html>

<head>
  <title>HIM Essentials</title>
  <meta charset="utf-8">

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logo.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400&display=swap" rel="stylesheet">
  <link rel="javascript" href="code.js">
  <script src="code.js"></script>
</head>

<body>

    </nav>
    <a class="cta"><button onclick="contact()">Contact</button></a>
  </header>
  ik moet even wat toevoegen dus doe ik dit
  <div class="picture-under-nav">
    <div class="content-nav">
      <div id="text-nav">
      <h1> HIM
      <span style="display: initial;">Essentials</span>
      <span> Shirts</span>
      <span> Pants</span>
      <span> Watches</span>
      </h1>
    </div>
    </div>
  </div>
  <?php
   ?>
  <div class="space">
  </div>
  <div class="footer">
    <div class="inner-footer">
      <div class="logo-container">
        <h1>HIM Essentials</h1>
      </div>
      <div class="footer-second">
        <h2>Contact</h2>
        <p>Email: him@essentials.com</p>
        <p>Website: himessentials.com</p>
        <p>Adress: 7392 PJ Amsterdam</p>
        <p>Tel: 0620666350</p>
      </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    var text = document.getElementById('text-nav');
    var word = text.getElementsByTagName('span');

    var i = 0;

    function rotator(){
      word[i].style.display = 'none';
      i = (i + 1) % word.length;
      word[i].style.display = 'initial';
    }
    setInterval(rotator, 2400);
  </script>
  <?php
  $temperatuur = 29;

  if(($temperatuur >= -10) && ($temperatuur <= 15))
  {
  echo "Koud he!";
  }

  else if(($temperatuur >= 16) && ($temperatuur <= 20))
  {
    echo "Moah, moah, kon beter";
  }

  else if(($temperatuur >= 21) && ($temperatuur <= 27))
  {
  echo "Lekker weetje zeg";
  }

  else if($temperatuur >= 28)
  {
    echo "Ik zweet me helemaal kapot";
    $geur = rand(1, 3);

    if($geur == 1) {
      echo "Maar gelukkig stink ik niet";
    }
    else if($geur == 2) {
      echo "Maar moet niet dichtbij iemand anders staan";
    }
    else if($geur == 3) {
      echo "En ik ruik mezelf";
    }
  }




  $steden = ["Amsterdam", "Rotterdam", "Utrecht", "Den Haag"];
  array_unshift($steden, 'Deventer', 'Apeldoorn');
  array_pop($steden);
  array_push($steden, 'Almere');

  echo "<pre>";
  print_r($steden);
  echo "</pre>";

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
  ?>



  </div>
</body>
</html>
