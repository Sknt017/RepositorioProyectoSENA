<?php 
    session_start();
    $response = new stdClass;
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
    <title class="ttle1" id="ttle2">Product View</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style></style>
</head>
<body>
    <?php include "assets/header.php"?>
    <div class="main-content">
        <div class="content-page">
            <section>
                <div class="sec1">
                    <img id="imgId" src="https://stockx-360.imgix.net//Nike-Air-Huarache-Run-Ultra-White-2017/Images/Nike-Air-Huarache-Run-Ultra-White-2017/Lv2/img01.jpg?auto=format,compress&q=90&updated_at=1538080256&w=500" alt="">
                </div>
                <div class="sec2">
                    <h3 id="id-title">NOMBRE PRINCIPAL</h3>
                    <h2 id="id-price">120000</h2>
                    <h4 id="id-desc">Descripcion del producto</h4>
                    <button onclick="buy_process()">COMPRAR</button>
                </div>
            </section>
            <div class="title-section">Productos destacados</div>
            <div class="products-list" id='space-list'>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        var p='<?php echo $_GET["p"];?>'
    </script>
    <script type="text/javascript">
        (function(){
            // debugger;
            $.ajax({
                url:'resources/products/get-products.php',
                type: 'POST',
                data:{},
                success:function(data){
                    // debugger;
                    // console.log(data);
                    let html='';
                    var i = 0;
                    // var j = data.data.lenght;
                    // while(i < j){
                    //     html+=
                    //     '<div class="product-box">'+
                    //         '<a href="">'+
                    //             '<div class="product">'+
                    //                     '<img src="'+data.data[i].Img+'" alt="">'+
                    //                     '<div class="detail-title">'+data.data[i].NomPro+'</div>'+
                    //                     '<div class="detail-description">'+data.data[i].MarPro+'</div>'+
                    //                     '<div class="detail-price">'+data.data[i].PriPro+'</div>'+
                    //             '</div>'+
                    //         '</a>'+
                    //     '</div>';
                    //     i++;
                    // }
                    // console.log(Object.keys(data.data).length)
                    for(var i = 0; i < Object.keys(data.data).length; i++){
                        if(data.data[i].IdPro==p){
                            document.getElementById("imgId").src=data.data[i].Img;
                            document.getElementById("id-title").innerHTML=data.data[i].NomPro;
                            document.getElementById("id-price").innerHTML=data.data[i].PriPro;
                            document.getElementById("id-desc").innerHTML=data.data[i].MarPro;
                        }
                        html+=
                        '<div class="product-box">'+
                            '<a href="product.php?p='+data.data[i].IdPro+'">'+
                                '<div class="product">'+
                                        '<img src="'+data.data[i].Img+'" alt="">'+
                                        '<div class="detail-title">'+data.data[i].NomPro+'</div>'+
                                        '<div class="detail-description">'+data.data[i].MarPro+'</div>'+
                                        '<div class="detail-price">'+data.data[i].PriPro+'</div>'+
                                '</div>'+
                            '</a>'+
                        '</div>';
                    }
                    document.getElementById("space-list").innerHTML=html;
                }
            });
        })();
        function buy_process() {
            // debugger;
            $.ajax({
				url:'resources/buys/session_check.php',
				type:'POST',
				data:{
					IdPro:p
				},
				success:function(data){
					// console.log(data);
					if (data.state) {
						console.log(data.detail);
					}else{
						console.log(data.detail);
						if (data.open_login) {
							open_login();
						}
					}
				},
				error:function(err){
					console.error(err);
				}
			});
            // debugger;
        }
        function open_login(){
            window.location.href="login.php";
        }

    </script>
</body>
</html>

