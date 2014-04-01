$(function() {
  $.ajaxSetup({
    headers: {
      'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $('body').on('click', '#add-item', function() {
    
    $.ajax({
      url: '/item',
      type: 'POST',
      dataType: 'json',
      data: { 'todo_id': $(this).data('todoId'), 'description': $('input[name="description"]').val() },
      success: function(item) { 
        $('.manage-lists').append('<li data-item-id="'+item.id+'">'+item.description+'</li>')
        $('input[name="description"]').val('');
      }
    });

    return false;
  });

});