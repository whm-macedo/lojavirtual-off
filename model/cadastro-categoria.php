<!-- <?php// include "cadastrar-departamento.php"; ?>-->
<?php include "../includes/header.php";?>

<div class="container">

<form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>cagastro de categorias</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="camisa">Camisas</label>  
  <div class="col-md-4">
  <input id="camisa" name="camisa" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="caneca">Canecas</label>  
  <div class="col-md-4">
  <input id="caneca" name="caneca" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="short">Short's</label>  
  <div class="col-md-4">
  <input id="short" name="short" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>
</div>

<?php include 'includes/footer.php'; ?>