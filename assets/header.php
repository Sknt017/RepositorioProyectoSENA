<header>
    <div class="logo"><a href="index.php"><img src="resources/walking-solid.svg" alt="">OnFeet</a></div>
        <div class="menu-options">
        <div class="item-option" title="ver mis pedidos" ><a href="Order.php"><em class="fa fa-check-square-o"></em></a></div>
            <?php 
            if (isset($_SESSION['IdUsu'])){
                echo '<div onclick="display_m()" style=""><p>'.$_SESSION['Fname'].'</p></div>';
            }else{?>
            <div class="item-option" title="usuario"><a href="login.php"><em class="fa fa-user-o"></a></em></div>
            <div class="item-option" title="registrase"><a href="signup.php"><em class="fa fa-sign-in"></em></a></div>
            <?php }?>
        </div>
        <div class="options" id="menuC" style="display: none;">
            <table>
                <caption style="color: #eee;"></caption>
                <th id="thH" style="color: #eee;"></th>
                <ul>
                    <li>
                      <a href="logout.php">Salir</a>
                    </li>
                </ul>
            </table>        
        </div>
        <script src="./assets/script.js"></script>
</header>
