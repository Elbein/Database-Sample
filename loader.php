<?php

$lines = file('Suppliers.csv');

foreach($lines as $line){
    //sepatates each cell by the delimiter "," (watch for delimiters in the cell, escaped or not)
    $cell = explode(",",$line);

    $sql = "INSERT INTO Suppliers (Name,SupplierID,Phone,Email,PhysicalLocation,ShippingTime,Website,LoginID,PaymentMethod
) VALUES (";

for each ($cell as $value) {
	$sql.= "'".$cell[$value]."');";
}
	


    // $sql.= "'".$cell[0]."','".$cell[1]."','".$cell[2]."');";

    echo $sql;

}
?>