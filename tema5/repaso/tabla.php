<?php session_start();?>
<table border="1">
<tr>
    <th>nombe</th>
    <th>operaciones</th>  
</tr>
<?php for ( $i = 0; $i < 10; $i++ )
{ ?>
<tr>
    <td><?php echo $i?></td>
    <td>
      <?php if($_SESSION['nivel']==1)
      {?>
        <a href="javascript:editar(<?php echo $i; ?>)">editar</a>
      <?php } ?>

    </td>
</tr>
<?php } ?>
</table>