require('./bootstrap');
$("#tags").on('itemAdded', function(event) {
    var id_tags = $('#id_tags').val();
    var tag = event.item;
    $.ajax({
        type: 'POST',
        url: "addTag",
        data: {tag, "_token": $('#token').val(), "id_tags": id_tags},
        success: function(data){
            if(data == true)
                $('#status').text('');
            $('#status').html('<span class="badge badge-success">Тег добавлен!</span>');
        }
    });

});
$("#tags").on('itemRemoved', function(event) {
    var tag = event.item;
    $.ajax({
        type: 'POST',
        url: "removeTag",
        data: {tag, "_token": $('#token').val()},
        success: function(data){
            if(data == true)
                $('#status').text('');
            $('#status').html('<span class="badge badge-danger">Тег удален!</span>');
        }
    });

});
