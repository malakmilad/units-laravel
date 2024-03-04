$(document).ready(function () {
    let loader = $(".overlay");
    $('.show-btn').click(function () {
        let mediaId = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/media/show/' + mediaId,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#showMediaModalBody').html(response);
                $('#showMediaModal').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
