<?php 
    session_start();
    $response = new stdClass;
    if(!isset($_SESSION['IdUsu'])){
        header('Location: ./login.php');
    };
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style></style>
</head>
<body>
    <?php include "assets/header_logo.php"?>
    <div class="main-content">
        <div class="content-page">
            <h3>Pedidos</h3>
            <div class="body-order" id="space-list">
            </div>
        </div>
        </div>
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
    (function(){
            $.ajax({
                url:'resources/orders/get_orders.php',
                type: 'POST',
                data:{},
                success:function(data){
                    let html='';
                    var i = 0;
                    for(var i = 0; i < Object.keys(data.data).length; i++){
                        html+=
                        '<div class="item-order">'+
							'<div class="order-img">'+
								'<img src='+data.data[i].Img+'">'+
							'</div>'+
							'<div class="order-detail">'+
								'<h3>'+data.data[i].NomPro+'</h3>'+
								'<p><b>Precio:</b>'+data.data[i].PriPro+'</p>'+
								'<p><b>Fecha:</b> '+data.data[i].DateOr+'</p>'+
								'<p><b>Estado:</b> '+data.data[i].status+'</p>'+
								'<p><b>Dirección:</b> '+data.data[i].DirOr+'</p>'+
								'<p><b>Marca:</b> '+data.data[i].MarPro+'</p>'+
							'</div>'+
						'</div>';
                    }
                    document.getElementById("space-list").innerHTML=html;
                }
            });
        })();
</script>
</html>
