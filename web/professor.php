<!DOCTYPE html>
<html>
<title>Espaço Academico</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='css/font.css'>
<script type="text/javascript" src="js/javaScript.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
html,header,body,h1,h2,h3,h4,h5,h6,{font-family: "Roboto", sans-serif}

img {
    width: 12%;
    height: auto;
} 

</style>
<form>
<body class="w3-light-grey">
<div class="w3-content w3-margin-top" style="max-width:1400px;">


  <div class="w3-row-padding">
  

    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="img/profGeo.png" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-ligt-black" style="font-family: Arial, sans-serif;">
            <h2>Professora: Marina</h2>
          </div>
        </div>
        <div class="w3-container">
          
          <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i>Universidade de Brasília - Geografia</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>professora.geo@espacocademico.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>(61) 2222-4444</p>
          <hr>
      
          <div>
          <button onclick="location.href='index.php'" type="button" class="w3-btn w3-red w3-border w3-border-red w3-round-large" style="margin-left: 35%;">Sair</button>
          </div>
           <br>
        </div>


      </div><br>

      <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa fa-address-card-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Chamada</h2> 
        <div class="w3-container">

         <div>
          <h3 ><img src="img/profHist.png" class="w3-circle" style="margin-right: 2%;">Maria Silva
          <i id="iconChamada" class="fa fa-check fa-fw w3-xxlarge w3-text-grey" style="margin-left: 55.5%;" onclick="chamada('presente');"> 
          </i>
          <i id="iconChamadaFalta" class="fa fa-times fa-fw w3-xxlarge w3-text-grey" style="margin-top: -5%; margin-left: 2%;" onclick="chamada('ausente');"> 
          </i>

          </h3>
          
       
          <h3 ><img src="img/profPort.png" class="w3-circle" style="margin-right: 2%;">Joao Carlos
          <i id="iconChamada1" class="fa fa-check fa-fw w3-margin-right w3-xxlarge w3-text-grey" style="margin-left: 54.5%;" onclick="chamada1('presente');"> 
          </i>
          <i id="iconChamadaFalta1" class="fa fa-times fa-fw w3-xxlarge w3-text-grey" style="margin-top: -5%;" onclick="chamada1('ausente');"> 
            </i> 
          </h3>
          
    
          <h3 ><img src="img/profMat.png" class="w3-circle w3-xxlarge" style="margin-right: 2%;">Marina 
          <i id="iconChamada2" class="fa fa-check fa-fw w3-margin-right w3-xxlarge w3-text-grey" style="margin-left: 60.2%;" onclick="chamada2('presente');">
          </i>
          <i id="iconChamadaFalta2" class="fa fa-times fa-fw w3-xxlarge w3-text-grey" style="margin-top: -5%; margin-right: 1%;" onclick="chamada2('ausente');"> 
            </i> 
          </h3>
          
         </div>
          <div>

            <h3 id="textoChamada" class="w3-center" style="display: block;"></h3>
              <h5 class="w3-btn w3-round-xxlarge w3-teal" onclick="botaoConfirmar()" style="margin-left: 75%;">Confirmar</h5>
              <h5 class="w3-btn w3-round-xxlarge w3-red" onclick="botaoCancelar()" style="margin-left: 90%;margin-top: -8.9%;">Cancelar</h5>
            
          </div>
          <hr>
        </div>
        <div class="w3-container" >
            <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-calendar-check-o fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>
            Mensagem para os alunos
              </h2> 
            <textarea rows="5" placeholder="Envie uma mensagem para seus alunos" style="width: 100%; resize: none;"> 
            </textarea>
            <br>
            <br>
            <button class="w3-btn w3-teal w3-round-xlarge w3-right w3-padding-small"><h4> Enviar </h4></button>

          </div>
          <hr>
        </div>
        </div>
    	</div>
    </div>
  </div>
</div>
</div>
</body>
</form>
</html>

