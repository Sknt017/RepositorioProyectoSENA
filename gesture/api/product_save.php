<?php 
    include "../config/_connection.php";
    $response = new stdClass();
    // $response->state=true;
    $NomPro=$_POST['Name'];
    $IdMar=$_POST['Brand'];
    $TiPro=$_POST['Type'];
    $PriPro=$_POST['Price'];
    $Img=$_POST['Img'];
    // var_dump($response);
    
    if($NomPro==""){
        $response->state=false;
        $response->detail="Missing name of the product";
        // var_dump($response);
        // return;
    }else{
        if($IdMar==""){
            $response->state=false;
            $response->detail="Missing brand id of the product";
        }else{
            if($TiPro==""){
                $response->state=false;
                $response->detail="Missing Type of product";
            }else{
                if($PriPro==""){
                    $response->state=false;
                    $response->detail="Missing price of product";
                }else{
                    if($Img==""){
                        $response->state=false;
                        $response->detail="Missing img of the product";
                    }else{
                        $sql="INSERT INTO productos(NomPro,id_mar,TiPro,PriPro,Img)VALUES('$NomPro',$IdMar,'$TiPro',$PriPro,'$Img')";
                        $result=mysqli_query($conn, $sql);
                        if($result){
                            $response->state=true;
                        }else{
                            $response->state=false;
                            $response->detail="error al agregar el producto";
                        }
                    }
                }
            }
        }
        
    }
    ECHO json_encode($response);
    ?>