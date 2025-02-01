<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		include 'templates/header.php';
	?>	
  </head>

  <body  data-page="catalogDB">



    <!-- header start -->
    <header class="section-t-space">
      <div class="custom-container">
        <div class="header-panel">
          <a href="index.html">
            <i class="iconsax back-btn" data-icon="arrow-left"></i>
          </a>
          <h3>КАТАЛОГ</h3>
        </div>
      </div>
    </header>
    <!-- header end -->








    <!-- categories section start -->
    <section>
	
	
	

	
	
	
	
	
	
      <div class="custom-container">





  <div  class="nav-scroller">
    <nav >
	
		<div id="caty" class="nav-scroller__items dragscroll">


            <div class="preloader-hide"><div class="spinner-border color-highlight" role="status"></div></div>
		  
		  
        </div> 
	      
      
    </nav>
  </div>


      </div>
    </section>
    <!-- categories section end -->





    <!-- banner section start --
    <section class="banner-wapper">
      <div class="custom-container">
        <div class="banner-bg">
          <img class="img-fluid img-bg" src="assets/images/banner/banner-2.jpg" alt="banner-2" />
          <div class="banner-content">
            <h2 class="fw-semibold">Best Selling</h2>
            <h4>Comforts & Modern life Stylish Sofa</h4>
          </div>
          <a href="shop.html" class="more-btn">
            <h4>View More</h4>
            <i class="iconsax right-arrow" data-icon="arrow-right"></i>
          </a>
        </div>
      </div>
    </section>
    <!-- banner section end -->







   


 <!-- other furniture section start -->
    <section class="section-t-space">
      <div class="custom-container">
	  
	  
	  <div class="container">


	 

        <div id="goo"class="row g-4">
          





            <img  class="waiting" src="img/loading.gif" alt="" />

	  

		  
		  
		  
		  
        </div>
      </div>
	  
	  

    </div>
	  
    </section>
    <!-- other furniture section end -->








 

       <!-- filter offcanvas start -->
    <div class="modal search-filter" id="search-filter" tabindex="-1">
      <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
          <div class="modal-title">
            <a href="landing.html" data-bs-dismiss="modal">
              <i class="iconsax back-btn" data-icon="arrow-left"></i>
            </a>
            <h3 class="fw-semibold" id="GFG">Название      </h3>
          </div>

          <div class="tab-body d-flex align-items-start">


            <div class="tab-content" id="v-pills-tabContent">


<section class="pt-0">
      <div class="custom-container">
        <div class="product-details">




          <div class="accordion details-accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <div class="accordion-header" id="headingOne">
                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-p1"></div>
              </div>

              <div id="panelsStayOpen-p1" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <table class="table table-bordered text-center m-0">
                    <thead>
                      <tr>
                        <th scope="col">Вес</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Время приготовления</th>
                        <th scope="col">Код товара</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td id="gramm"> -- </td>
                        <td id="price"> -- </td>                        
						<td id="time"> -- </td>                      
						<td id="kod"> -- </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>




	
		  
		  

            <div class="accordion-item">
              <div class="accordion-header" id="headingThree">
                <div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-p3">Состав</div>
              </div>
              <div id="panelsStayOpen-p3" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="product-description">
                    <p style="text-align: center;"  id="composition">Нет данных для отображения</p>
					
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>



            </div>
			
			
			
          </div>

          <div class="footer-modal d-flex gap-3">

            <a id="cart" href="landing.html" class="js-add-to-cart theme-btn btn btn-inline mt-0 w-50" data-bs-dismiss="modal">В корзину</a>
			

			
			
			
			
			
          </div>
        </div>
      </div>
    </div>
    <!-- filter offcanvas end -->
	
	
	
	
	
	

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->

    <!-- bottom navbar start -->
    <div class="navbar-menu">
      <ul>
        <li>
          <a href="/">
            <div class="icon">
              <img class="unactive" src="assets/images/svg/home.svg" alt="home" />
              <img class="active" src="assets/images/svg/home-fill.svg" alt="home" />
            </div>
          </a>
        </li>
        <li  class="active">
          <a href="categories.php">
            <div class="icon">
              <img class="unactive" src="assets/images/svg/categories.svg" alt="categories" />
              <img class="active" src="assets/images/svg/categories-fill.svg" alt="categories" />
            </div>
          </a>
        </li>
        <li>
          <a href="cart.php">
            <div class="icon"> <span id="total-cart-count" class="badge"></span>
              <img class="unactive" src="assets/images/svg/bag.svg" alt="bag" />
              <img class="active" src="assets/images/svg/bag-fill.svg" alt="bag" />

            </div>
          </a>
        </li>

        <li>
          <a href="profile.php">
            <div class="icon">
              <img class="unactive" src="assets/images/svg/profile.svg" alt="profile" />
              <img class="active" src="assets/images/svg/profile-fill.svg" alt="profile" />
            </div>
          </a>
        </li>
      </ul>
    </div>
    <!-- bottom navbar end -->

    <!-- swiper js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/custom-swiper.js"></script>

    <!-- range-slider js -->
    <script src="assets/js/range-slider.js"></script>

    <!-- iconsax js -->
    <script src="assets/js/iconsax.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
	
	
	


	
    <script id="goods-template" type="text/template">
        <% _.each(goods, function(item) { %>
				
		<div class="col-6" >
            <div class="product-box">
				<div class="product-box-img" style="background-image: url(img/goods/<%= item.photo %>);" href="landing.html#search-filter" class="btn filter-btn mt-0" data-bs-toggle="modal" 
				onclick='
				document.getElementById("GFG").innerHTML ="<%- item.good %>";
				document.getElementById("gramm").innerHTML ="<%= item.gramm %>";
				document.getElementById("price").innerHTML ="<%= item.price %>  р.";
				document.getElementById("composition").innerHTML ="<%= item.composition %> ";
				document.getElementById("kod").innerHTML ="<%- item.good_id %> ";
				document.getElementById("time").innerHTML ="<%= item.time %> ";
				
				document.getElementById("cart").setAttribute("data-id", "<%- item.good_id %>");
				document.getElementById("cart").setAttribute("data-name", "<%- item.good %>");
				document.getElementById("cart").setAttribute("data-gramm", "<%- item.gramm %>");
				document.getElementById("cart").setAttribute("data-price", "<%- item.price %>");
				document.getElementById("cart").setAttribute("data-img", "img/goods/<%- item.photo %>")

			
				'>
                    


              </div>
                    
                <div class="cart-box">
                  <button  class="cart-bag btn-sm js-add-to-cart button"
                        data-id="<%= item.good_id %>"
                        data-name="<%- item.good %>"
						data-gramm="<%= item.gramm %>"
                        data-price="<%= item.price %>"
                        data-img="img/goods/<%= item.photo %>"
                    >
                   <img class="unactive" src="assets/images/svg/cart-svgrepo-com.svg" alt="bag">

				  </button>

                </div>
				
              <div class="product-box-detail" >
                <h4><%- item.good %></h4>
                <div class="d-flex justify-content-between gap-3">
                  <h5><%- item.gramm %></h5>
                  <h3 class="fw-semibold"><%= item.price %> руб.</h3>
                </div>
              </div>
            </div>
          </div>
				

        <% }); %>
    </script>
	

	
	
	<script id="catalog" type="text/template">
        <% _.each(goo, function(good) { %>


				
	
		<div class="col-6">
            <div class="product-box">
				<div class="product-box-img" style="background-image: url(img/goods/<%- good.photo %>);"  href="landing.html#search-filter" class="btn filter-btn mt-0" data-bs-toggle="modal" 
				onclick='
				document.getElementById("GFG").innerHTML ="<%- good.good %>";
				document.getElementById("gramm").innerHTML ="<%= good.gramm %>";
				document.getElementById("price").innerHTML ="<%= good.price %>  р.";
				document.getElementById("composition").innerHTML ="<%= good.composition %> ";
				document.getElementById("kod").innerHTML ="<%- good.good_id %> ";
				document.getElementById("time").innerHTML ="<%= good.time %> ";
				
				document.getElementById("cart").setAttribute("data-id", "<%- good.good_id %>");
				document.getElementById("cart").setAttribute("data-name", "<%- good.good %>");
				document.getElementById("cart").setAttribute("data-gramm", "<%- good.gramm %>");
				document.getElementById("cart").setAttribute("data-price", "<%- good.price %>");
				document.getElementById("cart").setAttribute("data-img", "img/goods/<%- good.photo %>")   
				
				
				
				'>
 				



                    

              </div>

              <div class="product-box-detail">
                <h4><%- good.good %></h4>
                <div class="d-flex justify-content-between gap-3">
                  <h5><%- good.gramm %></h5>
                  <h3 class="fw-semibold"><%= good.price %> руб.</h3>
                </div>
              </div>
			  
			  
			  
			    <div class="cart-box but-wrap">
                  <button  class="cart-bag btn-sm js-add-to-cart button"
                        data-id="<%= good.good_id %>"
                        data-name="<%- good.good %>"
						data-gramm="<%= good.gramm %>"
                        data-price="<%= good.price %>"
                        data-img="img/goods/<%- good.photo %>"
                    >
                   <img class="unactive" src="assets/images/svg/cart-svgrepo-com.svg" alt="bag">

				  </button>
				  


                </div>
            </div>
        </div>
				


        <% }); %>
    </script>
	
		
	<script id="catyg" type="text/template">
        <% _.each(caty, function(cat) { %>


	

      <a class="nav-scroller__item" href="/category_id.html?category=<%= cat.id %>"><%- cat.category %></a>



        <% }); %>
    </script>
	
	
	
	

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalogDB.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>
	



    <script type="text/javascript">
    // Проверяем совместимость браузера, в котором мы запускаем
        if ("serviceWorker" in navigator) {
          if (navigator.serviceWorker.controller) {
            console.log("[PWA Builder] active service worker found, no need to register");
          } else {
            //  Регистрация serviceWorker
            navigator.serviceWorker
              .register("/pwa-sw.js", {
                scope: "/"
              })
              .then(function (reg) {
                console.log("[PWA Builder] Service worker has been registered for scope: " + reg.scope);
              });
          }
        }
		
		

    </script>	
	
	
	
	
	
	    
    
<script type="text/javascript">

setTimeout(function() {
    var _0x399bx1 = document['getElementById']('preloader');
    if (_0x399bx1) {
        _0x399bx1['classList']['add']('preloader-hide')
    }
}, 150);
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    <div id="note" class="none">
        Товар добавлен в корзину <a id="close">[закрыть]</a>
		
		
		
		
    </div>


  <script>
     note = document.getElementById("note");
     note.style.display = 'none';

  </script>
	
	
	
	
	
	
	
	
	
	
	
	
  </body>
</html>
