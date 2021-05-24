<?php
$mes=$_GET['mes'];
$anio=$_GET['anio'];


if ($mes<10)
  $fecha=$anio.'-0'.$mes.'-01';
	else
$fecha=$anio.'-'.$mes.'-01';

$numerodias=date('t',strtotime($fecha));
$diainicioliteral=date('l',strtotime($fecha));
echo $diainicioliteral;
switch ($diainicioliteral) 
    {
    case 'Monday':
    $diainicio=1;
    break;
    case 'Tuesday':
    $diainicio=2;
    break;
    case 'Wednesday':
    $diainicio=3;
    break;
    case 'Thursday':
    $diainicio=4;
    break;
    case 'Friday':
    $diainicio=5;
    break;
    case 'Saturday':
    $diainicio=6;
    break;
    case 'Sunday':
    $diainicio=7;
    break;

}
  




?>
<table  border="1">
	<th>Lunes</th>
	<th>Martes</th>
	<th>Miercoles</th>
	<th>Jueves</th>
	<th>Viernes</th>
	<th>Sabado</th>
	<th>domingo</th>

<?php  $dia=1; $i=0;
while ($dia<=$numerodias)
{
  ?><tr>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==1)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {
        if ($dia<=$numerodias)
        	echo $dia;
       	$dia++;
       } 
    ?> </td>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==2)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==3)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==4)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==5)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>
   <td>
   <?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==6)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>
   <td><?php 
    if ($dia==1 ) //es el dia lunes y debe empezar en lunes
       {
       	 if($diainicio==7)
        	{
        	echo $dia;
        	$dia++;
        }
           else
           	echo "&nbsp;";
       }
       else 
       {if ($dia<=$numerodias)
       	echo $dia;
       	$dia++;
       } 
    ?>  </td>

   </tr>
    <?php  
     }
    ?>
</table>
   







