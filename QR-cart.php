<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="fuzzy" />
    <meta name="keywords" content="fuzzy" />
    <meta name="author" content="fuzzy" />
    
	
	
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
	
	
    <meta name="google" value="notranslate">
    
    
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="assets/images/logo/favicon.png" type="image/x-icon" />
    <title>JUMEIRA COFFEE</title>
    <link rel="apple-touch-icon" href="assets/images/logo/favicon.png" />
    <meta name="theme-color" content="#122636" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="fuzzy" />
    <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconsax.css" />
    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />
    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css?ver=2" />
  </head>

  <body data-page="cart">
    <!-- header start -->
    <header class="section-t-space">
      <div class="custom-container">
        <div class="header-panel">
          <a href="QR-menu.php">
            <i class="iconsax back-btn" data-icon="arrow-left"></i>
          </a>
          <h3>КОРЗИНА</h3>
        </div>
      </div>
    </header>
    <!-- header end -->

    <!-- cart section start -->
	<section>
    <div class="container">


        <div class="table-responsive">
            <table class="table table-hover table-bordered">

                <tbody id="cart">
                    <tr><td colspan="6"><img src="img/loading.gif" alt="" /></td></tr>
                </tbody>
            </table>
			
			
			
			
        </div>
		
		
		
	<div class="QR-pay-popup">
      <div class="price-items">
        <h6>Итого:</h6>
        <h2><span id="total-cart-summa">65000</span> руб.</h2>
      </div>
    
    </div>
	
	
	<section>
      <div id="QR-message" class="custom-container">
        <div class="alert alert-info">
        
            Обатитесь к персоналу, чтобы сделать заказ
        
		</div>
      </div>  
    </section>
		
		
		

    </div>
	</section>
    <!-- cart section end -->

    <!-- cart bottom start -->



    <!-- cart bottom end -->





    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->


















    <!-- iconsax js -->
    <script src="assets/js/iconsax.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
	
	
	
	
	
	
	
	

    <script id="cart-template" type="text/template">
        <% _.each(goods, function(good) { %>

            <tr class="cart-item js-cart-item" data-id="<%= good.id %>">

                <td>

                
     
			
			
			
			
			
			
			
			
			
			
			
			
			
			

            <div class="horizontal-product-box">
			
			

			  
			  <div class="horizontal-product-img" style="background-image: url(<%- good.img %>);">
                
              </div>
			  
			  
			  
			  
              <div class="horizontal-product-details">
                <div class="d-flex align-items-center justify-content-between">
                  <a href="product-details.html">
                    <h4><%- good.name %></h4>
                  </a>
                  <i class="iconsax trash" data-icon="trash"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M21 5.97998C17.67 5.64998 14.32 5.47998 10.98 5.47998C9 5.47998 7.02 5.57998 5.04 5.77998L3 5.97998" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M8.5 4.97L8.72 3.66C8.88 2.71 9 2 10.69 2H13.31C15 2 15.13 2.75 15.28 3.67L15.5 4.97" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M18.85 9.14001L18.2 19.21C18.09 20.78 18 22 15.21 22H8.79002C6.00002 22 5.91002 20.78 5.80002 19.21L5.15002 9.14001" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M10.33 16.5H13.66" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M9.5 12.5H14.5" stroke="#292D32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
</i>
                    <span class="cart-item__btn-remove js-remove-from-cart" title="Удалить из корзины" data-id="<%= good.id %>">
                        <span class="glyphicon glyphicon-remove"></span>                                
                    </span>
					
                </div>
                <ul class="product-info">
                  <li><%= good.gramm %></li>
                  <li><span class="product-color color3"></span>  </li>
                </ul>
                <div class="d-flex align-items-center justify-content-between ">
                  <div class="d-flex align-items-center gap-2">
                    <h3 class="fw-semibold"> <span class="js-summa"> <%= good.count * good.price %> </span> руб.</h3>
                  </div>
                  <div class="plus-minus">
				  
				  

                    <span 
                        class="cart-item__btn-dec-count js-change-count" 
                        title="Уменьшить на 1" 
                        data-id="<%= good.id %>" 
                        data-delta="-1"
                    >
                        <span class="glyphicon glyphicon-minus"></span>
                    </span>
                    <span class="js-count"><%= good.count %></span>
                    <span 
                        class="cart-item__btn-inc-count js-change-count" 
                        title="Увеличить на 1" 
                        data-id="<%= good.id %>" 
                        data-delta="1"
                    >
                        <span class="glyphicon glyphicon-plus"></span>
                    </span>

				  
				  
				  

                  </div>
                </div>
              </div>
            </div>

			
			
			
			
			
			</td>
			
		</tr>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
        <% }); %>
    </script>
	
	
	
	
	
	
	
	
	
	
    <script id="order-message-template" type="text/template">
        <% if (count !== 0) { %>
            В Вашей корзине <%= count %> товара(ов) на общую сумму <%= summa %> рублей.
            Заполните форму ниже и нажмите кнопку Отправить заказ.
        <% } else { %>
            Ваша корзина пуста. Перед отправкой заказа добавьте в корзину хотя бы один товар.
        <% } %>
    </script>
	
	
	

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalog.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>	
	
	
  </body>
</html>
