<div class="ibw-wrap">
    <!-- Header -->
    <div class="ibw-header">
        <div class="ibw-logo">
            <i class="fas fa-blog"></i>
            <span>Infinity Blog Writer</span>
        </div>
        <div class="ibw-header-actions">
            <a href="#" class="ibw-btn ibw-btn-secondary" onclick="showApiInfo()">
                <i class="fas fa-code"></i> API Info
            </a>
        </div>
    </div>

    <!-- Stats -->
    <div class="ibw-stats">
        <?php
        $published = count(get_posts(array('post_type' => 'post', 'post_status' => 'publish', 'numberposts' => -1)));
        $drafts = count(get_posts(array('post_type' => 'post', 'post_status' => 'draft', 'numberposts' => -1)));
        $total = $published + $drafts;
        ?>
        <div class="ibw-stat-card">
            <div class="ibw-stat-icon ibw-stat-total">
                <i class="fas fa-blog"></i>
            </div>
            <div class="ibw-stat-info">
                <h3><?php echo $total; ?></h3>
                <p>Total Posts</p>
            </div>
        </div>
        <div class="ibw-stat-card">
            <div class="ibw-stat-icon ibw-stat-published">
                <i class="fas fa-check-circle"></i>
            </div>
            <div class="ibw-stat-info">
                <h3><?php echo $published; ?></h3>
                <p>Published</p>
            </div>
        </div>
        <div class="ibw-stat-card">
            <div class="ibw-stat-icon ibw-stat-draft">
                <i class="fas fa-edit"></i>
            </div>
            <div class="ibw-stat-info">
                <h3><?php echo $drafts; ?></h3>
                <p>Drafts</p>
            </div>
        </div>
        <div class="ibw-stat-card">
            <div class="ibw-stat-icon ibw-stat-ai">
                <i class="fas fa-brain"></i>
            </div>
            <div class="ibw-stat-info">
                <h3>Ready</h3>
                <p>AI Integration</p>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="ibw-tabs">
        <button class="ibw-tab active" data-tab="posts">All Posts</button>
        <button class="ibw-tab" data-tab="create">Create Post</button>
        <button class="ibw-tab" data-tab="local">Local Writer</button>
        <button class="ibw-tab" data-tab="settings">Settings</button>
    </div>

    <!-- All Posts Tab -->
    <div class="ibw-tab-content" id="tab-posts">
        <div class="ibw-card">
            <div class="ibw-card-header">
                <h2>All Blog Posts</h2>
            </div>
            <?php if (empty($posts)): ?>
                <p class="ibw-empty"><i class="fas fa-inbox"></i> No posts yet. Create your first post!</p>
            <?php else: ?>
                <table class="ibw-table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post): ?>
                        <tr data-id="<?php echo $post->ID; ?>">
                            <td class="ibw-post-title"><?php echo esc_html($post->post_title); ?></td>
                            <td><span class="ibw-category"><?php $cat = get_the_category($post->ID); echo !empty($cat) ? esc_html($cat[0]->name) : 'Uncategorized'; ?></span></td>
                            <td><span class="ibw-status ibw-status-<?php echo $post->post_status; ?>"><?php echo ucfirst($post->post_status); ?></span></td>
                            <td><?php echo date('M d, Y', strtotime($post->post_date)); ?></td>
                            <td>
                                <div class="ibw-actions">
                                    <button class="ibw-btn-icon ibw-btn-edit" onclick="editPost(<?php echo $post->ID; ?>)" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="ibw-btn-icon ibw-btn-delete" onclick="deletePost(<?php echo $post->ID; ?>)" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>

    <!-- Create Post Tab -->
    <div class="ibw-tab-content" id="tab-create" style="display: none;">
        <div class="ibw-card">
            <div class="ibw-card-header">
                <h2 id="form-title">Create New Post</h2>
            </div>
            <form id="postForm">
                <input type="hidden" id="post_id" value="">
                <div class="ibw-form-grid">
                    <div class="ibw-form-group">
                        <label><i class="fas fa-heading"></i> Post Title *</label>
                        <input type="text" id="post_title" class="ibw-input" placeholder="Enter your blog title..." required>
                    </div>
                    <div class="ibw-form-group">
                        <label><i class="fas fa-folder"></i> Category</label>
                        <select id="post_category" class="ibw-select">
                            <option value="">Select Category</option>
                            <?php foreach ($categories as $cat): ?>
                            <option value="<?php echo $cat->term_id; ?>"><?php echo esc_html($cat->name); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="ibw-form-group ibw-full-width">
                        <label><i class="fas fa-align-left"></i> Content *</label>
                        <textarea id="post_content" class="ibw-textarea" rows="15" placeholder="Write your blog content here..." required></textarea>
                    </div>
                    <div class="ibw-form-group ibw-full-width">
                        <label><i class="fas fa-tags"></i> Tags (comma separated)</label>
                        <input type="text" id="post_tags" class="ibw-input" placeholder="web, ai, technology">
                    </div>
                    <div class="ibw-form-group">
                        <label><i class="fas fa-toggle-on"></i> Status</label>
                        <select id="post_status" class="ibw-select">
                            <option value="draft">Save as Draft</option>
                            <option value="publish">Publish Now</option>
                        </select>
                    </div>
                    <div class="ibw-form-group">
                        <label>&nbsp;</label>
                        <div class="ibw-ai-ready">
                            <label style="display: flex; align-items: center; gap: 10px; cursor: pointer;">
                                <input type="checkbox" checked style="width: 18px; height: 18px;">
                                <span style="font-weight: 500;">AI Ready</span>
                            </label>
                            <p style="font-size: 12px; color: #64748b; margin-top: 8px;">
                                Post will have AI-ready metadata for future integration.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ibw-form-actions">
                    <button type="submit" class="ibw-btn ibw-btn-primary">
                        <i class="fas fa-paper-plane"></i> <span id="submit-text">Publish Post</span>
                    </button>
                    <button type="button" class="ibw-btn ibw-btn-secondary" onclick="resetForm()">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Local Writer Tab -->
    <div class="ibw-tab-content" id="tab-local" style="display: none;">
        <div class="ibw-card">
            <div class="ibw-card-header">
                <h2><i class="fas fa-laptop-house"></i> Local Writer Setup</h2>
            </div>
            <p style="margin-bottom: 20px; color: #64748b;">
                Use this URL to connect your local blog writer tool:
            </p>
            <div class="ibw-api-box">
                <code id="api-url"><?php echo get_rest_url(null, 'ibw/v1/posts'); ?></code>
                <button onclick="copyApiUrl()" class="ibw-btn ibw-btn-sm"><i class="fas fa-copy"></i> Copy</button>
            </div>

            <h3 style="margin: 30px 0 15px;">Example: Post from any application</h3>
            <pre class="ibw-code">fetch('<?php echo get_rest_url(null, 'ibw/v1/posts'); ?>', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        title: 'My New Post',
        content: 'Post content here...',
        category: 1,
        tags: ['web', 'ai'],
        status: 'draft'
    })
})</pre>
        </div>
    </div>

    <!-- Settings Tab -->
    <div class="ibw-tab-content" id="tab-settings" style="display: none;">
        <div class="ibw-card">
            <div class="ibw-card-header">
                <h2>Plugin Settings</h2>
            </div>
            <div class="ibw-form-group">
                <label><i class="fas fa-globe"></i> API Endpoint</label>
                <input type="text" class="ibw-input" value="<?php echo get_rest_url(null, 'ibw/v1/posts'); ?>" readonly>
            </div>

            <!-- API Key Section -->
            <div class="ibw-form-group">
                <label><i class="fas fa-key"></i> API Key</label>
                <div style="display: flex; gap: 10px; align-items: center;">
                    <input type="text" class="ibw-input" id="apiKeyDisplay" value="<?php echo $api_key_display; ?>" readonly style="flex: 1;">
                    <button type="button" class="ibw-btn ibw-btn-primary" onclick="generateApiKey()" id="generateApiBtn">
                        <i class="fas fa-plus"></i> Generate
                    </button>
                    <button type="button" class="ibw-btn ibw-btn-secondary" onclick="copyApiKey()" id="copyApiBtn" style="display: <?php echo $api_key ? 'inline-flex' : 'none'; ?>;">
                        <i class="fas fa-copy"></i> Copy
                    </button>
                </div>
                <p style="font-size: 12px; color: #64748b; margin-top: 8px;">
                    Use this API key to authenticate API requests. Keep it secret!
                </p>
            </div>

            <!-- API Usage -->
            <div class="ibw-form-group" id="apiUsageSection" style="display: <?php echo $api_key ? 'block' : 'none'; ?>;">
                <label><i class="fas fa-code"></i> How to Use API</label>
                <pre class="ibw-code" style="margin-top: 10px;">
// Add post from external app
fetch('<?php echo get_rest_url(null, 'ibw/v1/posts'); ?>?api_key=<?php echo $api_key; ?>', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
        title: 'My Post Title',
        content: 'Post content here...',
        status: 'draft'
    })
})</pre>
            </div>

            <div class="ibw-form-group">
                <label><i class="fas fa-robot"></i> AI Integration Status</label>
                <p style="color: #10b981; font-weight: 500;"><i class="fas fa-check-circle"></i> Ready for AI integration</p>
                <p style="font-size: 13px; color: #64748b; margin-top: 5px;">
                    AI-ready metadata is automatically added to all posts. Connect ChatGPT/Claude for auto-processing.
                </p>
            </div>
        </div>
    </div>

    <!-- API Info Modal -->
    <div id="apiModal" class="ibw-modal" style="display: none;">
        <div class="ibw-modal-content">
            <span class="ibw-modal-close" onclick="closeApiInfo()">&times;</span>
            <h2>REST API Information</h2>
            <p>Use these endpoints to post from external applications:</p>

            <h3>GET All Posts</h3>
            <code><?php echo get_rest_url(null, 'ibw/v1/posts'); ?></code>

            <h3>POST Create Post</h3>
            <code><?php echo get_rest_url(null, 'ibw/v1/posts'); ?></code>

            <h3>PUT Update Post</h3>
            <code><?php echo get_rest_url(null, 'ibw/v1/posts/{id}'); ?></code>

            <h3>DELETE Post</h3>
            <code><?php echo get_rest_url(null, 'ibw/v1/posts/{id}'); ?></code>

            <h3>Request Body (POST/PUT)</h3>
            <pre class="ibw-code">{
    "title": "Post Title",
    "content": "Post content...",
    "excerpt": "Short description",
    "category": 1,
    "tags": ["tag1", "tag2"],
    "status": "draft"
}</pre>
        </div>
    </div>
</div>

<style>
.ibw-wrap { font-family: 'Poppins', -apple-system, BlinkMacSystemFont, sans-serif; padding: 20px; background: #f5f7fb; min-height: 100vh; }
.ibw-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: linear-gradient(135deg, #062B6F, #0B3D91); padding: 20px 25px; border-radius: 16px; }
.ibw-logo { display: flex; align-items: center; gap: 12px; font-size: 22px; font-weight: 700; color: #fff; }
.ibw-logo i { font-size: 26px; color: #3B82F6; }
.ibw-header-actions { display: flex; gap: 10px; }

.ibw-btn { display: inline-flex; align-items: center; gap: 8px; padding: 10px 18px; border: none; border-radius: 8px; font-family: inherit; font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s; text-decoration: none; }
.ibw-btn-primary { background: linear-gradient(135deg, #2563EB, #062B6F); color: #fff; }
.ibw-btn-primary:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(37,99,235,0.4); }
.ibw-btn-secondary { background: rgba(255,255,255,0.2); color: #fff; border: 2px solid rgba(255,255,255,0.3); }
.ibw-btn-secondary:hover { background: rgba(255,255,255,0.3); }
.ibw-btn-sm { padding: 8px 14px; font-size: 13px; }

.ibw-stats { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px; }
.ibw-stat-card { background: #fff; padding: 20px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); display: flex; align-items: center; gap: 15px; }
.ibw-stat-icon { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 20px; }
.ibw-stat-total { background: rgba(37,99,235,0.1); color: #2563EB; }
.ibw-stat-published { background: rgba(16,185,129,0.1); color: #10B981; }
.ibw-stat-draft { background: rgba(245,158,11,0.1); color: #F59E0B; }
.ibw-stat-ai { background: rgba(139,92,246,0.1); color: #8B5CF6; }
.ibw-stat-info h3 { font-size: 26px; font-weight: 700; color: #062B6F; margin: 0; }
.ibw-stat-info p { color: #64748B; font-size: 13px; margin: 4px 0 0; }

.ibw-tabs { display: flex; gap: 5px; margin-bottom: 25px; background: #fff; padding: 6px; border-radius: 10px; width: fit-content; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
.ibw-tab { padding: 12px 24px; border: none; background: transparent; font-family: inherit; font-size: 14px; font-weight: 500; color: #64748B; cursor: pointer; border-radius: 8px; transition: all 0.3s; }
.ibw-tab:hover { color: #062B6F; }
.ibw-tab.active { background: linear-gradient(135deg, #2563EB, #062B6F); color: #fff; box-shadow: 0 4px 12px rgba(37,99,235,0.3); }

.ibw-card { background: #fff; border-radius: 16px; box-shadow: 0 4px 12px rgba(0,0,0,0.06); padding: 25px; margin-bottom: 25px; }
.ibw-card-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 2px solid #E5EAF3; }
.ibw-card-header h2 { font-size: 18px; font-weight: 600; color: #062B6F; margin: 0; }

.ibw-table { width: 100%; border-collapse: collapse; }
.ibw-table th, .ibw-table td { padding: 14px; text-align: left; border-bottom: 1px solid #E5EAF3; }
.ibw-table th { font-weight: 600; color: #64748B; font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; }
.ibw-table tr:hover { background: #f5f7fb; }
.ibw-post-title { font-weight: 600; color: #062B6F; }
.ibw-category { display: inline-block; padding: 4px 12px; background: #f5f7fb; border-radius: 15px; font-size: 12px; color: #64748B; }
.ibw-status { display: inline-flex; padding: 5px 12px; border-radius: 15px; font-size: 12px; font-weight: 600; }
.ibw-status-publish { background: rgba(16,185,129,0.1); color: #10B981; }
.ibw-status-draft { background: rgba(245,158,11,0.1); color: #F59E0B; }
.ibw-status-pending { background: rgba(37,99,235,0.1); color: #2563EB; }
.ibw-actions { display: flex; gap: 8px; }
.ibw-btn-icon { width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; border: none; border-radius: 6px; cursor: pointer; transition: all 0.3s; }
.ibw-btn-edit { background: rgba(37,99,235,0.1); color: #2563EB; }
.ibw-btn-edit:hover { background: #2563EB; color: #fff; }
.ibw-btn-delete { background: rgba(239,68,68,0.1); color: #EF4444; }
.ibw-btn-delete:hover { background: #EF4444; color: #fff; }

.ibw-form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
.ibw-form-group { margin-bottom: 20px; }
.ibw-full-width { grid-column: 1 / -1; }
.ibw-form-group label { display: flex; align-items: center; gap: 8px; font-weight: 500; color: #0F172A; margin-bottom: 8px; }
.ibw-form-group label i { color: #2563EB; }
.ibw-input, .ibw-select, .ibw-textarea { width: 100%; padding: 14px 16px; border: 2px solid #E5EAF3; border-radius: 10px; font-family: inherit; font-size: 14px; transition: all 0.3s; background: #fff; box-sizing: border-box; }
.ibw-textarea { min-height: 300px; resize: vertical; line-height: 1.6; }
.ibw-input:focus, .ibw-select:focus, .ibw-textarea:focus { outline: none; border-color: #2563EB; box-shadow: 0 0 0 4px rgba(37,99,235,0.1); }

.ibw-form-actions { margin-top: 25px; display: flex; gap: 15px; }
.ibw-ai-ready { background: #f5f7fb; border-radius: 10px; padding: 15px; }
.ibw-ai-ready label { display: flex; align-items: center; gap: 10px; cursor: pointer; font-weight: 500; }
.ibw-ai-ready p { font-size: 12px; color: #64748B; margin: 8px 0 0; }

.ibw-api-box { background: #f5f7fb; padding: 15px; border-radius: 10px; display: flex; align-items: center; justify-content: space-between; gap: 15px; flex-wrap: wrap; }
.ibw-api-box code { flex: 1; font-size: 13px; color: #2563EB; word-break: break-all; min-width: 200px; }
.ibw-code { background: #1E293B; color: #E2E8F0; padding: 15px; border-radius: 10px; font-size: 12px; overflow-x: auto; white-space: pre-wrap; line-height: 1.5; }

.ibw-modal { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 9999; display: flex; align-items: center; justify-content: center; }
.ibw-modal-content { background: #fff; padding: 30px; border-radius: 16px; max-width: 600px; width: 90%; max-height: 80vh; overflow-y: auto; position: relative; }
.ibw-modal-close { position: absolute; top: 15px; right: 20px; font-size: 28px; cursor: pointer; color: #64748B; line-height: 1; }
.ibw-modal-content h2 { color: #062B6F; margin-bottom: 15px; }
.ibw-modal-content h3 { color: #062B6F; margin: 20px 0 10px; font-size: 14px; }
.ibw-modal-content code { display: block; background: #f5f7fb; padding: 10px; border-radius: 6px; font-size: 12px; word-break: break-all; margin-bottom: 10px; }
.ibw-modal-content pre { background: #1E293B; color: #E2E8F0; padding: 15px; border-radius: 8px; overflow-x: auto; }

.ibw-empty { text-align: center; padding: 50px; color: #64748B; }
.ibw-empty i { font-size: 48px; margin-bottom: 15px; opacity: 0.5; display: block; }

@media (max-width: 768px) {
    .ibw-form-grid { grid-template-columns: 1fr; }
    .ibw-header { flex-direction: column; gap: 15px; text-align: center; }
    .ibw-tabs { width: 100%; overflow-x: auto; }
    .ibw-stats { grid-template-columns: 1fr 1fr; }
}
</style>

<script>
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
        var content = $('#post_content').val();

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
                    jQuery('#post_content').val(post.content);
                    jQuery('#post_tags').val(post.tags.join(', '));
                    jQuery('#form-title').text('Edit Post');
                    jQuery('#submit-text').text('Update Post');
                    jQuery('.ibw-tab[data-tab="create"]').click();
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
    jQuery('#post_content').val('');
    jQuery('#post_tags').val('');
    jQuery('#form-title').text('Create New Post');
    jQuery('#submit-text').text('Publish Post');
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

function generateApiKey() {
    jQuery.ajax({
        url: ibw_vars.ajax_url,
        type: 'POST',
        data: {
            action: 'ibw_generate_api_key',
            nonce: ibw_vars.nonce
        },
        success: function(res) {
            if (res.success) {
                var fullKey = res.data.api_key;
                var displayKey = fullKey.substring(0, 8) + '...' + fullKey.substring(fullKey.length - 4);
                jQuery('#apiKeyDisplay').val(displayKey);
                jQuery('#apiUsageSection').show();
                jQuery('#copyApiBtn').show();

                // Update the usage example
                var usageCode = jQuery('.ibw-code').text();
                usageCode = usageCode.replace(/api_key=[^&"]*/, 'api_key=' + fullKey);
                jQuery('.ibw-code').text(usageCode);

                alert('API Key generated: ' + fullKey + '\n\nPlease copy this key and share with me!');
            }
        }
    });
}

function copyApiKey() {
    jQuery.ajax({
        url: ibw_vars.ajax_url,
        type: 'POST',
        data: {
            action: 'ibw_get_posts',
            nonce: ibw_vars.nonce
        },
        success: function(res) {
            // Get the full key from server - for now, ask user to copy from display
            var currentDisplay = jQuery('#apiKeyDisplay').val();
            navigator.clipboard.writeText(currentDisplay).then(function() {
                alert('Partial key copied! For full key, please regenerate or check with developer.');
            });
        }
    });
}

jQuery(document).on('click', '#apiModal', function(e) {
    if (jQuery(e.target).is('#apiModal')) {
        closeApiInfo();
    }
});
</script>