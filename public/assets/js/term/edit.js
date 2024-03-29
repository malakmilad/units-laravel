$(document).ready(function () {
    let loader = $(".overlay");
    $('#term_table').on('click', '.edit-term-btn', function () {
        let termID = $(this).data('id');
        let taxID = $(this).data('tax');
        loader.show();
        $.ajax({
            url: '/term/edit/' + termID + '/' + taxID,
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
