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
         $('.entry-info').html(response[0].title.rendered+entrySource(response[0]));

        const url = qod_vars.home_url + '/' + response[0].slug + '/';

        history.pushState(null, null, url);
       });
    });

function entrySource(data){
   let entrySource='';
   if(data._qod_quote_source && data._qod_quote_source_url){
      entrySource='<span class="entry-source">&comma; <a href='+ data._qod_quote_source_url +'>'+ data._qod_quote_source +'</a></span>';
   }else if(data._qod_quote_source){
	entrySource='<span class="entry-source">&comma; ' + data._qod_quote_source + '</span>';
   }
   return entrySource;
}

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

 
