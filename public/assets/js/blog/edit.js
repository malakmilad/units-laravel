$(document).ready(function () {
    let loader = $(".overlay");
    $("#blog_table").on('click', '.edit-blog-btn', function () {
        let blogID = $(this).data('id');
        loader.show();
        $.ajax({
            url: '/blog/edit/' + blogID,
            type: 'GET',
            success: function (response) {
                loader.hide();
                $('#editBlogBody').html(response);
                $('#editBlogForm').modal('show');
            },
            error: function (xhr, status, error) {
                loader.hide();
                console.error(xhr.responseText);
            }
        });
    });
});
