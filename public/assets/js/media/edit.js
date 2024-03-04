$(document).ready(function () {
    let loader = $(".overlay");
    $('.edit-btn').click(function () {
        let mediaId = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/media/edit/' + mediaId,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#editMediaModalBody').html(response);
                $('#editMediaModal').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
