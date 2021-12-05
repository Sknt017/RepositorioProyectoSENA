<?php 
    session_start();
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
    <title>Pagina principal - OnFeet</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style></style>
</head>
<body>
    <?php include "assets/header.php"?>
    <div class="main-content">
        <div class="content-page">
        <div class="main-content">
            <div class="grid-container">
                <?php include "assets/filter.php"?>
            <div class="content-page">
                <div class="title-section">Productos</div>
                <div class="products-list" id='space-list'>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        var p='<?php $_GET["p"];?>'
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#brand').on('change',function(){
                var value = $(this).val();
                // alert(value);   
                $.ajax({
                    url: "resources/products/fetch-products.php",
                    type:"POST",
                    data: 'request=' + value ,
                    beforeSend:function(){
                        $(".space-list").html("<span>Loading...</span>");
                    },
                    success:function(data){
                    let html='';
                    var i = 0;
                    for(var i = 0; i < Object.keys(data.data).length; i++){
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
                })      
            })
        });
        (function(){
            $.ajax({
                url:'resources/products/get-products.php',
                type: 'POST',
                data:{},
                success:function(data){
                    let html='';
                    var i = 0;
                    for(var i = 0; i < Object.keys(data.data).length; i++){
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

    </script>
</body>
</html>
