<?php
 // Объявляем нужные константы
  $host = 'localhost';  // Хост, у нас все локально
  $user = 'gasangaji';    // Имя созданного вами пользователя
  $pass = 'Gg08112011'; // Установленный вами пароль пользователю
  $db_name = 'jumeira';   // Имя базы данных
  $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
	$link->set_charset("utf8");
  // Ругаемся, если соединение установить не удалось
  if (!$link) {
    echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
    exit;
  }
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="JUMEIRA COFFEE" />
    <meta name="keywords" content="JUMEIRA COFFEE" />
    <meta name="author" content="JUMEIRA COFFEE" />
	
	
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
    <meta name="apple-mobile-web-app-title" content="JUMEIRA COFFEE" />
    <meta name="msapplication-TileImage" content="assets/images/logo/favicon.png" />

    <meta name="msapplication-TileColor" content="#122636" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!--Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconsax.css" />

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/swiper-bundle.min.css" />

    <!-- bootstrap css -->
    <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.min.css" />
    <!-- Theme css -->
    <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css?ver=21" />
  </head>

  <body  data-page="catalogDB">






      
    <!-- header start -->
    <header class="section-t-space">
      <div class="custom-container">
        <div class="header-panel">
          <h3><?php echo "Номер вашего столика: " .$_GET['table'] ?></h3>
       
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


 <!-- other furniture section start -->
    <section class="section-t-space">
      <div class="custom-container">
	  
	  
	  <div class="container">


	 

        <div class="row g-4">
          




	
<?php
  $sql = mysqli_query($link, 'SELECT `id`, `category`  FROM `categories`');
  while ($result = mysqli_fetch_array($sql)) {
	  
	  

	echo "<h1 id='{$result['id']}'>{$result['category']}</h1>";
	
	  $sql1 = mysqli_query($link, "SELECT `id`, `good`, gramm, price, price, photo, composition, time  FROM `goods` WHERE `category_id` = {$result['id']}");
	  while ($result = mysqli_fetch_array($sql1)) {
		  $id = $result['id'];
		  $name = $result['good'];
		  $gramm = $result['gramm'];
		  $price = $result['price'];
		  $photo = $result['photo'];
		  $composition = $result['composition'];
		  $time = $result['time'];
		  
		echo '		
		<div class="col-6">
            <div class="product-box">
				<div class="product-box-img" style="background-image: url(img/goods/'.$photo.');" href="landing.html#search-filter" data-bs-toggle="modal" onclick="
				document.getElementById(&quot;GFG&quot;).innerHTML =&quot;'.$name.'&quot;;
				document.getElementById(&quot;gramm&quot;).innerHTML =&quot;'.$gramm.'&quot;;
				document.getElementById(&quot;price&quot;).innerHTML =&quot;'.$price.'&quot;;
				document.getElementById(&quot;composition&quot;).innerHTML =&quot;'.$composition.' &quot;;
				document.getElementById(&quot;kod&quot;).innerHTML =&quot;'.$id.' &quot;;
				document.getElementById(&quot;time&quot;).innerHTML =&quot;'.$time.' &quot;;
				
				document.getElementById(&quot;cart&quot;).setAttribute(&quot;data-id&quot;, &quot;'.$id.'&quot;);
				document.getElementById(&quot;cart&quot;).setAttribute(&quot;data-name&quot;, &quot;'.$name.'&quot;);
				document.getElementById(&quot;cart&quot;).setAttribute(&quot;data-gramm&quot;, &quot;'.$gramm.'&quot;);
				document.getElementById(&quot;cart&quot;).setAttribute(&quot;data-price&quot;, &quot;'.$price.'&quot;);
				document.getElementById(&quot;cart&quot;).setAttribute(&quot;data-img&quot;, &quot;img/goods/'.$photo.'&quot;)   
				
				
				
				">
 				



                    

              </div>

              <div class="product-box-detail">
                <h4>'.$name.'</h4>
                <div class="d-flex justify-content-between gap-3">
                  <h5>'.$gramm.'</h5>
                  <h3 class="fw-semibold">'.$price.'</h3>
                </div>
              </div>
			  
			  
			  
			    <div class="cart-box but-wrap">
                  <button class="cart-bag btn-sm js-add-to-cart button" data-id="'.$id.'" data-name="'.$name.'" data-gramm="'.$gramm.'" data-price="'.$price.'" data-img="img/goods/'.$photo.'">
                   <img class="unactive" src="assets/images/svg/cart-svgrepo-com.svg" alt="bag">

				  </button>
				  


                </div>
            </div>
        </div>
		
		
		
		';
	  }
	
	
  }
?>
	  

		  
		  
		  
		  
        </div>
      </div>
	  
	  

    </div>
	  
    </section>
    <!-- other furniture section end -->







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
    <div class="QR-navbar-menu">
   <a href="QR-cart.php">   <ul>

        <li>
          <span>Заказ /  </span> <span id="total-cart-count"></span>
            <div class="icon">
           

            </div>
         
        </li>


      </ul> </a>
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


	

      <a class="nav-scroller__item" href="/QR-menu.php?#<%= cat.id %>"><%- cat.category %></a>



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
