<?php

  include "view/header.php";
  
?>
<table class="table">
    <thead>
        <th scope="col">ID</th>
        <th scope="col">nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Categoria</th>
        
    </thead>
    <tbody>
        <?php foreach ($lista as $produto) {?>
        <tr>
            <th scope="row"><?php echo $produto['id']?> </th>
            <td><?php echo $produto['nome']?></td>
            <td><?php echo number_format($produto['preco'],2,",",".");?></td>
            <td><?php echo $produto['categoria']?></td>
            
            
        </tr>
        <?php }?>
    </tbody>
</table>
<?php

  include "view/footer.php";
  
?>

