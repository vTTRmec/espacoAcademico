<!DOCTYPE html>
<html>
<title>Espaço Academico</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='css/font.css'>
<script type="text/javascript" src="js/javaScript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,header,body,h1,h2,h3,h4,h5,h6,{font-family: "Roboto", sans-serif}

img {
    width: 12%;
    height: auto;
} 

</style>
<form>
<body class="w3-light-grey">

  <?php

    // variáveis de frequência
    $freqGeral = 88; 

    // variáveis de notificações
    $numeroNotificacaoPort = 2;
    $numeroNotificacaoMat = 2;
    $numeroNotificacaoHist = 1;
    $numeroNotificacaoGeo = 0;

  ?>


<div class="w3-content w3-margin-top" style="max-width:1400px;">


  <div class="w3-row-padding">
  

    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="img/avatar2.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-ligt-black" style="font-family: Arial, sans-serif;">
            <h2>Aluno 01</h2>
          </div>
        </div>
        <div class="w3-container">
          
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Brasília, DF</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>aluno.01@espacocademico.com</p>
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
            <div class="w3-container w3-center w3-round-xlarge w3-red" style="width:26%">26%</div>
          </div>
          <p>História</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:95%">95%</div>
          </div>
          <p>Geografia</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:82%">82%</div>
          </div>
          <br>
          <div>
          <button onclick="location.href='index.php'" type="button" class="w3-btn w3-red w3-border w3-border-red w3-round-large" style="margin-left: 35%;">Sair</button>
          </div>
           <br>
        </div>
      </div><br>

    </div>

    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-envelope fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Mural de mensagens</h2> 
        <div class="w3-container">

          <!-- INCIO MSG HISTÓRIA -->

          <h5 class="w3-opacity">
              <b>Passeio - Museu</b>
            </h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>27 Maio 2018 - <span class="w3-tag w3-teal w3-round">Aberto</span></h6>
          <p>Partida: 08hrs - Chegada: 17hrs.</p>
          <p>Valor: R$ 25,00</p>

          <!-- FIM MSG HISTÓRIA -->

          <hr>
          <!-- INICIO MSG MATEMÁTICA -->
          <h5 class="w3-opacity">
              <b>Prova - Matemática</b>
            </h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>06 Junho 2018 - <span class="w3-tag w3-teal w3-round">Aberto</span></h6>
          <p>Conteúdo: Potência, raízes, frações.</p>
          <hr>

          <h2 class="w3-text-grey w3-padding-10">
            <h5 class="w3-opacity">
              <b>Trabalho - Apresentação</b>
            </h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>12 Maio 2018 - <span class="w3-tag w3-red w3-round">Encerrado</span></h6>
          <p>Tema: Como surgiu a matemática?</p>

          <hr>

          <!-- INICIO MSG PORTUGUES -->
          <h5 class="w3-opacity">
          <b>Prova - Gramática</b>
            </h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>05 Junho 2018 - <span class="w3-tag w3-teal w3-round">Aberto</span></h6>
          <p>Conteúdo: Tempos verbais, conjugações, preposição.</p>
          <hr>

          <h2 class="w3-text-grey w3-padding-10">
            <h5 class="w3-opacity">
              <b>Reuniões de Pais</b>
            </h5>
          <h6 class="w3-text-teal">
            <i class="fa fa-calendar fa-fw w3-margin-right"></i>11 Maio 2018 - <span class="w3-tag w3-red w3-round">Encerrado</span></h6>
          <p>Horário: 14hrs - Sala 1001.</p>

          <!-- FIM PROTUGUES -->

          <hr>
        </div>

        <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16">
          <i class="fa fa-graduation-cap fa-fw w3-margin-right w3-xxlarge w3-text-teal">
          </i>Disciplinas
        </h2>
            
        <div class="w3-container">

          <img src="img/port.png" class="w3-circle w3-grayscale-max" style="width: 12%;" alt="Norway" onclick="portugues()">         
          
          <img src="img/math.png" class="w3-circle w3-grayscale-max" style="width: 12%; margin-left: 8%;" onclick="matematica()" alt="Norway"> 
          
          <img src="img/hist.png" class="w3-circle w3-grayscale-max" style="width: 12%; margin-left: 8%;" onclick="historia()" alt="Norway"> 
          
          <img src="img/geo.png" class="w3-circle w3-grayscale-max" style="width: 12%; margin-left: 8%;" onclick="geografia()" alt="Norway"> 
           
        </div>

        <h5 class="w3-opacity">
            <!-- PORTUGÊS -->

             <?php if($numeroNotificacaoMat == 0){?>
                     
                       <b style="margin-left: 2.2%;">Português</b>
                 
                 <?php } else {?>
                    <b style="margin-left: 2.2%;">Português <span class="w3-round-xxlarge w3-red"><?= $numeroNotificacaoPort?></span></b>  
          
                <?php }?>

                <!-- MATEMÁTICA  -->

                <?php if($numeroNotificacaoMat == 0){?>
                     
                      <b style="margin-left: 7%;">Matemática</b>
                 
                 <?php } else {?>
                    <b style="margin-left: 7%;">Matemática <span class="w3-round-xxlarge w3-red"><?= $numeroNotificacaoMat?></span></b>  
          
                <?php }?>

                <!-- HISTÓRIA -->

                <?php if($numeroNotificacaoHist == 0){?>
                     
                      <b style="margin-left: 8%;">História</b>
                 
                 <?php } else {?>
                    <b style="margin-left: 8%;">História <span class="w3-round-xxlarge w3-red"><?= $numeroNotificacaoHist?></span></b>   
          
                <?php }?>
            
              <!-- GEOGRAFIA -->
                
                <?php if($numeroNotificacaoGeo == 0){?>
                   
                    <b style="margin-left: 9%;">Geografia</b>
               
               <?php } else {?>
                  <b style="margin-left: 9%;">Geografia <span class="w3-round-xxlarge w3-red"><?= $numeroNotificacaoGeo?></span></b> 

                <?php }?>

          </h5>        
        <hr>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</form>
</html>

