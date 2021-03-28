<header>
    <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
        <div class="menu-options">
        <div class="item-option" title="ver carrito" ><a href="Order.php"><i class="fa fa-shopping-cart"></i></a></div>
            <?php 
            if (isset($_SESSION['IdUsu'])){
                echo '<div onclick="display_m()" style=""><p>'.$_SESSION['Fname'].'</p></div>';
            }else{?>
            <div class="item-option" title="usuario"><a href="login.php"><i class="fa fa-user-o"></a></i></div>
            <div class="item-option" title="registrase"><a href="signup.php"><i class="fa fa-sign-in"></i></a></div>
            <?php }?>
        </div>
        <div class="options" id="menuC" style="display: none;">
            <table>
                <ul>
                    <li>
                      <a href="logout.php">Salir</a>
                    </li>
                </ul>
            </table>        
        </div>
    </header>
    <script type="text/javascript">
        function display_m(){
            // console.log("function enabled");
            if(document.getElementById('menuC').style.display='none'){
                document.getElementById('menuC').style.display='block';
            }else{
                document.getElementById('menuC').style.display='none';
            }
        }
    </script>
