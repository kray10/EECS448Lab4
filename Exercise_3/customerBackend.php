<?php

  echo("Welcome ".$_POST['userName']."<br>");
  echo("Your password: ".$_POST['password']."<br><br>");
  echo("Your Receipt<br><br>");
  $lightSaberCost = ((int)$_POST['lightSabers']) * 100;
  $robesCost = ((int)$_POST['robes']) * 20;
  $appendagesCost = ((int)$_POST['appendages']) * 50;
  $shippingCost = 0;
  $typeOfShipping = "";

  if ($_POST['shipping'] == "sevenDay") {
    $typeOfShipping = "7 Day";
  } else if ($_POST['shipping'] == "overNight") {
    $typeOfShipping = "Over Night";
    $shippingCost = 50;
  } else if ($_POST['shipping'] == "threeDay") {
    $typeOfShipping = "3 Day";
    $shippingCost = 5;
  }

  echo("<table border=\"1\">".
          "<tr>".
          "<th></th>".
          "<th>Quantity</th>".
          "<th>Cost Per Item</th>".
          "<th>Sub Total</th>".
          "</tr>");
  echo("<tr>".
          "<th>Lightsabers</th>".
          "<td align=\"center\">".$_POST['lightSabers']."</td>".
          "<td align=\"center\">$100.00</td>".
          "<td align=\"center\">$".$lightSaberCost."</td>");
  echo("<tr>".
          "<th>Robes</th>".
          "<td align=\"center\">".$_POST['robes']."</td>".
          "<td align=\"center\">$20.00</td>".
          "<td align=\"center\">$".$robesCost."</td>");
  echo("<tr>".
          "<th>Artificial Appendages</th>".
          "<td align=\"center\">".$_POST['appendages']."</td>".
          "<td align=\"center\">$50.00</td>".
          "<td align=\"center\">$".$appendagesCost."</td>");
  echo("<tr>".
          "<th>Shipping</th>".
          "<td align=\"center\" colspan=\"2\">$typeOfShipping</td>".
          "<td align=\"center\">$".$shippingCost."</td>");
  echo("<tr>".
          "<th colspan=\"3\">Total Cost</th>".
          "<td align=\"center\">$".($shippingCost + $appendagesCost + $robesCost + $lightSaberCost)."</td>");

?>
