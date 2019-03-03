(function( $ ) {

   let lastPage = ''; 

   $(window).on('popstate', function(){
   window.location.replace(lastPage);
   });

    $('#show-another').on('click', function(event) {
       event.preventDefault();

       lastPage = document.URL;

       $.ajax({
          method: 'get',
          url: qod_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1' ,
          data: {
             comment_status: 'closed'
          },
          beforeSend: function(xhr) {
             xhr.setRequestHeader( 'X-WP-Nonce', qod_vars.wpapi_nonce );
          }
       }).done( function(response) {
        $('.entry-content').html(response[0].content.rendered);
        $('.author-title').html(response[0].title.rendered);
        $('.entry-source').html(response[0]._qod_quote_source.rendered);

        const url = qod_vars.home_url + '/' + response[0].slug + '/';

        history.pushState(null, null, url);
       });
    });

    $('#submit-form').on('submit', function(event) {
      event.preventDefault();
      const quotes = {
         title: $('#author-quote').val(),
         content: $('#your-quote').val(),
         _qod_quote_source: $('#find-quote').val(),
         _qod_quote_source_url: $('#quote-source').val(),
      };
      
      $.ajax({
         method: 'post',
         url: qod_vars.rest_url + 'wp/v2/posts/',
         data: quotes,
         beforeSend: function(xhr) {
            xhr.setRequestHeader( 'X-WP-Nonce', qod_vars.wpapi_nonce );
         }
      }).done( function() {
         $('#submit-area').html(qod_vars.worked)
      }).fail( function() {
         $('#submit-area').html(qod_vars.failed)
      });
   });
 })( jQuery );

 
