<?php 
    session_start();
    $response = new stdClass;
    if(!isset($_SESSION['IdUsu'])){
        header('Location: ./login.php');
    }
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
    <title>Pedidos</title>
    <link rel="stylesheet" href="resources/css/index.css">
</head>
<body>
    <?php include "assets/header_logo.php"?>
    <div class="main-content">
        <div class="content-page">
            <h3>Pedidos</h3>
            <div class="body-order" id="space-list">
            </div>
            <form action="charge.php" method="POST">
                <input type="hidden" name="amount" value="210000.00">
                <input type="hidden" name="Sta" value="" id="Sta">
                <input type="text" name="dirU" placeholder="Añadir direccion" id="dirU">
                <input type="submit" name="submit" value="añadir direccion y Continuar a Paypal">
            </form>
        </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
    (function(){
            $.ajax({
                url:'resources/orders/get_orders.php',
                type: 'POST',
                data:{},
                success:function(data){
                    var tot= [], mul=[];
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
								'<p><b>Cantidad:</b> '+data.data[i].quant+'</p>'+
								'<p><b>Marca:</b> '+data.data[i].MarPro+'</p>'+
							'</div>'+
						'</div>';
                        tot.push(data.data[i].PriPro);
                        mul.push(data.data[i].quant);
                    }
                    Nn=i-1;
                    console.log(Nn);
                    document.getElementById("space-list").innerHTML=html;
                    var Stat= data.data[Nn].statusN; 
                    document.getElementById("Sta").value=Stat;
                }
            });
        })();
        function Pbuy(){
            let dirU = document.getElementById('dirU').value;
            if(dirU==""){
                alert("rellena los campos para procesar la compra");
            }
        }
</script>
</html>
