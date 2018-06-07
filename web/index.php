<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/w3.css">
<link rel='stylesheet' href='css/font.css'>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
	body {
		font-family: "Roboto", sans-serif;
	}

   /* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=password]{
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 6px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 25%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 20%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}
 
</style>
</head>
<body>

<h2 class="w3-center">Acesso</h2>

<div class="w3-card" style="margin-left:25%; margin-right:25%;">
  
  <form action="validacao.php" method="post">
      <div class="imgcontainer">
        <img src="img/login.png" alt="Avatar" class="avatar">
      </div>

      <div class="container w3-center">
        <label for="usuario"><b>Usuário</b></label>
        <input type="text" placeholder="Digite seu usuário" name="usuario" required class="w3-round-xxlarge">
        	<br>
        <label for="senha"><b>Senha</b></label>
        <input type="password" placeholder="Digite sua senha" name="senha" required class="w3-round-xxlarge">
        <br>
        <button type="submit" class="w3-btn w3-round-xxlarge w3-teal">OK</button>
      </div>
  </form>
</div>
</body>
</html>
