jQuery(document).ready(function() {
  jQuery('form').on('submit', function (e) {
      e.preventDefault();
      let form = $(this);

      jQuery.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          success: function (response) {
              console.log('success');
              console.log(response);
          },
          error: function (error) {
              console.log('error');
              console.log(error);
          },
          beforeSend: function () {
              console.log('before send');
          }
      });

      return false;
  });
});
