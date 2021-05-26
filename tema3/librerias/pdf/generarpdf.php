<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1><br><table border ="1"> <tr><td>asda</td></tr> </table>');
$mpdf->Output();

?>