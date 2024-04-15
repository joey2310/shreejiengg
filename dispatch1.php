<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $date =  $_POST['date'];
        $challan =  $_POST['challan'];
        $num = $_POST['num'];
        $sap =  $_POST['sap'];
        $dispatchqty =  $_POST['dispatchqty'];

        $sql = "INSERT INTO dispatch (date, challan, num, sap, dispatchqty) values('$date', '$challan', '$num', '$sap', '$dispatchqty')";
        header("Location:dispatch.php");
        $result = mysqli_query($conn, $sql);
    }
?>