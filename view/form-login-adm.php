<?php

  include "view/header.php";
  
?>


<form class="form-horizontal" method="post" action="adm">
<fieldset>

<!-- Form Name -->
<legend>Login Administrador</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput"></label>  
  <div class="col-md-4">
  <input id="nome" name="nome" type="text" placeholder="Usuario" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="entrar" name="entrar" class="btn btn-primary">Entrar</button>
  </div>
</div>

</fieldset>
</form>

<?php

  include "view/footer.php";
  
?>