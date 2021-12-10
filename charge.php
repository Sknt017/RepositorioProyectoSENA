<?php
require_once 'config.php';
// require_once 'resources/orders/confirm_order.php';

if (isset($_POST['submit'])) {
    
    try {
        $response = $gateway->purchase(array(
            'amount' => $_POST['amount'],
            'currency' => PAYPAL_CURRENCY,
            'returnUrl' => PAYPAL_RETURN_URL,
            'cancelUrl' => PAYPAL_CANCEL_URL,
            ))->send();
            
            if ($response->isRedirect()) {
                session_start();
                include_once('resources/_connection.php');
                // $response=new stdClass();
                $sta=$_POST['Sta'];
                $IdUsu=$_SESSION['IdUsu'];
                $dirOr=$_POST['dirU'];
                switch($sta){
                    case 1:
                        $sql="UPDATE orders SET DirOr='$dirOr', Status = 2 WHERE IdUsu = $IdUsu && Status = 3 || Status = 1 " ;
                        break;
                    case 2:
                        $sql="UPDATE orders SET DirOr='$dirOr', Status = 3 WHERE IdUsu = $IdUsu && Status = 2 || Status = 1 " ;
                        break;
                    // case 3:
                    //     $sql="UPDATE orders SET DirOr='$dirOr', Status = 2 WHERE IdUsu = $IdUsu && Status = 1 || Status = 3 " ;
                    //     break;
                    default:
                        break;
                }
                $result=mysqli_query($conn, $sql);
                if($result){
                    // $response->state=true;
                    echo "query send successfully";
                }else{
                    echo "somethigs wrong here";
                    var_dump($_POST);
                }
                mysqli_close($conn);
                $response->redirect(); // this will automatically forward the customer
            } else {
                // not successful
                echo $response->getMessage();
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
