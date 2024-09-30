<?php
include("db.php");

if(isset($_POST["ord_det"])){
    $list = $_POST["list"];
    $tot = $_POST["total_amount"];
    $query = "INSERT INTO orders (order_placed,amount,time)VALUES('$list','$tot',now())";
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