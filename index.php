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
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/index.css">
    <style></style>
</head>
<body>
    <header>
        <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
        <div class="menu-options">
        <div class="item-option" title="ver carrito" ><i class="fa fa-shopping-cart"></i></div>
            <?php 
            if (isset($_SESSION['IdUsu'])){
                echo '<h4>'.$_SESSION['Fname'].'</h4>';
            }else{?>
            <div class="item-option" title="usuario"><a href="login.php"><i class="fa fa-user-o"></a></i></div>
            <div class="item-option" title="registrase"><i class="fa fa-sign-in"></i></div>
            <?php }?>
        </div>
    </header>
    <div class="main-content">
        <div class="content-page">
            <div class="title-section">Productos</div>
            <div class="products-list" id='space-list'>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript">
        var p='<?php $_GET["p"];?>'
    </script>
    <script type="text/javascript">
        (function(){
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
