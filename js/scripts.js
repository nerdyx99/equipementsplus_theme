(function ($, Drupal) {

  Drupal.behaviors.STARTER = {
    attach: function(context, settings) {
      

    	$('#main-menu').append($('.language-switcher-locale-url li'));
    	$('.block-locale-language').remove();


    	$('.l-featuredProducts section').hover(function(){
    		$(this).find('i').css('top','3px');
    		//$(this).find('i').css('margin-bottom','-3px');

    	},function(){
    		$(this).find('i').css('top','0px');
    		//$(this).find('i').css('margin-bottom','0px');
    	});


        //var i = 1;
        $('.view-new-products .views-row, .view-new-products-refrigeration-en .views-row, .view-new-products-refrigeration-fr .views-row, .view-new-products-preparation-en .views-row, .view-new-products-preparation-fr .views-row, .view-products-cooking .views-row, .view-new-products-cooking-fr .views-row, .view-new-products-others-en .views-row, .view-new-products-others-fr .views-row').each(function(i){
            i = i+1;
            $(this).find('a').attr('data-reveal-id','productsModal-'+i);
        });

        $('.view-used-products .views-row, .view-used-products-refrigeration-en .views-row, .view-used-products-refrigeration-fr .views-row, .view-used-products-preparation-en .views-row, .view-used-products-preparation-fr .views-row, .view-products-cooking .views-row, .view-used-products-cooking-fr .views-row, .view-used-products-others-en .views-row, .view-used-products-others-fr .views-row').each(function(i){
            i = i+1;
            $(this).find('a').attr('data-reveal-id','productsModal-'+i);
        });

        $('.l-recently-added .views-row').each(function(i){
            i = i+1;
            $(this).find('a').attr('data-reveal-id','productsModal-'+i);
        });

        $('.shopping-cart').find('a').prepend('<i class="fa fa-shopping-cart">&nbsp;</i>');



        $('.front .views-field-type').each(function(){
            var text = $(this).find('span').text();

            var link = text.replace(' ','-');

            $(this).find('span').wrap('<a href="'+ link +'"></a>');
        });

        if($('body').hasClass("lang-fr")){
            // $('.form-item-name').text('Votre nom :');
            // $('.form-item-mail').text('Votre courriel :');
            // $('.form-item-subject').text('Sujet :');
            // $('.form-item-message').text('Message :');

            // $('.form-item-name label').replaceWith('<label>Votre nom <span class="form-required" title="This field is required.">*</span></label>');
            // $('.form-item-mail label').replaceWith('<label>Votre courriel <span class="form-required" title="This field is required.">*</span></label>');
            // $('.form-item-subject label').replaceWith('<label>Sujet <span class="form-required" title="This field is required.">*</span></label>');
            // $('.form-item-message label').replaceWith('<label>Message <span class="form-required" title="This field is required.">*</span></label>');

            // // $('.form-item-name').html($('.form-item-name').html().replace('Your name','Votre nom'));
            // // $('.form-item-mail').html($('.form-item-mail').html().replace('Your e-mail address','Votre Courriel'));
            // // $('.form-item-subject').html($('.form-item-subject').html().replace('Subject','Sujet'));
            // // $('.form-item-message').html($('.form-item-message').html().replace('Message','Message'));

            // $('.form-item-copy label').replaceWith('Envoyez-vous une copie.');

            // if($('button.form-submit').text() == 'Send message'){
            //     $('button.form-submit').html($('button.form-submit').html().replace('Send message','Soumettre'));
            // }
            // if($('button.form-submit').text() == 'Submit'){
            //     $('button.form-submit').html($('button.form-submit').html().replace('Submit','Soumettre'));
            // }

            // $('.form-managed-file .form-submit').val('Télécharger');

        }


    }
  };

})(jQuery, Drupal);
