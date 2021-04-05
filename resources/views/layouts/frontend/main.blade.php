
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Foxic HTML Template - Index Page</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
	<link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/css/vendor.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/frontend/css/icon.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" href="{{ asset('assets/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open%20Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('assets/frontend/css/font-vazir.css') }}">
</head>
<body class="has-smround-btns has-loader-bg equal-height">
<header class="hdr-wrap">
	<div class="hdr-content hdr-content-sticky">
		<div class="container">
			<div class="row">
				<div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
				</div>
				<div class="col-auto hdr-logo">
					<a href="index.html" class="logo"><img srcset="/storage/images/logo.webp" alt="Logo"></a>
				</div>
				<div class="hdr-nav hide-mobile nav-holder-s">
				</div>
				<div class="hdr-links-wrap col-auto ml-auto">
					<div class="hdr-inline-link">
<div class="search_container_desktop">
	<div class="dropdn dropdn_search dropdn_fullwidth">
		<a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="fa fa-search" style="font-size: 30px"></i><span class="dropdn-link-txt">Search</span></a>
		<div class="dropdn-content">
			<div class="container">
				<form method="get" action="#" class="search search-off-popular">
					<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
					<button type="submit" class="search-button"><i class="fa fa-search" style="font-size: 30px"></i></button>
					<a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="dropdn dropdn_wishlist">
	<a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
		<i class="fa fa-heart-o" aria-hidden="true" style="font-size: 30px" ></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
	</a>
</div>
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="{{ route('user.dashboard') }}" class="dropdn-link js-dropdn-link js-dropdn-link only-icon" data-panel="#dropdnAccount"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 30px"></i><span class="dropdn-link-txt">Account</span></a>
</div>
						<div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link only-icon" data-panel="#dropdnMinicart">
		<i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile">$34.99</span>
	</a>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hdr">
		<div class="hdr-topline hdr-topline--dark js-hdr-top">
			<div class="container">
				<div class="row flex-nowrap">
<div class="col hdr-topline-left hide-mobile">
	<div class="hdr-line-separate">
	<ul class="social-list list-unstyled">
		
		<li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
		</li>
		<li>
			<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		</li>
	</ul>
</div>
					</div>
					<div class="col hdr-topline-center">
						<div class="custom-text js-custom-text-carousel" data-slick='{"speed": 1000, "autoplaySpeed": 3000}'>
	<div class="custom-text-item"><i class="fa fa-firefox" aria-hidden="true"></i> Use promocode <span>FOXIC</span> to get 15% discount!</div>
	<div class="custom-text-item"><i class="fa fa-plane" aria-hidden="true"></i> <span>Free</span> plane shipping over <span>$250</span></div>
	<div class="custom-text-item"><i class="fa fa-gift" aria-hidden="true"></i> Today only! Post <span>holiday</span> Flash Sale! 2 for $20</div>
</div>
					</div>
					<div class="col hdr-topline-right hide-mobile">
						<div class="hdr-inline-link">
<div class="dropdn_language">
	<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
		<a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
		<div class="dropdn-content">
			<ul>
				<li class="active"><a href="#"><img src="images/flags/en.webp" alt="">English</a></li>
				<li><a href="#"><img src="images/flags/sp.webp" alt="">Spanish</a></li>
				<li><a href="#"><img src="images/flags/de.webp" alt="">German</a></li>
				<li><a href="#"><img src="images/flags/fr.webp" alt="">French</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="dropdn_currency">
	<div class="dropdn dropdn_caret">
			<a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
			<div class="dropdn-content">
					<ul>
						<li class="active"><a href="#"><span>US dollars</span></a></li>
						<li><a href="#"><span>Euro</span></a></li>
						<li><a href="#"><span>UK pounds</span></a></li>
					</ul>
			</div>
	</div>
</div>
							<div class="hdr_container_desktop">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="{{ route('user.dashboard') }}" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 30px"></i><span class="dropdn-link-txt">Account</span></a>
</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="hdr-content">
			<div class="container">
				<div class="row">
					<div class="col-auto show-mobile">
<div class="menu-toggle"> <a href="#" class="mobilemenu-toggle"><i class="icon-menu"></i></a> </div>
					</div>
					<div class="col-auto hdr-logo">
						<a href="index.html" class="logo"><img srcset="/storage/images/logo.webp" alt="Logo"></a>
					</div>
					<div class="hdr-nav hide-mobile nav-holder justify-content-center px-4">
<ul class="mmenu mmenu-js">
	<li class="mmenu-item--simple"><a href="#" class="active">Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		<div class="mmenu-submenu d-flex">
			<ul class="submenu-list mt-0">
	<li><a href="index.html">Fashion (Default) Skin</a><span class="submenu-link-image"><img src="images/screen/screen01.webp" alt=""></span></li>
	<li><a href="index-sport.html">Sport Skin</a><span class="submenu-link-image"><img src="images/screen/screen-sport.webp" alt=""></span></li>
	<li><a href="index-pets.html">Pets Skin <span class="menu-label  menu-label--color3">NEW</span></a><span class="submenu-link-image"><img src="images/screen/screen-pets.webp" alt=""></span></li>
	<li><a href="index-lingeries.html">Lingeries Skin <span class="menu-label  menu-label--color3">NEW</span></a><span class="submenu-link-image"><img src="images/screen/screen-lingeries.webp" alt=""></span></li>
	<li><a href="index-games.html">Games Skin</a><span class="submenu-link-image"><img src="images/screen/screen-games.webp" alt=""></span></li>
	<li><a href="index-helloween.html">Halloween Skin</a><span class="submenu-link-image"><img src="images/screen/screen-halloween.webp" alt=""></span></li>
	<li><a href="index-medical.html">Medical Skin</a><span class="submenu-link-image"><img src="images/screen/screen-medical.webp" alt=""></span></li>
	<li><a href="index-food.html">Food Market Skin</a><span class="submenu-link-image"><img src="images/screen/screen-food.webp" alt=""></span></li>
	<li><a href="index-cosmetics.html">Cosmetics Skin</a><span class="submenu-link-image"><img src="images/screen/screen-cosmetics.webp" alt=""></span></li>
	<li><a href="index-fishing.html">Fishing Skin</a><span class="submenu-link-image"><img src="images/screen/screen-fishing.webp" alt=""></span></li>
	<li><a href="#">Books Skin <span class="menu-label menu-label--color1">Coming Soon</span></a><span class="submenu-link-image"><img src="images/screen/screen-books.webp" alt=""></span></li>
	<li><a href="#">Electronics Skin <span class="menu-label menu-label--color2">Coming Soon</span></a><span class="submenu-link-image"><img src="images/screen/screen-electronics.webp" alt=""></span></li>
	<li><a href="#">Vaping Skin <span class="menu-label">Coming Soon</span></a><span class="submenu-link-image"><img src="images/screen/screen-vaping.webp" alt=""></span></li>
</ul>
<ul class="submenu-list mt-0">
	<li><a href="index-02.html">Home page 2</a><span class="submenu-link-image"><img src="images/screen/screen02.webp" alt=""></span></li>
	<li><a href="index-03.html">Home page 3</a><span class="submenu-link-image"><img src="images/screen/screen03.webp" alt=""></span></li>
	<li><a href="index-04.html">Home page 4</a><span class="submenu-link-image"><img src="images/screen/screen04.webp" alt=""></span></li>
	<li><a href="index-05.html">Home page 5</a><span class="submenu-link-image"><img src="images/screen/screen05.webp" alt=""></span></li>
	<li><a href="index-06.html">Home page 6</a><span class="submenu-link-image"><img src="images/screen/screen06.webp" alt=""></span></li>
	<li><a href="index-07.html">Home page 7</a><span class="submenu-link-image"><img src="images/screen/screen07.webp" alt=""></span></li>
	<li><a href="index-08.html">Home page 8</a><span class="submenu-link-image"><img src="images/screen/screen08.webp" alt=""></span></li>
	<li><a href="index-09.html">Home page 9</a><span class="submenu-link-image"><img src="images/screen/screen09.webp" alt=""></span></li>
	<li><a href="index-10.html">Home page 10</a><span class="submenu-link-image"><img src="images/screen/screen10.webp" alt=""></span></li>
	<li><a href="index-rtl.html">Home page RTL</a><span class="submenu-link-image"><img src="images/screen/screen-rtl.webp" alt=""></span></li>
</ul>
		</div>
	</li>
	<li class="mmenu-item--simple"><a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		<div class="mmenu-submenu">
			<ul class="submenu-list">
	<li><a href="product.html">Product page</a>
		<ul>
			<li><a href="product.html">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
			<li><a href="product-2.html">Product page variant 2</a></li>
			<li><a href="product-3.html">Product page variant 3</a></li>
			<li><a href="product-4.html">Product page variant 4</a></li>
			<li><a href="product-5.html">Product page variant 5</a></li>
			<li><a href="product-6.html">Product page variant 6</a></li>
			<li><a href="product-7.html">Product page variant 7</a></li>
		</ul>
	</li>
	<li><a href="category.html">Category page</a>
		<ul>
			<li><a href="category.html">Left sidebar filters</a></li>
			<li><a href="category-closed-filter.html">Closed filters</a></li>
			<li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
			<li><a href="category-listview.html">Listing View</a></li>
			<li><a href="category-empty.html">Empty category</a></li>
		</ul>
	</li>
	<li><a href="cart.html">Cart & Checkout</a>
		<ul>
			<li><a href="cart.html">Cart Page</a></li>
			<li><a href="cart-empty.html">Empty cart</a></li>
			<li><a href="checkout.html">Checkout variant 1</a></li>
			<li><a href="checkout-2.html">Checkout variant 2</a></li>
			<li><a href="checkout-3.html">Checkout variant 3</a></li>
		</ul>
	</li>
	<li><a href="account-create.html">Account</a>
		<ul>
			<li><a href="account-create.html">Login</a></li>
			<li><a href="account-create.html">Create account</a></li>
			<li><a href="account-details.html">Account details</a></li>
			<li><a href="account-addresses.html">Account addresses</a></li>
			<li><a href="account-history.html">Order History</a></li>
			<li><a href="account-wishlist.html">Wishlist</a></li>
		</ul>
	</li>
	<li><a href="blog.html">Blog</a>
		<ul>
			<li><a href="blog.html">Right sidebar</a></li>
			<li><a href="blog-left-sidebar.html">Left sidebar</a></li>
			<li><a href="blog-without-sidebar.html">No sidebar</a></li>
			<li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
			<li><a href="blog-grid.html">Grid</a></li>
			<li><a href="blog-post.html">Blog post</a></li>
		</ul>
	</li>
	<li><a href="gallery.html">Gallery</a></li>
	<li><a href="faq.html">Faq</a></li>
	<li><a href="about.html">About Us</a></li>
	<li><a href="contact.html">Contact Us</a></li>
	<li><a href="404.html">404 Page</a></li>
	<li><a href="typography.html">Typography</a></li>
	<li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
</ul>
		</div>
	</li>
	<li><a href="category.html">Accessories<span class="menu-label">SALE</span></a></li>
	<li class="mmenu-item--mega"><a href="category.html">Men <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-left width-25">
						<div class="mmenu-bnr-wrap">
							<a href="#" class="image-hover-scale"><img src="/storage/images/logo.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="category.html">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="category.html">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="category.html">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="category.html">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html" class="active">Jackets</a>
									<ul class="sub-level">
										<li><a href="category.html">Bomber Jackets</a></li>
										<li><a href="category.html">Biker Jacket</a></li>
										<li><a href="category.html">Trucker Jacket</a></li>
										<li><a href="category.html">Denim Jackets</a></li>
										<li><a href="category.html">Blouson Jacket<span class="menu-label">SALE</span></a></li>
										<li><a href="category.html">Overcoat</a></li>
										<li><a href="category.html">Trench Coat</a></li>
									</ul>
								</li>
								<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="category.html">Blouses & Tops</a></li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts</a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
								<li><a href="category.html">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Jackets</a></li>
								<li><a href="category.html">Dresses</a></li>
								<li><a href="category.html">Blouses & Tops</a></li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Jackets</a></li>
								<li><a href="category.html">Dresses</a></li>
								<li><a href="category.html">Blouses & Tops</a></li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="#"><i class="fa fa-firefox" aria-hidden="true"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
	<li class="mmenu-item--mega"><a href="category.html">Women <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		<div class="mmenu-submenu mmenu-submenu--has-bottom">
			<div class="mmenu-submenu-inside">
				<div class="container">
					<div class="mmenu-right width-25">
						<div class="mmenu-bnr-wrap">
							<a href="#" class="image-hover-scale"><img src="/storage/images/logo.webp" class="lazyload fade-up" alt=""></a>
						</div>
						<h3 class="submenu-title"><a href="category.html">Pre-Collection<br>Spring-Summer 2021</a></h3>
					</div>
					<div class="mmenu-cols column-4">
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Collections</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Martins d'Art 2020/21<span class="submenu-link-txt">Available in boutiques from June 2019</span></a></li>
								<li><a href="category.html">Spring-Summer 2021<span class="submenu-link-txt">Available in boutiques from March 2019</span></a></li>
								<li><a href="category.html">Spring-Summer 2021 Pre-Collection<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="category.html">Cruise 2020/21<span class="submenu-link-txt">In boutiques</span></a></li>
								<li><a href="category.html">Fall-Winter 2020/21</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Ready-to-wear</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Jackets</a></li>
								<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
								<li><a href="category.html">Blouses & Tops</a>
									<ul>
										<li><a href="category.html">Jackets</a></li>
										<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
										<li><a href="category.html">Blouses & Tops</a>
											<ul>
												<li><a href="category.html">Jackets</a></li>
												<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
													<ul>
														<li><a href="category.html">Jackets</a></li>
														<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a>
															<ul>
																<li><a href="category.html">Jackets</a></li>
																<li><a href="category.html">Dresses<span class="menu-label menu-label--color3">SALE</span></a></li>
																<li><a href="category.html">Blouses & Tops</a></li>
																<li><a href="category.html">Cardigans & Pullovers</a></li>
																<li><a href="category.html">Skirts</a></li>
																<li><a href="category.html">Pants & Shorts</a></li>
																<li><a href="category.html">Outerwear</a></li>
																<li><a href="category.html">Swimwear</a></li>
															</ul>
														</li>
														<li><a href="category.html">Blouses & Tops</a></li>
														<li><a href="category.html">Cardigans & Pullovers</a></li>
														<li><a href="category.html">Skirts</a></li>
														<li><a href="category.html">Pants & Shorts</a></li>
														<li><a href="category.html">Outerwear</a></li>
														<li><a href="category.html">Swimwear</a></li>
													</ul>
												</li>
												<li><a href="category.html">Blouses & Tops</a></li>
												<li><a href="category.html">Cardigans & Pullovers</a></li>
												<li><a href="category.html">Skirts</a></li>
												<li><a href="category.html">Pants & Shorts</a></li>
												<li><a href="category.html">Outerwear</a></li>
												<li><a href="category.html">Swimwear</a></li>
											</ul>
										</li>
										<li><a href="category.html">Cardigans & Pullovers</a></li>
										<li><a href="category.html">Skirts</a></li>
										<li><a href="category.html">Pants & Shorts</a></li>
										<li><a href="category.html">Outerwear</a></li>
										<li><a href="category.html">Swimwear</a></li>
									</ul>
								</li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts</a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
								<li><a href="category.html">Swimwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Accessories</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Jackets</a></li>
								<li><a href="category.html">Dresses</a></li>
								<li><a href="category.html">Blouses & Tops</a></li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts<span class="menu-label">SALE</span></a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-col">
							<h3 class="submenu-title"><a href="category.html">Brands</a></h3>
							<ul class="submenu-list">
								<li><a href="category.html">Jackets</a></li>
								<li><a href="category.html">Dresses</a></li>
								<li><a href="category.html">Blouses & Tops</a></li>
								<li><a href="category.html">Cardigans & Pullovers</a></li>
								<li><a href="category.html">Skirts<span class="menu-label menu-label--color1">SALE</span></a></li>
								<li><a href="category.html">Pants & Shorts</a></li>
								<li><a href="category.html">Outerwear</a></li>
							</ul>
						</div>
						<div class="mmenu-bottom justify-content-center">
							<a href="#"><i class="fa fa-firefox" aria-hidden="true"></i><b>FOXshop News</b><i class="icon-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</li>
</ul>
					</div>
					<div class="hdr-links-wrap col-auto ml-auto">
						<div class="hdr-inline-link">
<div class="search_container_desktop">
	<div class="dropdn dropdn_search dropdn_fullwidth">
		<a href="#" class="dropdn-link  js-dropdn-link only-icon"><i class="fa fa-search" style="font-size: 30px"></i><span class="dropdn-link-txt">Search</span></a>
		<div class="dropdn-content">
			<div class="container">
				<form method="get" action="#" class="search search-off-popular">
					<input name="search" type="text" class="search-input input-empty" placeholder="What are you looking for?">
					<button type="submit" class="search-button"><i class="fa fa-search" style="font-size: 30px"></i></button>
					<a href="#" class="search-close js-dropdn-close"><i class="icon-close-thin"></i></a>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="dropdn dropdn_wishlist">
	<a href="account-wishlist.html" class="dropdn-link only-icon wishlist-link ">
		<i class="fa fa-heart-o" aria-hidden="true" style="font-size: 30px" ></i><span class="dropdn-link-txt">Wishlist</span><span class="wishlist-qty">3</span>
	</a>
</div>
							<div class="hdr_container_mobile show-mobile">
<div class="dropdn dropdn_account dropdn_fullheight">
	<a href="{{ route('user.dashboard') }}" class="dropdn-link js-dropdn-link" data-panel="#dropdnAccount"><i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 30px"></i><span class="dropdn-link-txt">Account</span></a>
</div>
							</div>
							<div class="dropdn dropdn_fullheight minicart">
	<a href="#" class="dropdn-link js-dropdn-link minicart-link" data-panel="#dropdnMinicart">
		<i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px"></i>
		<span class="minicart-qty">3</span>
		<span class="minicart-total hide-mobile">$34.99</span>
	</a>
</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<div class="header-side-panel">
<div class="mobilemenu js-push-mbmenu">
	<div class="mobilemenu-content">
		<div class="mobilemenu-close mobilemenu-toggle">Close</div>
		<div class="mobilemenu-scroll">
			<div class="mobilemenu-search"></div>
			<div class="nav-wrapper show-menu">
				<div class="nav-toggle">
					<span class="nav-back"><i class="icon-angle-left"></i></span>
					<span class="nav-title"></span>
					<a href="#" class="nav-viewall">view all</a>
				</div>
				<ul class="nav nav-level-1">
					<li><a href="index.html">Layouts<span class="menu-label menu-label--color1">New</span><span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="index.html">Fashion (Default) Skin</a></li>
							<li><a href="index-sport.html">Sport Skin</a></li>
							<li><a href="index-helloween.html">Halloween Skin</a></li>
							<li><a href="index-medical.html">Medical Skin</a></li>
							<li><a href="index-food.html">Food Market Skin</a></li>
							<li><a href="index-cosmetics.html">Cosmetics Skin</a></li>
							<li><a href="index-fishing.html">Fishing Skin</a></li>
							<li><a href="#">Books Skin<span class="menu-label menu-label--color1">Coming Soon</span></a></li>
							<li><a href="#">Electronics Skin<span class="menu-label menu-label--color2">Coming Soon</span></a></li>
							<li><a href="#">Games Skin<span class="menu-label menu-label--color3">Coming Soon</span></a></li>
							<li><a href="#">Vaping Skin<span class="menu-label">Coming Soon</span></a></li>
							<li><a href="index-02.html">Home page 2</a></li>
							<li><a href="index-03.html">Home page 3</a></li>
							<li><a href="index-04.html">Home page 4</a></li>
							<li><a href="index-05.html">Home page 5</a></li>
							<li><a href="index-06.html">Home page 6</a></li>
							<li><a href="index-07.html">Home page 7</a></li>
							<li><a href="index-08.html">Home page 8</a></li>
							<li><a href="index-09.html">Home page 9</a></li>
							<li><a href="index-10.html">Home page 10</a></li>
							<li><a href="index-rtl.html">Home page RTL</a></li>
						</ul>
					</li>
					<li><a href="#">Pages<span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="product.html">Product page<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="product.html">Product page variant 1<span class="menu-label menu-label--color3">Popular</span></a></li>
									<li><a href="product-2.html">Product page variant 2</a></li>
									<li><a href="product-3.html">Product page variant 3</a></li>
									<li><a href="product-4.html">Product page variant 4</a></li>
									<li><a href="product-5.html">Product page variant 5</a></li>
									<li><a href="product-6.html">Product page variant 6</a></li>
									<li><a href="product-7.html">Product page variant 7</a></li>
								</ul>
							</li>
							<li><a href="category.html">Category page<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Left sidebar filters</a></li>
									<li><a href="category-closed-filter.html">Closed filters</a></li>
									<li><a href="category-horizontal-filter.html">Horizontal filters</a></li>
									<li><a href="category-listview.html">Listing View</a></li>
									<li><a href="category-empty.html">Empty category</a></li>
								</ul>
							</li>
							<li><a href="cart.html">Cart & Checkout<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="cart.html">Cart Page</a></li>
									<li><a href="cart-empty.html">Empty cart</a></li>
									<li><a href="checkout.html">Checkout variant 1</a></li>
									<li><a href="checkout-2.html">Checkout variant 2</a></li>
									<li><a href="checkout-3.html">Checkout variant 3</a></li>
								</ul>
							</li>
							<li><a href="account-create.html">Account<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="account-create.html">Login</a></li>
									<li><a href="account-create.html">Create account</a></li>
									<li><a href="account-details.html">Account details</a></li>
									<li><a href="account-addresses.html">Account addresses</a></li>
									<li><a href="account-history.html">Order History</a></li>
									<li><a href="account-wishlist.html">Wishlist</a></li>
								</ul>
							</li>
							<li><a href="blog.html">Blog<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="blog.html">Right sidebar</a></li>
									<li><a href="blog-left-sidebar.html">Left sidebar</a></li>
									<li><a href="blog-without-sidebar.html">No sidebar</a></li>
									<li><a href="blog-sticky-sidebar.html">Sticky sidebar</a></li>
									<li><a href="blog-grid.html">Grid</a></li>
									<li><a href="blog-post.html">Blog post</a></li>
								</ul>
							</li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="faq.html">Faq</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="404.html">404 Page</a></li>
							<li><a href="typography.html">Typography</a></li>
							<li><a href="coming-soon.html" target="_blank">Coming soon</a></li>
						</ul>
					</li>
					<li><a href="category.html">New Arrivals<span class="arrow"><i class="icon-angle-right"></i></span></a>
						<ul class="nav-level-2">
							<li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Heels</a></li>
									<li><a href="category.html">Boots</a></li>
									<li><a href="category.html">Flats</a></li>
									<li><a href="category.html">Sneakers &amp; Athletic</a></li>
									<li><a href="category.html">Clogs &amp; Mules</a></li>
								</ul>
							</li>
							<li><a href="category.html">Tops<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Dresses</a></li>
									<li><a href="category.html">Shirts &amp; Tops</a></li>
									<li><a href="category.html">Coats &amp; Outerwear</a></li>
									<li><a href="category.html">Sweaters</a></li>
								</ul>
							</li>
							<li><a href="category.html">Shoes<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Heels</a></li>
									<li><a href="category.html">Boots</a></li>
									<li><a href="category.html">Flats</a></li>
									<li><a href="category.html">Sneakers &amp; Athletic</a></li>
									<li><a href="category.html">Clogs &amp; Mules</a></li>
								</ul>
							</li>
							<li><a href="category.html">Bottoms<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Jeans</a></li>
									<li><a href="category.html">Pants</a></li>
									<li><a href="category.html">slippers</a></li>
									<li><a href="category.html">suits</a></li>
									<li><a href="category.html">socks</a></li>
								</ul>
							</li>
							<li><a href="category.html">Accessories<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Sunglasses</a></li>
									<li><a href="category.html">Hats</a></li>
									<li><a href="category.html">Watches</a></li>
									<li><a href="category.html">Jewelry</a></li>
									<li><a href="category.html">Belts</a></li>
								</ul>
							</li>
							<li><a href="category.html">Bags<span class="arrow"><i class="icon-angle-right"></i></span></a>
								<ul class="nav-level-3">
									<li><a href="category.html">Handbags</a></li>
									<li><a href="category.html">Backpacks</a></li>
									<li><a href="category.html">Luggage</a></li>
									<li><a href="category.html">wallets</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href="#buynow" target="_blank">Buy Theme<span class="menu-label menu-label--color3">Hurry Up!</span><span class="arrow"><i class="icon-angle-right"></i></span></a></li>
				</ul>
			</div>
			<div class="mobilemenu-bottom">
				<div class="mobilemenu-currency">
<div class="dropdn_currency">
	<div class="dropdn dropdn_caret">
			<a href="#" class="dropdn-link js-dropdn-link">US dollars<i class="icon-angle-down"></i></a>
			<div class="dropdn-content">
					<ul>
						<li class="active"><a href="#"><span>US dollars</span></a></li>
						<li><a href="#"><span>Euro</span></a></li>
						<li><a href="#"><span>UK pounds</span></a></li>
					</ul>
			</div>
	</div>
</div>
				</div>
				<div class="mobilemenu-language">
<div class="dropdn_language">
	<div class="dropdn dropdn_language dropdn_language--noimg dropdn_caret">
		<a href="#" class="dropdn-link js-dropdn-link"><span class="js-dropdn-select-current">English</span><i class="icon-angle-down"></i></a>
		<div class="dropdn-content">
			<ul>
				<li class="active"><a href="#"><img src="images/flags/en.webp" alt="">English</a></li>
				<li><a href="#"><img src="images/flags/sp.webp" alt="">Spanish</a></li>
				<li><a href="#"><img src="images/flags/de.webp" alt="">German</a></li>
				<li><a href="#"><img src="images/flags/fr.webp" alt="">French</a></li>
			</ul>
		</div>
	</div>
</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="dropdn-content account-drop" id="dropdnAccount">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		@guest	
		<ul>
			<li><a href="account-create.html"><span>ورود</span><i class="fa fa-address-book" aria-hidden="true"></i></a></li>
			<li><a href="account-create.html"><span>ثبت نام</span><i class="fa fa-registered" aria-hidden="true"></i></a></li>
		</ul>
		<div class="dropdn-form-wrapper">
			<h5>ورود سریع</h5>
			<form action="{{ route('login') }}" method="POST">
				@csrf
				<div class="form-group">
					<input type="text" class="form-control form-control--sm" name="name" placeholder="نام کاربری">
					
				</div>
				<div class="form-group">
					<input type="password" class="form-control form-control--sm" name="password" placeholder="رمز عبور">
				</div>
				<button type="submit" class="btn">ورود</button>
			</form>
		</div>
		@else 
		<ul>
			<li><a href="{{ route('user.dashboard') }}"><span>داشبورد </span><i class="fa fa-address-book-o" aria-hidden="true"></i></a></li>
			<li><a href="account-create.html"><span>سبد خرید </span><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></li>
			<li><a href="checkout.html"><span>پیام ها </span><i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
		</ul>
		<div class="dropdn-form-wrapper">
			<a href="{{ route('logout') }}" class="btn btn-primary">خروج از اکانت</a>
		</div>
		@endguest



	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
<div class="dropdn-content minicart-drop" id="dropdnMinicart">
	<div class="dropdn-content-block">
		<div class="dropdn-close"><span class="js-dropdn-close">Close</span></div>
		<div class="minicart-drop-content js-dropdn-content-scroll">
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="product.html"><img class="lazyload fade-up" src="/storage/images/logo.webp" data-src="images/skins/fashion/products/product-01-1.webp" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">FOXic</div>
					<h2 class="minicart-prd-name"><a href="#">Leather Pegged Pants</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old">$200.00</div>
						<div class="price-new">$180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="#" class="js-product-remove" data-line-number="1"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-prd row">
				<div class="minicart-prd-image image-hover-scale-circle col">
					<a href="product.html"><img class="lazyload fade-up" src="/storage/images/logo.webp" data-src="images/skins/fashion/products/product-16-1.webp" alt=""></a>
				</div>
				<div class="minicart-prd-info col">
					<div class="minicart-prd-tag">FOXic</div>
					<h2 class="minicart-prd-name"><a href="#">Cascade Casual Shirt</a></h2>
					<div class="minicart-prd-qty"><span class="minicart-prd-qty-label">Quantity:</span><span class="minicart-prd-qty-value">1</span></div>
					<div class="minicart-prd-price prd-price">
						<div class="price-old">$200.00</div>
						<div class="price-new">$180.00</div>
					</div>
				</div>
				<div class="minicart-prd-action">
					<a href="#" class="js-product-remove" data-line-number="2"><i class="icon-recycle"></i></a>
				</div>
			</div>
			<div class="minicart-empty js-minicart-empty d-none">
				<div class="minicart-empty-text">Your cart is empty</div>
				<div class="minicart-empty-icon">
					<i class="icon-shopping-bag"></i>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 306 262" style="enable-background:new 0 0 306 262;" xml:space="preserve"><path class="st0" d="M78.1,59.5c0,0-37.3,22-26.7,85s59.7,237,142.7,283s193,56,313-84s21-206-69-240s-249.4-67-309-60C94.6,47.6,78.1,59.5,78.1,59.5z"/></svg>
				</div>
			</div>
			<a href="#" class="minicart-drop-countdown mt-3">
				<div class="countdown-box-full">
					<div class="row no-gutters align-items-center">
						<div class="col-auto"><i class="fa fa-gift" aria-hidden="true"></i></div>
						<div class="col">
							<div class="countdown-txt">WHEN BUYING TWO
								THINGS A THIRD AS A GIFT
							</div>
							<div class="countdown js-countdown" data-countdown="2021/07/01"></div>
						</div>
					</div>
				</div>
			</a>
			<div class="minicart-drop-info d-none d-md-block">
				<div class="shop-feature-single row no-gutters align-items-center">
					<div class="shop-feature-icon col-auto"><i class="icon-truck"></i></div>
					<div class="shop-feature-text col"><b>SHIPPING!</b> Continue shopping to add more products and receive free shipping</div>
				</div>
			</div>
		</div>
		<div class="minicart-drop-fixed js-hide-empty">
			<div class="loader-horizontal-sm js-loader-horizontal-sm" data-loader-horizontal=""><span></span></div>
			<div class="minicart-drop-total js-minicart-drop-total row no-gutters align-items-center">
				<div class="minicart-drop-total-txt col-auto heading-font">Subtotal</div>
				<div class="minicart-drop-total-price col" data-header-cart-total="">$340</div>
			</div>
			<div class="minicart-drop-actions">
				<a href="cart.html" class="btn btn--md btn--grey"><i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px"></i><span>Cart Page</span></a>
				<a href="checkout.html" class="btn btn--md"><i class="icon-checkout"></i><span>Check out</span></a>
			</div>
			<ul class="payment-link mb-2">
				<li><i class="icon-amazon-logo"></i></li>
				<li><i class="icon-visa-pay-logo"></i></li>
				<li><i class="icon-skrill-logo"></i></li>
				<li><i class="icon-klarna-logo"></i></li>
				<li><i class="icon-paypal-logo"></i></li>
				<li><i class="icon-apple-pay-logo"></i></li>
			</ul>
		</div>
	</div>
	<div class="drop-overlay js-dropdn-close"></div>
</div>
</div>

	@yield('content')


<footer class="page-footer footer-style-6 ">
	<div class="holder ">
		<div class="footer-shop-info">
			<div class="container">
				<div class="text-icn-blocks-bg-row">
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="fa fa-truck" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h4>ارسال سریع محصول</h4>
							<p>سفارش های شما بین 3 تا 5 روز کاری بعد از آماده شدن سفارشات شما، به شما تحویل داده میشود.</p>
						</div>
					</div>
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="fa fa-money" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h4>بهترین قیمت</h4>
							<p>ما مقرون به صرفه ترین قیمت را به شما پیشنهاد میدهیم.</p>
						</div>
					</div>
					<div class="text-icn-block-footer">
						<div class="icn">
							<i class="fa fa-sticky-note-o" aria-hidden="true"></i>
						</div>
						<div class="text">
							<h4>ضمانت کالا</h4>
							<p>اگر شما از کالایی ناراضی هستید، میتوانید آنرا مرجوع کنید.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-top">
		<div class="container">
			<div class="row mt-0">
				<div class="col-lg col-xl last-mobile">
					<div class="footer-block">
						<div class="footer-logo">
							<a href="index.html"><img class="lazyload fade-up" src="/storage/images/logo.webp" data-srcset="/storage/images/logo.webp" alt="Logo"></a>
						</div>
						<div class="collapsed-content">
							<ul>
								<li>E-mail: <a href="mailto:Foxshop@gmail.com">immagerishere@gmail.com</a></li>
								<li>Hours: 10:00 - 18:00, Mon - Fri</li>
							</ul>
						</div>
					
						<ul class="social-list">
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
							</li>
						</ul>
						<div class="d-lg-none mt-3">
							<div class="box-coupon">
								<div class="box-coupon-icon"><i class="fa fa-scissors" aria-hidden="true"></i></div>
								<div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>اطلاعات</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul>
	<li><a href="about.html">درباره ما</a></li>
	<li><a href="contact.html">پیوستن به ما</a></li>
	<li><a href="typography.html">قوانین و مقررات</a></li>
	<li><a href="typography.html">مرجوعی</a></li>
	<li><a href="typography.html">خرید و تحویل</a></li>
</ul>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>اطلاعات حساب کاربری</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul>
	<li><a href="account-details.html">اکانت شما</a></li>
	<li><a href="cart.html">سبد خرید</a></li>
	<li><a href="account-wishlist.html">لیست خرید</a></li>
	<li><a href="account-history.html">وضعیت سفارشات</a></li>
	<li><a href="account-history.html">پیگیری سفارش</a></li>
</ul>
						</div>
					</div>
				</div>
				<div class="col-lg col-xl">
					<div class="footer-block collapsed-mobile">
						<div class="title">
							<h4>درگاه های پرداخت</h4>
							<span class="toggle-arrow"><span></span><span></span></span>
						</div>
						<div class="collapsed-content">
							<ul class="payment-link">
								<li><img width="50px" src="/storage/images/zarinpal.png" alt="Zarinpal"></li>
								<li><img width="50px" src="/storage/images/enamad.png" alt="Enamad"></li>
								<li><img width="50px" src="/storage/images/namad.png" alt="Zarinpal"></li>
							</ul>
						</div>
						<div class="d-none d-lg-block">
							<div class="box-coupon">
								<div class="box-coupon-icon"><i class="fa fa-scissors" aria-hidden="true"></i></div>
								<div class="box-coupon-text"><span class="custom-color">FOXIC</span> THEME</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom footer-bottom--bg">
		<div class="container">
			<div class="footer-copyright text-center">
				تمامی حقوق متعلق به <a href="#">FOXshop</a>  میباشد
			</div>
		</div>
	</div>
</footer>
<div class="footer-sticky">
	<div class="sticky-addcart js-stickyAddToCart closed">
		<div class="container">
			<div class="row">
				<div class="col-auto sticky-addcart_image">
					<a href="product.html">
						<img src="images/skins/fashion/products/product-01-1.webp" alt=""/>
					</a>
				</div>
				<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
					<h1 class="sticky-addcart_title">Leather Pegged Pants</h1>
					<div class="sticky-addcart_price">
						<span class="sticky-addcart_price--actual">$180.00</span>
						<span class="sticky-addcart_price--old">$210.00</span>
					</div>
				</div>
				<div class="col-auto sticky-addcart_options  prd-block prd-block_info--style1">
					<div class="select-wrapper">
						<select class="form-control form-control--sm">
							<option value="">--Please choose an option--</option>
						</select>
					</div>
				</div>
				<div class="col-auto sticky-addcart_actions">
					<div class="prd-block_qty">
						<span class="option-label">Quantity:</span>
						<div class="qty qty-changer">
							<button class="decrease"></button>
							<input type="number" class="qty-input" value="1" data-min="1" data-max="1000">
							<button class="increase"></button>
						</div>
					</div>
					<div class="btn-wrap">
						<button class="btn js-prd-addtocart" data-fancybox data-src="#modalCheckOut">Add to cart
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="popup-addedtocart js-popupAddToCart closed" data-close="50000">
		<div class="container">
			<div class="row">
				<div class="popup-addedtocart-close js-popupAddToCart-close"><i class="icon-close"></i></div>
				<div class="popup-addedtocart-cart js-open-drop" data-panel="#dropdnMinicart"><i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px"></i></div>
				<div class="col-auto popup-addedtocart_logo">
					<img src="/storage/images/logo.webp" data-src="/storage/images/logo.webp" class="lazyload fade-up" alt="">
				</div>
				<div class="col popup-addedtocart_info">
					<div class="row">
						<a href="product.html" class="col-auto popup-addedtocart_image">
							<span class="image-container w-100">
								<img src="images/skins/fashion/products/product-01-1.webp" alt=""/>
							</span>
						</a>
						<div class="col popup-addedtocart_text">
							<a href="product.html" class="popup-addedtocart_title"></a>
							<span class="popup-addedtocart_message">Added to <a href="cart.html" class="underline">Cart</a></span>
							<span class="popup-addedtocart_error_message"></span>
						</div>
					</div>
				</div>
				<div class="col-auto popup-addedtocart_actions">
					<span>You can continue</span> <a href="#" class="btn btn--grey btn--sm js-open-drop" data-panel="#dropdnMinicart"><i class="fa fa-shopping-basket" aria-hidden="true" style="font-size: 30px"></i><span>Check Cart</span></a> <span>or</span> <a href="checkout.html" class="btn btn--invert btn--sm"><i class="icon-envelope-1"></i><span>Check out</span></a>
				</div>
			</div>
		</div>
	</div>
	<div class="sticky-addcart popup-selectoptions js-popupSelectOptions closed" data-close="500000">
		<div class="container">
			<div class="row">
				<div class="popup-selectoptions-close js-popupSelectOptions-close"><i class="icon-close"></i></div>
				<div class="col-auto sticky-addcart_image sticky-addcart_image--zoom">
					<a href="#" data-caption="">
						<span class="image-container"><img src="#" alt=""/></span>
					</a>
				</div>
				<div class="col col-sm-5 col-lg-4 col-xl-5 sticky-addcart_info">
					<h1 class="sticky-addcart_title"><a href="#">&nbsp;</a></h1>
					<div class="sticky-addcart_price">
						<span class="sticky-addcart_price--actual"></span>
						<span class="sticky-addcart_price--old"></span>
					</div>
					<div class="sticky-addcart_error_message">Error Message</div>
				</div>
				<div class="col-auto sticky-addcart_options prd-block prd-block_info--style1">
					<div class="select-wrapper">
						<select class="form-control form-control--sm sticky-addcart_options_select">
							<option value="none">Select Option please..</option>
						</select>
						<div class="invalid-feedback">Can't be blank</div>
					</div>
				</div>
				<div class="col-auto sticky-addcart_actions">
					<div class="prd-block_qty">
						<span class="option-label">Quantity:</span>
						<div class="qty qty-changer">
							<button class="decrease"></button>
							<input type="number" class="qty-input" value="2" data-min="1" data-max="10000">
							<button class="increase"></button>
						</div>
					</div>
					<div class="btn-wrap">
						<button class="btn js-prd-addtocart">Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a class="back-to-top js-back-to-top compensate-for-scrollbar" href="#" title="Scroll To Top">
		<i class="fa fa-angle-up" aria-hidden="true" style="font-size: 30px"></i>
	</a>
	<div class="loader-horizontal js-loader-horizontal">
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
		</div>
	</div>
</div>
<div class="footer-sticky">
	<div class="payment-notification-wrap js-pn" data-visible-time="3000" data-hidden-time="3000" data-delay="500"
		 data-from="Aberdeen,Bakersfield,Birmingham,Cambridge,Youngstown"
		 data-products='[{"productname":"Leather Pegged Pants", "productlink":"product.html","productimage":"images/skins/fashion/products/product-01-1.webp"},{"productname":"Black Fabric Backpack", "productlink":"product.html","productimage":"images/skins/fashion/products/product-28-1.webp"},{"productname":"Combined Chunky Sneakers", "productlink":"product.html","productimage":"images/skins/fashion/products/product-23-1.webp"}]'>
		<div class="payment-notification payment-notification--squared">
			<div class="payment-notification-inside">
				<div class="payment-notification-container">
					<a href="#" class="payment-notification-image js-pn-link">
						<img src="images/products/product-01.webp" class="js-pn-image" alt="">
					</a>
					<div class="payment-notification-content-wrapper">
						<div class="payment-notification-content">
							<div class="payment-notification-text">Someone purchased</div>
							<a href="product.html" class="payment-notification-name js-pn-name js-pn-link">Applewatch</a>
							<div class="payment-notification-bottom">
								<div class="payment-notification-when"><span class="js-pn-time">32</span> min ago</div>
								<div class="payment-notification-from">from <span class="js-pn-from">Riverside</span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="payment-notification-close"><i class="icon-close-bold"></i></div>
				<div class="payment-notification-qw prd-hide-mobile js-prd-quickview" data-src="ajax/ajax-quickview.html"><i class="icon-eye"></i></div>
			</div>
		</div>
	</div>
</div>

<script src="{{ asset('assets/frontend/js/lazysizes.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/ls.bgset.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/ls.aspectratio.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/jquery.ez-plus.js') }}"></script>
<script src="{{ asset('assets/frontend/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/app-html.js') }}"></script>
<script>
	$.ajaxSetup({
		headers: {
		  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
</script>
@yield('footer')
</body>
</html>