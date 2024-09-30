<?php
include("db.php");

if(isset($_POST["ord_det"])){
    $list = $_POST["list"];
    $query = "INSERT INTO orders (order_placed)VALUES('$list')";
    if(mysqli_query($conn, $query)){
        $res=[
            "status"=>200,
            "msg"=>"Order placed successfully"
        ];
        echo json_encode($res);
    }
    else{
        $res=[
            "status"=>500,
            "msg"=>"Failed to place order"
        ];
        echo json_encode($res);
    }
    
  
}
?>