(function( $ ) {
    $('#show-another').on('click', function(event) {
       event.preventDefault();
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
       });
    });
 })( jQuery );