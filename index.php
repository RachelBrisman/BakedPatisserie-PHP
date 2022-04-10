<?php include "header.php"; ?>

<div id="wrapper">
    <h2> Welcome to Baked, the exclusive bakery site!</h2> 
    <h3> If you have been accepted as a customer, login and place an order! </h3>
    <h3> If you have not you have not yet joined, contact us to see if you are eligible.</h3>
    <div class="rslides_container">
        <ul class="rslides" id="slides1">
            <li><img src="ccc.jpg" alt=""><h1 class="caption">Chocolate Chip Cookies</h1></li>
            <li><img src="pbc.jpg" alt=""><h1 class="caption">Peanut Butter Cookies</h1></li>
            <li><img src="cc.jpg" alt=""><h1 class="caption">Chocolate Cupcakes</h1></li>
            <li><img src="vc.jpg" alt=""><h1 class="caption">Vanilla Cupcakes</h1></li>
            <li><img src="cb.jpg" alt=""><h1 class="caption">Chocolate Babka</h1></li>
            <li><img src="vb.jpg" alt=""><h1 class="caption">Vanilla Babka</h1></li>
            <li><img src="cnb.jpg" alt=""><h1 class="caption">Cinnamon Babka</h1></li>
            <li><img src="ar.jpg" alt=""><h1 class="caption">Assorted Rugelach</h1></li>
        </ul>
    </div>
</div>
<script>
  $(function() {
    $(".rslides").responsiveSlides({maxwidth: 500});
  });
</script>
<?php include "footer.php"; ?>

