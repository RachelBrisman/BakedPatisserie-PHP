<br>
<ul id="navigation" class="slimmenu">
    <li><a href="index.php">Home</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <?php
        if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == 1){
            echo "<li><a href='order.php'>Place an Order</a></li>";
            echo "<li><a href='logout.php'>Log Out</a></li>";
        }else{
            echo "<li><a href='login.php'>Login</a></li>";
        }
    ?> 
</ul>
<script src="jquery.slimmenu.min.js"></script>

<script>
    $('#navigation').slimmenu(
    {
        resizeWidth: '800',
        collapserTitle: 'Main Menu',
        animSpeed: 'medium',
        easingEffect: null,
        indentChildren: false,
        childrenIndenter: '&nbsp;'
    });
</script>