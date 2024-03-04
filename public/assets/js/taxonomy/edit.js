$(document).ready(function () {
    let loader = $(".overlay");
    $('.edit-tax-btn').click(function () {
        let taxID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/taxonomy/edit/' + taxID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#editTaxBody').html(response);
                $('#editTaxForm').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
