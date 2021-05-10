 <!DOCTYPE html>
  <html>
    <head>
     <meta charset="UTF-8">
      <title> Sistema de Cadastro de Clientes </title>  
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>



      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Nome" id="nome" type="text" class="validate">
          <label for="nome"></label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Sobrenome" id="sobrenome" type="text" class="validate">
          <label for="sobrenome"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="Esse campo não pode ser editado" id="disabled" type="text" class="validate">
          <label for="disabled"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          This is an inline input field:
          <div class="input-field inline">
            <input id="email_inline" type="email" class="validate">
            <label for="email_inline">Email</label>
            <span class="helper-text" data-error="wrong" data-success="right">Helper text</span>
          </div>
        </div>
      </div>
    </form>
  </div>



    </body>
  </html>