<!DOCTYPE html>
<html>
<title>FalaTu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='css/font.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,header,body,h1,h2,h3,h4,h5,h6, table, td, {font-family: "Roboto", sans-serif}

img {
    width: 12%;
    height: auto;
} 

</style>

<body class="w3-light-grey">
  <form>
  <?php

    // variáel de frequência
    $freqGeral = 88; 

  ?>


<div class="w3-content w3-margin-top" style="max-width:1400px;">


  <div class="w3-row-padding">
  

    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="img/avatar2.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2 style="font-family: Arial, sans-serif;">Aluno 01</h2>
          </div>
        </div>
        <div class="w3-container">
          
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Brasília, DF</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>aluno.01@controleeducacional.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>(61) 3333-4444</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Frequência</b></p>
          <p>Geral</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?= $freqGeral ?>%"><?= $freqGeral ?>%</div>
          </div>
          <p>Português</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Matemática</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>História</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:87%">87%</div>
          </div>
          <p>Geografia</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:82%">82%</div>
          </div>
          <br>
          <div>
          <button onclick="location.href='#" type="button" class="w3-btn w3-white w3-border w3-border-teal w3-round-large" style="margin-left: 35%;">Sair</button>
          </div>
           <br>
        </div>
      </div><br>

    </div>

    

  </form>
</body>

</html>
