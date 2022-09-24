<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/pedido.css">
  <title>Document</title>
</head>
<body style="background-color: #809b58;">
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      <!--FORMULÁRIO DE PEDIDO-->
      <div id="login">
        <form method="post" action=""> 
          <h1 style="color: #809b58;">Dados para Pedido</h1> 
          <p> 
            <label for="email_login">Nome do recebedor</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="José Alves"/>
          </p>
          <p> 
            <label for="email_login">CPF</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="000.000.000-00"/>
          </p>
          <p> 
            <label for="email_login">Telefone para contato</label>
            <input id="email_login" name="email_login" required="required" type="tel" placeholder="(11) 3132-3000"/>
          </p>
          <p> 
            <label for="email_login">Pedido</label>
            <!-- <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@htmlecsspro.com"/> -->
          <textarea class="area" name="" id="" cols="30" rows="6" placeholder="1 Coca de 2L e 1 Pizza especial da casa"></textarea>
          </p>
            <input style="background-color: #809b58;" type="submit" value="Concluir pedido!" /> 
          </p>
        </form>
      </div>
    </div>
  </div> 
  
</body>
</html>