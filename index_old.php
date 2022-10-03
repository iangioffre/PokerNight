<?php

$players = ['Ian', 'Taylor', 'Jack'];
$dates = ['09/28/2022', '10/08/2022'];
$earnings = array('Ian'    => array('09/28/2022' => 12.38, '10/08/2022' => 16.21),
                  'Taylor' => array('09/28/2022' => 14.23, '10/08/2022' =>  1.42),
                  'Jack'   => array('09/28/2022' =>  4.23) );

?>

<html>
<head>
<title>Poker Night</title>
<meta name="description" content="Poker Night">
<meta name="keywords" content="poker">
</head>
<body>
<?php 
$html = '<table>';
$html .=  '<tr>';
$html .=  '<th>Date</th>';
foreach ( $players as $player ) {
  $html .= "<th>$player</th>";
}
$html .=  '</tr>';

foreach ( $dates as $date ) {
  $html .= '<tr>';
  $html .=   "<td>$date</td>";
  foreach ( $players as $player ) {
    if ( isset($earnings[$player][$date]) ) {
      $currEarnings = $earnings[$player][$date];
    } else {
      $currEarnings = '';
    }
    $html .=   "<td>$currEarnings</td>";
  }
  $html .= '</tr>';
} 

echo $html
?>
</body>
</html>