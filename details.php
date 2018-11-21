<?php  include("includes/header_main.php");?>

<div id="details-content">
	<ul class="breadcrumb">
	  	<li><a href="index.php">Home</a></li>
		<li><a href="#">Clothing</a></li>
		<li><a href="#">Men's Clothing</a></li>
		<li><a href="#">Jeans</a></li>
		<li><a href="#">Mr. Classy</a></li>
		<li>Denizen from Levi's Skinny Women's Black Jeans</li>
	</ul>
</div>


	<div class="product_image">
		<ul class="thumb">
			<li><a href="images/Denizen from Levi's Skinny Women's Black Jeans.jpeg" target="imgBox"><img src="images/Denizenthumbfront.jpeg"></a></li>
			<li><a href="images/Denizen from Levi's Skinny Women's Black Jeans Back.jpeg" target="imgBox"><img src="images/Denizenthumbback.jpeg"></a></li>
			<li><a href="images/Denizen from Levi's Skinny Women's Black Jeans side.jpeg" target="imgBox"><img src="images/Denizenthumbside.jpeg"></a></li>
			<li><a href="images/Denizen from Levi's Skinny Women's Black Jeans full.jpeg" target="imgBox"><img src="images/Denizenthumbfull.jpeg"></a></li>
			<li><a href="images/Denizen from Levi's Skinny Women's Black Jeans cloth.jpeg" target="imgBox"><img src="images/Denizenthumbclose.jpeg"></a></li>
		</ul>
		<div class="imgBox"><img src="images/Denizen from Levi's Skinny Women's Black Jeans.jpeg"></div>
	</div>
</div>
<div class="container">
	<h5>Denizen from Levi's Skinny Women's Black Jeans</h5>
</div>

<!-- <div class="container">
	<div Class="button-wrap">
	  <a href="#" class="button">
	    Button 1
	  </a>
	  <a href="#" class="button">
	    Button 2
	  </a>
	</div>
	  
	<div class="container">
	  <ul class="nav nav-pills">
	    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
	    <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
	  </ul>
	  
	  <div class="tab-content">
	    <div id="home" class="tab-pane fade in active">
	      <h3>HOME</h3>
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	    </div>
	    <div id="menu1" class="tab-pane fade">
	      <h3>Menu 1</h3>
	      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
	    </div>
	  </div>
	</div>
</div> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.thumb a').mouseover(function(e){
			e.preventDefault();
			$('.imgBox img').attr("src", $(this).attr("href"));
		});
	});
</script>
<?php include("includes/footer.php"); ?>
		