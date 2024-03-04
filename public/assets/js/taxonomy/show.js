$(document).ready(function () {
    let loader = $(".overlay");
    $('.show-tax-btn').click(function () {
        let taxID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/taxonomy/show/' + taxID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#showTaxBody').html(response);
                $('#showTaxCard').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
