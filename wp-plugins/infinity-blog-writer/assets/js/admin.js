jQuery(document).ready(function($) {
    // Tab switching
    $('.ibw-tab').on('click', function(e) {
        e.preventDefault();
        var tab = $(this).data('tab');
        $('.ibw-tab').removeClass('active');
        $(this).addClass('active');
        $('.ibw-tab-content').hide();
        $('#tab-' + tab).show();
    });

    // Form submission
    $('#postForm').on('submit', function(e) {
        e.preventDefault();

        var postId = $('#post_id').val();
        var content = '';

        if (typeof tinyMCE !== 'undefined' && tinyMCE.get('post_content')) {
            content = tinyMCE.get('post_content').getContent();
        } else {
            content = $('#post_content').val();
        }

        $.ajax({
            url: ibw_vars.ajax_url,
            type: 'POST',
            data: {
                action: 'ibw_save_post',
                nonce: ibw_vars.nonce,
                post_id: postId,
                title: $('#post_title').val(),
                content: content,
                status: $('#post_status').val(),
                tags: $('#post_tags').val()
            },
            success: function(res) {
                if (res.success) {
                    alert(res.data.message);
                    location.reload();
                } else {
                    alert('Error: ' + res.data);
                }
            },
            error: function() {
                alert('Something went wrong. Please try again.');
            }
        });
    });
});

function editPost(id) {
    jQuery.ajax({
        url: ibw_vars.ajax_url,
        type: 'POST',
        data: {
            action: 'ibw_get_posts',
            nonce: ibw_vars.nonce
        },
        success: function(res) {
            if (res.success) {
                var post = res.data.find(function(p) { return p.id === id; });
                if (post) {
                    jQuery('#post_id').val(post.id);
                    jQuery('#post_title').val(post.title);
                    jQuery('#post_tags').val(post.tags.join(', '));
                    jQuery('#form-title').text('Edit Post');
                    jQuery('#submit-text').text('Update Post');
                    jQuery('.ibw-tab[data-tab="create"]').click();

                    if (typeof tinyMCE !== 'undefined' && tinyMCE.get('post_content')) {
                        tinyMCE.get('post_content').setContent(post.content);
                    }
                }
            }
        }
    });
}

function deletePost(id) {
    if (confirm('Are you sure you want to delete this post?')) {
        jQuery.ajax({
            url: ibw_vars.ajax_url,
            type: 'POST',
            data: {
                action: 'ibw_delete_post',
                nonce: ibw_vars.nonce,
                post_id: id
            },
            success: function(res) {
                if (res.success) {
                    location.reload();
                } else {
                    alert('Failed to delete post');
                }
            }
        });
    }
}

function resetForm() {
    jQuery('#post_id').val('');
    jQuery('#post_title').val('');
    jQuery('#post_tags').val('');
    jQuery('#form-title').text('Create New Post');
    jQuery('#submit-text').text('Publish Post');
    if (typeof tinyMCE !== 'undefined' && tinyMCE.get('post_content')) {
        tinyMCE.get('post_content').setContent('');
    }
}

function showApiInfo() {
    jQuery('#apiModal').show();
}

function closeApiInfo() {
    jQuery('#apiModal').hide();
}

function copyApiUrl() {
    var url = jQuery('#api-url').text();
    navigator.clipboard.writeText(url).then(function() {
        alert('API URL copied to clipboard!');
    });
}

// Close modal on outside click
jQuery(document).on('click', '#apiModal', function(e) {
    if (jQuery(e.target).is('#apiModal')) {
        closeApiInfo();
    }
});