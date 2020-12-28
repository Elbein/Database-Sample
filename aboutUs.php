<?php include "inc/html-top.php"; ?>
<?php require 'DB.php';
 $d = DB::connect('mysqli://bhorn2:%dWjkMub@betaweb.csug.rochester.edu/bhorn2_1'); 
 ?>
 <?php
    $stmt = "Select FigName, FigHeight, FigWeight, Price, FigCondition, Material 
    from Inventory 
    order by FigID";
    ?>

   <br>
   <br>

 <?php
    $stmt = "Select Name, Website, ShippingTime 
    from Suppliers 
    order by SupplierID";
    ?>

   <br>
   <br>

 <?php
    $stmt = "Select Fname, Lname, Position, EmployedSince
    from Employees 
    where SuperID <= 3 
    order by Salary";
    ?>


