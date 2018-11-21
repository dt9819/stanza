<div id="content">
			<div class="container">
					<div class="col-md-12">
						<ul class="breadcrumb">
							<li><a href="index.php">Home</a></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a></li>
							<li><?php echo $pro_title;?></li>
						</ul>
					</div>

					<div class="col-md-3">
						<?php include("includes/sidebar.php");?>
					</div>
					
					<div class="col-md-9">
						<div class="row" id="productMain">
							<div class="col-sm-6">
								<div id="mainImage">
									<div class="carousel slide" id="myCarousel" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<li data-target="#myCarousel" data-slide-to="2"></li>
										</ol>

										<div class="carousel-inner">
											<div class="item active">
												<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
											</div>
											<div class="item">
												<img src="admin_area/product_images/<?php echo $pro_img2; ?>">
											</div>
											<div class="item">
												<img src="admin_area/product_images/<?php echo $pro_img3; ?>">
											</div>
										</div>

										<a class="left carousel-control" href="#myCarousel" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
											<span class="sr-only">Previous</span>
										</a>

										<a class="right carousel-control" href="#myCarousel" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="box">
									<h1 class="text-center"> <?php echo $pro_title; ?> </h1>
									<?php  add_cart(); ?>
									<form action="details.php?add_cart=<?php echo $product_id; ?>" method="post" class="form-horizontal">
										<div class="form-group">
											<label class="col-md-5 control-label"> Product Quantity </label>
											<div class="col-md-7">
												<select name="product_qty" class="form-control">
													<option>Select quantity</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-5 control-label"> Product Size </label>
											<div class="col-md-7">
												<select name="product_size" class="form-control">
													<option>Select a Size</option>
													<option>Small</option>
													<option>Medium</option>
													<option>Large</option>
												</select>											
											</div>
										</div>

										<p class="price"> $<?php echo $pro_price; ?> </p>
										<p class="text-center buttons">
											<button class="btn btn-primary" type="submit">
												<i class="fa fa-shopping-cart"></i> Add to Cart
											</button>
										</p>

									</form>
								</div>

								<div class="row" id="thumbs">
									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/<?php echo $pro_img1; ?>" class="img-responsive">
										</a>
									</div>

									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/<?php echo $pro_img2; ?>" class="img-responsive">
										</a>
									</div>

									<div class="col-xs-4">
										<a href="#" class="thumb">
											<img src="admin_area/product_images/<?php echo $pro_img3; ?>" class="img-responsive">
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="box" id="details">
							<p>
								<h4>Product Details</h4>
								<p> <?php echo $pro_desc; ?> </p>	
								<h4>Size</h4>
								<ul>
									<li>Small</li>
									<li>Medium</li>
									<li>Large</li>
								</ul>
							</p>
							<hr>
						</div>

						<div class="row same-height-row">
							<div class="col-md-3 col-sm-6">
								<div class="box same-height headline">
									<h3 class="text-center"> You also like these Products</h3>
								</div>
							</div>
							<?php 
								$get_products = "select * from products order by rand() LIMIT 0,3";
								$run_products = mysqli_query($con,$get_products);
								while($row_products = mysqli_fetch_array($run_products)){
									$pro_id = $row_products['product_id'];
									$pro_title = $row_products['product_title'];
									$pro_price = $row_products['product_price'];
									$pro_img1 = $row_products['product_img1'];
									echo "
									<div class='center-responsive col-md-3 col-sm-6'>
										<div class='product same_height'>
											<a href='details.php?pro_id=$pro_id'>
												<img src='admin_area/product_images/$pro_img1' class='img-responsive'>
											</a>
											<div class='text'>
												<h3><a href='details.php?pro_id=$pro_id'>$pro_title</a></h3>
												<p class='price'>$ $pro_price</p>
											</div>
										</div>
									</div> 
									";
								}
							?>
						</div>
					</div>
				</div>
			</div>



			<div class="_1HmYoV _35HD7C col-5-12 _3KsTU0"><div class="bhgxx2 col-12-12"><div class="_1CUCUJ"><div class="_2uAjEK"><div class="keS6DZ"><div class="_3aYEat"><div class="_21PE8N" style="height:832px"><ul class="LzhdeS" style="-webkit-transform:translateY(-0px);-moz-transform:translateY(-0px);-o-transform:translateY(-0px);-ms-transform:translateY(-0px);transform:translateY(-0px)"><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmxruwvshw.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmxruwvshw.jpeg?q=70)"></div><div class="_3wR-Kp"></div><div class="sWIg8E"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o SGxMsH"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmggzy7bkd.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmfyss9e4d.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hnfsecjfde.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hnyyzf84cb.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hzgmffxsyb.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hnx46nux5t.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/jdnevm80/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaf2gmq3xhqunfs.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/jea9x8w0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaf3y38xgreeawe.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/jh55mkw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaf58dfrpwyvxre.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/jh55mkw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaf58dhmhgqgqez.jpeg?q=70)"></div></div></li><li class="_4f8Q22 _2y_FdK" style="height:64px"><div class="_3MF26o"><div class="_2_AcLJ" style="background-image:url(https://rukminim1.flixcart.com/image/128/128/jh55mkw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaf58djzfhwcfse.jpeg?q=70)"></div></div></li></ul></div><div class="_1sPU_V _2-5Z5m LwZTRD"><svg width="8" height="15" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg" class="_1gnlcU"><path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z" fill="#000" class=""></path></svg></div><div class="_1sPU_V _3-urXm"><svg width="8" height="15" viewBox="0 0 16 27" xmlns="http://www.w3.org/2000/svg" class="_1gnlcU"><path d="M16 23.207L6.11 13.161 16 3.093 12.955 0 0 13.161l12.955 13.161z" fill="#000" class=""></path></svg></div></div></div><div class="_2rDnao"><div class="_1ov7-N"><div class="_4m8kDI " style="height: 165.5px; width: 165.301px; transform: scale(0);"></div><div class="_3BTv9X _3iN4zu" style="height: inherit; width: inherit;"><img class="_1Nyybr Yun65Y   _30XEf0" alt="Green Soul Vienna High Back Office Chair (Black Tan) Leatherette Office Executive Chair" src="https://rukminim1.flixcart.com/image/832/832/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmggzy7bkd.jpeg?q=70"></div></div><div class="_2nGfcO" style="left: 366.797px; width: 661.203px; height: 662px;"><div class="_3BTv9X _3iN4zu" style="height: inherit; width: inherit;"><img class="_1Nyybr QpT5Md   _30XEf0" alt="" src="https://rukminim1.flixcart.com/image/1664/1664/j7z2wsw0/office-study-chair/z/2/v/leatherette-vienna-hb-black-tan-green-soul-original-imaey3hmggzy7bkd.jpeg?q=90" style="transform: translate3d(-307.773px, -493px, 0px);"></div></div></div></div><div class="_3gDSOa _13EqDR"><div class="DsQ2eg"><svg xmlns="http://www.w3.org/2000/svg" class="_2oLiqr" width="16" height="16" viewBox="0 0 20 16"><path d="M8.695 16.682C4.06 12.382 1 9.536 1 6.065 1 3.219 3.178 1 5.95 1c1.566 0 3.069.746 4.05 1.915C10.981 1.745 12.484 1 14.05 1 16.822 1 19 3.22 19 6.065c0 3.471-3.06 6.316-7.695 10.617L10 17.897l-1.305-1.215z" fill="#2874F0" class="_35Y7Yo" stroke="#FFF" fill-rule="evenodd" opacity=".9"></path></svg></div></div></div></div><div class="bhgxx2 col-12-12"><div class="_1k1QCg _3QNwd7"><ul class="row"><li class="col col-6-12"><button class="_2AkmmA _2Npkh4 _2MWPVK"><svg class="_3oJBMI" width="16" height="16" viewBox="0 0 16 15" xmlns="http://www.w3.org/2000/svg"><path class="" d="M15.32 2.405H4.887C3 2.405 2.46.805 2.46.805L2.257.21C2.208.085 2.083 0 1.946 0H.336C.1 0-.064.24.024.46l.644 1.945L3.11 9.767c.047.137.175.23.32.23h8.418l-.493 1.958H3.768l.002.003c-.017 0-.033-.003-.05-.003-1.06 0-1.92.86-1.92 1.92s.86 1.92 1.92 1.92c.99 0 1.805-.75 1.91-1.712l5.55.076c.12.922.91 1.636 1.867 1.636 1.04 0 1.885-.844 1.885-1.885 0-.866-.584-1.593-1.38-1.814l2.423-8.832c.12-.433-.206-.86-.655-.86" fill="#fff"></path></svg> <!-- -->ADD TO CART</button></li><li class="col col-6-12"><form><button class="_2AkmmA _2Npkh4 _2kuvG8 _7UHT_c" type="button"><span class="_279WdV"></span> <!-- -->BUY NOW</button></form></li></ul></div></div></div>