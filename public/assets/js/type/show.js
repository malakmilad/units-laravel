$(document).ready(function () {
    let loader = $(".overlay");
    $("#type_table").on('click', '.show-type-btn', function () {
        let typeId = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/type/show/' + typeId,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#showTypeBody').html(response);
                $('#showTypeCard').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    })
});
