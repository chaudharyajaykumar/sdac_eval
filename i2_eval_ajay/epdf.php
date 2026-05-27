<?php
include 'db.php';
require 'vendor/autoload.php';

$result = $con->query('select * from menu');

$p = new TCPDF();
$p->AddPage();
$p->setFont('times', 'B', 12);
$p->Cell(0, 10, 'menu', 0, 1, 'C');

$h = '<table>
<tr>
 <td>id</td>
  <td>item name</td>
   <td>description</td>
    <td>price</td>
   <td>category</td>
    <td>image</td>
    <td>user id</td>
</tr>';


while ($row = $result->fetch_assoc()) {
    $h .= '<tr>
    <td>' . $row['id'] . '</td>
    <td>' . $row['iname'] . '</td>
    <td>' . $row['description'] . '</td>
    <td>' . $row['price'] . '</td>
    <td>' . $row['category'] . '</td>
    <td>' . $row['image'] . '</td>
    <td>' . $row['user_id'] . '</td>

    </tr>';
}

$h .= '</table>';

$p->writeHTML($h, true, false, true, false, '');
$p->Output('menu.pdf', 'D');
