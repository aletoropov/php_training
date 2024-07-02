jQuery(document).ready(function() {
  jQuery('form').on('submit', function (e) {
      e.preventDefault();
      let form = jQuery(this);

      jQuery.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          success: function (response) {
              console.log('success');
              console.log(response);
              jQuery('#loading').hide();
          },
          error: function (error) {
              console.log('error');
              console.log(error);
          },
          beforeSend: function () {
              console.log('before send');
              jQuery('<div id="loading">Отправка...</div>')
                  .insertBefore(form).on('ajaxStart', function () {
                      jQuery(this).show();
              });
          }
      });

      return false;
  });
});
