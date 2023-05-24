jQuery(document).ready(function($) {
    $('#wp-comments-form-form').submit(function(e) {
        e.preventDefault();

        var username = $('#wp-comments-form-username').val();
        var body = $('#wp-comments-form-body').val();
        var messageContainer = $('#wp-comments-form-message');

        $.ajax({
            url: "http://127.0.0.1:8080/api/comments",
            type: 'POST',
            dataType: 'json',
            data: {
                action: 'wp_comments_form_submit',
                username: username,
                body: body
            },
            beforeSend: function() {
                messageContainer.html('Submitting comment...');
            },
            success: function(response) {
                messageContainer.html("<strong class='text-success'>Comment successfully posted.</strong>");
                $('#wp-comments-form-username').val('');
                $('#wp-comments-form-body').val('');
            },
            error: function(xhr, status, error) {
                messageContainer.html('Error: ' + xhr.responseText);
            }
        });
    });
});
