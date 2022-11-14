<?php
    $item1 = $_POST["item1"];
    $item2 = $_POST["item2"];
    $item3 = $_POST["item3"];
    $amount = $_POST["amount1"];
    $amount = $_POST["amount2"];
    $amount = $_POST["amount3"];
    $shipping = $_POST["shipping"];

    $total = 0;
    if($item1 == 25){
        $tot1 = 25;
        $total += $amount1;
    }
    if($item2 == 35){
        $tot2 = 35;
        $total += $amount2;
    }
    if($item3 == 75){
        $tot3 = 75;
        $total += $amount3;
    }
    if($shipping == "Free"){
        $shipping = 0;
    }
    else if($shipping == "3 Day"){
        $shipping = 5;
    }
    else if($shipping == "Over Night"){
        $shipping = 50;

    }
    $total += $shipping;
    echo "Amount: " . $total;
    echo "<table border =\"1\" style='border-collapse: collapse'>
    <tr>
        <th> Quantity </th>
        <th> Price </th>
        <th> Total </th>
    <tr>
    <tr>
        <td>$item1</td>

        <td>$amount1</td>

        <td>$tot1</td>
    <tr>
    <tr>
        <td>$item2</td>
        <td>$amount2</td>
        <td>$tot2</td>
    <tr>
    <tr>
        <td>$item3</td>
        <td>$amount3</td>
        <td>$tot3</td>
    <tr>
    "
?>