$(document).ready(function () {
    let loader = $(".overlay");
    $('.edit-term-btn').click(function () {
        let termID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/term/edit/' + termID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#editTermBody').html(response);
                $('#editTermForm').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});