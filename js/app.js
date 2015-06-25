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

      $('#nav_mob_toggle, #curtain').click(function() {

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

      var field_name = $('#order_form').find('#name'),
          field_contacts = $('#order_form').find('#contacts'),
          field_modal_name = $('#dialog_form').find('#name'),
          field_modal_contacts = $('#dialog_form').find('#contacts');

      /*
       * Календарь
       */ 

      $( '#date_from' ).datepicker({
        minDate: new Date()
      });

      // Активируем проверку формы
      $('#date_from').change(function() {
        validator.form();
      });


      /*
       * Валидация основной формы
       */ 

      $.validator.addMethod(
        "russiaDate",
        function(value, element) {
          // put your own logic here, this is just a (crappy) example
          return value.match(/^\d\d?\.\d\d?\.\d\d\d\d$/);
        },
        "Не верный формат даты. Пример: 25.09.2015"
      );

      var validator = $('#order_form').validate({

        rules: {

          date_from: {

            required: true,
            russiaDate: true
          }
        },

        messages: {
          date_from: {

            required: 'Укажите желаемую дату отправления'
          },
        },

        submitHandler: function(form) {

          if(!field_contacts.val().length) {

            mydialog.dialog( "open" );
            return false;
          } else {

            /*
             *
             *  ТУТ ДЕЛАЕМ AJAX ОТПРАВКУ ФОРМЫ
             *
             */
            console.log('Стартуем отправку формы');
            return false;
          }
        }
      });



      /*
       * Валидация модальной формы
       */ 

      var dvalidator = $('#dialog_form').validate({

        rules: {

          contacts: {

            required: true
          }
        },

        messages: {
          contacts: {

            required: 'Укажите для связи с нами'
          },
        },

        submitHandler: function(form) {
          
          $('#dialog_form_wrapper').dialog( "close" );
          $('#order_form').submit();
        }
      });


      /*
       * Модальное окно формы
       */

      var mydialog = $( '#dialog_form_wrapper' ).dialog({
        autoOpen: false,
        width: 300,
        modal: true,
        buttons: {

          "Подобрать тур": function() {

            field_name.val( field_modal_name.val() );
            field_contacts.val( field_modal_contacts.val() );

            $('#dialog_form').submit();
          }
        },
        close: function() {

          resetForm('#dialog_form');
        }
      });


      /*
       * Модальное окно ответа
       */

      var mydialog_answer = $( '#dialog_answer_wrapper' ).dialog({
        modal: true,
        autoOpen: false,
        width: 300,
        buttons: {

          'Закрыть': function() {

            $( this ).dialog( "close" );
          }
        }
      });


      function resetForm(form_selector) {

        $(form_selector).find('input:text, input:password, input:file, select, textarea').val('');
        $(form_selector).find('input:radio, input:checkbox')
          .removeAttr('checked').removeAttr('selected');
      }
      
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