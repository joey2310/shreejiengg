<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $date =  $_POST['date'];
        $sap =  $_POST['sap'];
        $machine=  $_POST['machine'];
        $discription =  $_POST['discription'];

        $sql = "INSERT INTO machine (date, sap, machine, discription) values('$date', '$sap', '$machine', '$discription' )";
        header("Location:machine.php");
        $result = mysqli_query($conn, $sql);
    }
?>