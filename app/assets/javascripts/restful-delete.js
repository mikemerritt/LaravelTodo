$(function() {
  $('body').on('click', 'a', function() {
    $delete_link = $(this);
    if ($delete_link.data('method') === 'delete') {
      if (confirm($delete_link.data('confirm'))) {
        $.ajax({
          url: $delete_link.attr('href'),
          type: 'DELETE',
          success: function() { document.location.reload(true); }
        });
      }
      return false;
    }
  });
});