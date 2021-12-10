<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso compra producto [dev]</title>
    <style></style>
</head>
<body>
    <form action="charge.php" method="POST">
        <input type="text" name="" placeholder="Añadir direccion" id="dirU">
        <input type="text" name="amount" placeholder="valor total" value="210,000.00">
        <input  onclick="Cped()" type="submit" name="submit" value="Continuar con paypal">
    </form>
    
</body>
</html>

<script>
    function Cped(){
        let dirU = document.getElementById('dirU').value;
            if(dirU==""){
                alert("rellena los campos para procesar la compra");
            }else{
                $.ajax({
                    url:'charge.php',
                    type: 'POST',
                    data:{
                        dirU:dirU,
                        submit:true
                    },
                    success:function(data){
                        console.log(data);
                        if(data.state){
                            window.location.href="Order.php";
                        }else{
                            alert(data.detail);
                        }

                    }
                })
            }
    }
</script>