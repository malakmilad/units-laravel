$(document).ready(function () {
    let loader = $(".overlay");
    $('.show-blog-btn').click(function () {
        let blogID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/blog/show/' + blogID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#showBlogBody').html(response);
                $('#showBlogCard').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
