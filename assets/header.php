<header>
    <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
        <div class="menu-options">
        <div class="item-option" title="ver mis pedidos" ><a href="Order.php"><i class="fa fa-check-square-o"></i></a></div>
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
        <script src="./assets/script.js"></script>
</header>
