  
<?php
include_once("connection.php");
?>
     <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/Ảnh màn hình 2023-10-23 lúc 11.11.14.png" alt="Slide">
					</li>
					<li><img src="img/Ảnh màn hình 2023-10-23 lúc 11.12.00.png" alt="Slide">
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <!--Gioi thieu cac chuc nang-->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>Exchange, return every 1 months </p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo2pc.svg" alt="Slide">
					</li>
                    </div>
                
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free ship</p>
                    </div> -->
                    <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo3pc.svg" alt="Slide">
					</li>
                </div>
                <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo4pc.svg" alt="Slide">
					</li>
                    </div>
                    <div class="col-md-3 col-sm-6">
                    <!-- <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Payment security</p> -->
                        <li>
						<img src="https://oasis.opstatics.com/content/dam/oasis/page/2023/home/media/logo1pc1.svg" alt="Slide">
					</li>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Product</h2>
                        <div class="product-carousel">
                        
                        <!--Load san pham tu DB -->
                           <?php
						  // 	include_once("database.php");
		  				   	$result = mysqli_query($conn, "SELECT * FROM product" );
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
			                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				            ?>
				            <!--Một sản phẩm -->
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['Pro_image']?>" width="150" height="150">
                                </div>
                                
                                <h2><a href="?page=details&&id=<?php echo  $row['Product_ID']?>"><?php echo  $row['Product_Name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?>$</ins> <del>
                                </div> 
                            </div>
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/Logo_Aorus.jpg" alt="">
                            <img src="img/Logo_Asus.jpg" alt="">
                            <img src="img/Logo_CoolerMaster.png" alt="">
                            <img src="img/Logo_Gskill.png" alt="">
                            <img src="img/Logo_Intel.png" alt="">
                            <img src="img/Logo_MSI.jpg" alt="">
                            <img src="img/Logo_NZXT.png" alt="">
                            <img src="img/Logo_Corsair.png" alt="">
                            <img src="img/Logo_Seagate.png" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    </div> <!-- End product widget area -->
    
   
  