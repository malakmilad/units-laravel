$(document).ready(function () {
    let loader = $(".overlay");
    $("#term_table").on('click', '.show-term-btn', function () {
        let termID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/term/show/' + termID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#showTermBody').html(response);
                $('#showTermCard').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
