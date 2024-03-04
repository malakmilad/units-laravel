$(document).ready(function () {
    let loader = $(".overlay");
    $('.edit-type-btn').click(function () {
        let typeId = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/type/edit/' + typeId,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#editTypeBody').html(response);
                $('#editTypeForm').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
