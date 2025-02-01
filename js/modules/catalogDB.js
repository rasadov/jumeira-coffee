'use strict';

// Модуль каталога для работы с БД
var catalogDB = (function($) {

    var ui = {
        $form: $('#filters-form'),
        $prices: $('#prices'),
        $pricesLabel: $('#prices-label'),
        $minPrice: $('#min-price'),
        $maxPrice: $('#max-price'),
        $categoryBtn: $('.js-category'),
        $brands: $('#brands'),
        $sort: $('#sort'),
        $goods: $('#goods'),
        $good: $('#good'),
        $goodsTemplate: $('#goods-template')
    };
    var selectedCategory = 16,
        goodsTemplate = _.template(ui.$goodsTemplate.html())


    // Инициализация модуля
    function init() {
        _initPrices({
            minPrice: 0,
            maxPrice: 1000000
        });
        _bindHandlers();
        _getData({needsData: 'brands,prices'});
        _render();
        _cat_render();
    }





    // Рендерим категорий
	
    function _cat_render() {
		

        var template = _.template($('#catyg').html()),
            $caty = $('#caty');

        $.getJSON('scripts/category.php?', function(data) {
            $caty.html(template({caty: data.data.goods}));
        });
		
    }




    // Рендерим каталог
    function _render() {
		
		var strGET = window.location.search.replace( '?', '');	// Строка получает параметр из GET строки, будет строка "param=val&data=ololo"


        var template = _.template($('#catalog').html()),
            $goo = $('#goo');

        $.getJSON('scripts/catalog.php?'+strGET, function(data) {
            $goo.html(template({goo: data.data.goods}));
        });
		
    }








    // Навешиваем события
    function _bindHandlers() {
        ui.$categoryBtn.on('click', _changeCategory);
        ui.$brands.on('change', 'input', _getData);
        ui.$sort.on('change', _getData);
        ui.$categoryBtn.on('click', _render);
		
		
    }

    // Сброс фильтров, только брендов и цен
    function _resetFilters() {
        ui.$brands.find('input').removeAttr('checked');
        ui.$minPrice.val(0);
        ui.$maxPrice.val(1000000);
    }

    // Смена категории
    function _changeCategory() {
        var $this = $(this);
        ui.$categoryBtn.removeClass('active');
        $this.addClass('active');
        selectedCategory = $this.attr('data-category');
		
        _resetFilters();
        _getData({needsData: 'brands,prices'});
    }

    // Изменение диапазона цен, реакция на событие слайдера
    function _onSlidePrices(event, elem) {
        _updatePricesUI({
            minPrice: elem.values[0],
            maxPrice: elem.values[1]
        });
    }

    // Обновление цен
    function _updatePricesUI(options) {
        ui.$pricesLabel.html(options.minPrice + ' - ' + options.maxPrice + ' руб.');
        ui.$minPrice.val(options.minPrice);
        ui.$maxPrice.val(options.maxPrice);
    }

    // Инициализация цен с помощью jqueryUI
    function _initPrices(options) {
        ui.$prices.slider({
            range: true,
            min: options.minPrice,
            max: options.maxPrice,
            values: [options.minPrice, options.maxPrice],
            slide: _onSlidePrices,
            change: _getData
        });
        _updatePricesUI(options);
    }

    // Обновление слайдера с отключением события change
    function _updatePrices(options) {
        ui.$prices.slider({
            change: null
        }).slider({
            min: options.minPrice,
            max: options.maxPrice,
            values: [options.minPrice, options.maxPrice]
        }).slider({
            change: _getData
        });
        _updatePricesUI(options);
    }

    // Ошибка получения данных
    function _catalogError(responce) {
        console.error('responce', responce);
        // Далее обработка ошибки, зависит от фантазии
    }

    // Успешное получение данных
    function _catalogSuccess(responce) {
        ui.$goods.html(goodsTemplate({goods: responce.data.goods}));
        if (responce.data.brands) {
            ui.$brands.html(brandsTemplate({brands: responce.data.brands}));
        }
        if (responce.data.prices) {
            _updatePrices({
                minPrice: +responce.data.prices.min_price,
                maxPrice: +responce.data.prices.max_price
            });
        }
    }



    // Получение данных
    function _getData(options) {
        var catalogData = 'category=' + selectedCategory + '&' + ui.$form.serialize();
        if (options && options.needsData) {
            catalogData += '&needs_data=' + options.needsData;
        }
        $.ajax({
            url: 'scripts/catalog.php?category=1',
            data: catalogData,
            type: 'GET',
            cache: false,
            dataType: 'json',
            error: _catalogError,
            success: function(responce) {
                if (responce.code === 'success') {
                    _catalogSuccess(responce);
                } else {
                    _catalogError(responce);
                }
            }
        });
    }

    // Экспортируем наружу
    return {
        init: init
    }
    
})(jQuery);