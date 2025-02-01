<!DOCTYPE html>
<html lang="en">
  <head>
	<?php
		include 'templates/header.php';
	?>	
  </head>

  <body  data-page="catalogDB">
    <!-- header start -->
    <header class="profile-header section-t-space">
      <div class="custom-container">
        <div class="header-panel">
          <h3>ПРОФИЛЬ</h3>
        </div>
        <div class="d-flex align-items-center gap-2">
          <div class="profile-pic mt-5">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.4" d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z" fill="#292D32"></path>
<path d="M14.0809 14.1499C11.2909 12.2899 6.74094 12.2899 3.93094 14.1499C2.66094 14.9999 1.96094 16.1499 1.96094 17.3799C1.96094 18.6099 2.66094 19.7499 3.92094 20.5899C5.32094 21.5299 7.16094 21.9999 9.00094 21.9999C10.8409 21.9999 12.6809 21.5299 14.0809 20.5899C15.3409 19.7399 16.0409 18.5999 16.0409 17.3599C16.0309 16.1299 15.3409 14.9899 14.0809 14.1499Z" fill="#292D32"></path>
<path opacity="0.4" d="M19.9894 7.3401C20.1494 9.2801 18.7694 10.9801 16.8594 11.2101C16.8494 11.2101 16.8494 11.2101 16.8394 11.2101H16.8094C16.7494 11.2101 16.6894 11.2101 16.6394 11.2301C15.6694 11.2801 14.7794 10.9701 14.1094 10.4001C15.1394 9.4801 15.7294 8.1001 15.6094 6.6001C15.5394 5.7901 15.2594 5.0501 14.8394 4.4201C15.2194 4.2301 15.6594 4.1101 16.1094 4.0701C18.0694 3.9001 19.8194 5.3601 19.9894 7.3401Z" fill="#292D32"></path>
<path d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z" fill="#292D32"></path>
</svg>
          </div>
          <div class="profile-name d-flex align-items-center justify-content-between mt-3 w-100">
            <h4 class="theme-color">Не авторизован</h4>
            <a href="profile-setting.html">
              <i class="iconsax edit-icon" data-icon="edit-1"></i>
            </a>
          </div>
        </div>
      </div>
    </header>
    <!-- header end -->



	
	

    <!-- profile section start -->
    <section class="section-b-space pt-0">
      <div class="custom-container">
        <ul class="profile-list">
            
                <!-- profile section start 
          <li>
            <a href="order-history.html" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="box"></i>
              </div>
              <div class="profile-details">
                <h4>Статус заказа</h4>
                <h5>...</h5>
              </div>
            </a>
          </li>
                --


          <li>
            <a href="manage-payment.html" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="wallet-open"></i>
              </div>
              <div class="profile-details">
                <h4>Способ оплаты</h4>
                <h5>Наличными, QR код</h5>
              </div>
            </a>
          </li> -->
          <li>
            <a href="address.html" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="location"></i>
              </div>
              <div class="profile-details">
                <h4>Адрес доставки</h4>
                <h5 id="adres">......</h5>
              </div>
            </a>
          </li>

          <li>
            <a href="#" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="setting-1"></i>
              </div>
              <div class="profile-details">
                <h4>Тема</h4>
                <h5>Темная/Светлая тема</h5>
              </div>
			  
		<ul class="notification-setting notification-setting-gas">
          <li>
            <div class="notification p-0">

              <div class="switch-btn">
                <input id="dark-switch" type="checkbox" />
              </div>
            </div>
          </li> 
        </ul>
		
            </a>
          </li>

          <li>
            <a href="https://yandex.ru/maps?ll=47.64049899999999837518771528%2C42.8906059999999982323970471&mode=routes&rtext=~42.8906059999999982323970471%2C47.64049899999999837518771528&z=17" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="location"></i>
              </div>
              <div class="profile-details">
                <h4>Наш адрес</h4>
                <h5>ул. С. Стальского, 7</h5>
              </div>
            </a>
          </li>
		  
          <li >
            <a href="tel:+79280009009" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="phone"></i>
              </div>
              <div class="profile-details">
                <h4>Контакты</h4>
                <h5>+7 (928) 000-90-09</h5>
              </div>
            </a>
          </li>
		  
		  <li class="border-bottom-0">
            <a href="terms-conditions.html" class="profile-box">
              <div class="profile-img">
                <i class="iconsax icon" data-icon="info-circle"></i>
              </div>
              <div class="profile-details">
                <h4>О сервисе</h4>
                <h5>Политика конфиденциальности и Условия использования</h5>
              </div>
            </a>
          </li>
		  
        </ul>
      </div>
    </section>
    <!-- profile section start -->
	
	
	

	
	
	
	
	
	
	

    <!-- panel-space start -->
    <section class="panel-space"></section>
    <!-- panel-space end -->
	
	  <a href="https://zeta-bit.ru/site.php">
	<div class="logo_author">               <img class="logo_unactive" src="img/logo_author.png" alt="home" /> <span><br> Разработано ООО "Зетабит" </span> </div>
	</a>

    <!-- bottom navbar start -->
    <div class="navbar-menu">
      <ul>
        <li>
          <a href="index.php">
            <div class="icon">
              <img class="unactive" src="assets/images/svg/home.svg" alt="home" />
              <img class="active" src="assets/images/svg/home-fill.svg" alt="home" />
            </div>
          </a>
        </li>
        <li>
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

        <li class="active">
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
    <!-- iconsax js -->
    <script src="assets/js/iconsax.js"></script>

    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
	
	
	
	
	
		
<script>



	const address_dostavki = window.localStorage.address_dostavki;

console.log(window.localStorage.candyName); // name=user; date=10.01.2021; fullname=Ivanov

if (address_dostavki) {


setTimeout(function() { document.getElementById("adres").innerHTML = address_dostavki; }, 1000);

}

else {

document.getElementById("adres").innerHTML = "Укажите адрес доставки";

}








</script>
	
	
  </body>
</html>
