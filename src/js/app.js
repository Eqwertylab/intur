App = {};
App = {



  In: function($) {

    $(function() {

      App.Fn.sidebar_mob();
      App.Fn.slider();
      App.Fn.order_form();
      App.Fn.yandexmap();
      App.Fn.category_mob();
    })
  },


  
  Fn: {
    
    sidebar_mob: function() {

      $('#nav_mob_toggle, #curtain, .menu_mob a').click(function() {

        $('html').toggleClass('open');
      });
    },

    category_mob: function() {
      $('#category_mob').change(function() {
        location.href = $(this).val();
      });
    },

    slider: function() {

      var SLIDER_DELAY = 4000, 
      timer, 
      sel_cont = $('#select_country').val();

      startSlider(sel_cont);

      $('#select_country').change(function(){
        startSlider($('#select_country').val());
      });

      $('#direction_nav li').click(function(){
        var direction = $(this).data('direction');
        workSlider(direction);
      });

      function startSlider(sel_cont, direction) {

        direction = direction || 'next';

        var bg_slide;

        var $active_group = $('.shgroup[data-country="'+sel_cont+'"]');

        var dev_width = $(window).width();

        if (dev_width < 768) {
          bg_slide = $active_group.data('image-mob');
        } else if (dev_width >= 768) {
          bg_slide = $active_group.data('image');
        }

        $('#slider_hot').css('background-image', 'url('+bg_slide+')');

        $('.shgroup')
          .css('display', 'none')
          .removeClass('__active')
          .find('.shgroup_item')
          .removeClass('__active')
          .css({ 'display' : 'none', 'opacity' : '0' });

        switch(direction) {

          case 'next':
            $active_group
              .addClass('__active')
              .css('display', 'block')
              .find('.shgroup_item:first')
              .addClass('__active')
              .css('display', 'block')
              .animate({ 'opacity' : 1 }, 500);
            break;

          case 'prev':
            $active_group
              .addClass('__active')
              .css('display', 'block')
              .find('.shgroup_item:last')
              .addClass('__active')
              .css('display', 'block')
              .animate({ 'opacity' : 1 }, 500);
            break;
        }
        
        $('#select_country').val(sel_cont);

        clearTimeout(timer);
        timer = setTimeout(workSlider, SLIDER_DELAY);
      }

      function workSlider(direction) {

        direction = direction || 'next';

        switch(direction) {

          case 'next':

            $next_slide = $('.shgroup_item.__active')
              .removeClass('__active')
              .css({ 'display' : 'none', 'opacity' : '0' })
              .next();

            if( $next_slide.length ) {

              $next_slide
                .addClass('__active')
                .css('display', 'block')
                .animate({ 'opacity' : 1 }, 500);
            } else {

              var $next_group = $('.shgroup.__active').next();

              if ($next_group.length) {

                startSlider($next_group.data('country'));
              } else {

                startSlider($('.shgroup:first').data('country'));
              }
            
            }

            break;

          case 'prev':

            $prev_slide = $('.shgroup_item.__active')
              .removeClass('__active')
              .css({ 'display' : 'none', 'opacity' : '0' })
              .prev();

            if($prev_slide.length) {

              $prev_slide
                .addClass('__active')
                .css('display', 'block')
                .animate({ 'opacity' : 1 }, 500);
            } else {

              var $prev_group = $('.shgroup.__active').prev();

              if ($prev_group.length) {

                startSlider($prev_group.data('country'), direction);
              } else {

                startSlider($('.shgroup:last').data('country'), direction);
              }
            }

            break;
        }        

        clearTimeout(timer);
        timer = setTimeout(workSlider, SLIDER_DELAY);
      }
    },

    order_form: function() {

      /*
       * Календарь
       */ 

      $( '#date_from' ).datepicker({
        minDate: new Date()
      });
    },

    yandexmap:function() {

      if(document.getElementById('yandexmap')) {
        ymaps.ready(init);
      }

      var thisMap,
          thisPlacemark;

      function init() {

        thisMap = new ymaps.Map("yandexmap", {
          center: [51.76223529, 55.11914350], 
          zoom: 16,
          controls: {}
        });

        thisPlacemark = new ymaps.Placemark([51.76223529, 55.11914350], {
          hintContent: 'Интур',
          balloonContent: 'Интур'
        });

        thisMap.geoObjects.add(thisPlacemark);
      }
    }
  }
}

App.In(jQuery);