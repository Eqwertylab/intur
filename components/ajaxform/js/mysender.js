var AjaxForm = {

	initialize: function(afConfig) {
		if(!jQuery().ajaxForm) {
			document.write('<script src="'+afConfig.assetsUrl+'js/lib/jquery.form.min.js"><\/script>');
		}
		if(!jQuery().jGrowl) {
			document.write('<script src="'+afConfig.assetsUrl+'js/lib/jquery.jgrowl.min.js"><\/script>');
		}

		$(document).ready(function() {
			$.jGrowl.defaults.closerTemplate = '<div>[ '+afConfig.closeMessage+' ]</div>';
		});





		var field_name = $('#order_form').find('#name'),
        field_contacts = $('#order_form').find('#contacts'),
        field_modal_name = $('#dialog_form').find('#name'),
        field_modal_contacts = $('#dialog_form').find('#contacts');

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
          }
          else {

            $(form).ajaxSubmit({
							dataType: 'json'
							,data: {pageId: afConfig.pageId}
							,url: afConfig.actionUrl
							,beforeSerialize: function(form, options) {
								form.find(':submit').each(function() {
									if (!form.find('input[type="hidden"][name="' + $(this).attr('name') + '"]').length) {
										$(form).append(
											$('<input type="hidden">').attr({
												name: $(this).attr('name'),
												value: $(this).attr('value')
											})
										);
									}
								})
							}
							,beforeSubmit: function(fields, form) {
								if (typeof(afValidated) != 'undefined' && afValidated == false) {
									return false;
								}
								form.find('.error').html('');
								form.find('.error').removeClass('error');
								form.find('input,textarea,select,button').attr('disabled', true);
								return true;
							}
							,success: function(response, status, xhr, form) {
								form.find('input,textarea,select,button').attr('disabled', false);
								response.form=form;
								$(document).trigger('af_complete', response);

								$('#dialog_answer_text').text(response.message);

								if (!response.success) {
									// AjaxForm.Message.error(response.message);

									mydialog_answer.dialog( "open" );
									if (response.data) {
										var key, value;
										for (key in response.data) {
											if (response.data.hasOwnProperty(key)) {
												value = response.data[key];
												form.find('.error_' + key).html(value).addClass('error');
												form.find('[name="' + key + '"]').addClass('error');
											}
										}
									}
								}
								else {
									// AjaxForm.Message.success(response.message);

									mydialog_answer.dialog( "open" );
									form.find('.error').removeClass('error');
									form[0].reset();
									resetForm(form[0]);
								}
							}
						});
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

        $(form_selector).find('input:text, input#contacts').val('');
      }










		// $(document).on('submit', afConfig.formSelector, function(e) {
		// 	$(this).ajaxSubmit({
		// 		dataType: 'json'
		// 		,data: {pageId: afConfig.pageId}
		// 		,url: afConfig.actionUrl
		// 		,beforeSerialize: function(form, options) {
		// 			form.find(':submit').each(function() {
		// 				if (!form.find('input[type="hidden"][name="' + $(this).attr('name') + '"]').length) {
		// 					$(form).append(
		// 						$('<input type="hidden">').attr({
		// 							name: $(this).attr('name'),
		// 							value: $(this).attr('value')
		// 						})
		// 					);
		// 				}
		// 			})
		// 		}
		// 		,beforeSubmit: function(fields, form) {
		// 			if (typeof(afValidated) != 'undefined' && afValidated == false) {
		// 				return false;
		// 			}
		// 			form.find('.error').html('');
		// 			form.find('.error').removeClass('error');
		// 			form.find('input,textarea,select,button').attr('disabled', true);
		// 			return true;
		// 		}
		// 		,success: function(response, status, xhr, form) {
		// 			form.find('input,textarea,select,button').attr('disabled', false);
		// 			response.form=form;
		// 			$(document).trigger('af_complete', response);
		// 			if (!response.success) {
		// 				AjaxForm.Message.error(response.message);
		// 				if (response.data) {
		// 					var key, value;
		// 					for (key in response.data) {
		// 						if (response.data.hasOwnProperty(key)) {
		// 							value = response.data[key];
		// 							form.find('.error_' + key).html(value).addClass('error');
		// 							form.find('[name="' + key + '"]').addClass('error');
		// 						}
		// 					}
		// 				}
		// 			}
		// 			else {
		// 				AjaxForm.Message.success(response.message);
		// 				form.find('.error').removeClass('error');
		// 				form[0].reset();
		// 			}
		// 		}
		// 	});
		// 	e.preventDefault();
		// 	return false;
		// });

		$(document).on('reset', afConfig.formSelector, function(e) {
			$(this).find('.error').html('');
			AjaxForm.Message.close();
		});
	}

};


AjaxForm.Message = {
	success: function(message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-success', sticky: sticky});
		}
	}
	,error: function(message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-error', sticky: sticky});
		}
	}
	,info: function(message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-info', sticky: sticky});
		}
	}
	,close: function() {
		$.jGrowl('close');
	}
};
