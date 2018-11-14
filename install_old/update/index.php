<?php

if (!defined('IN_PHPBB'))
{
	exit;
}

// Set update info with file structure to update
$update_info = array(
	'version'	=> array('from' => '3.1.8', 'to' => '3.1.10'),
	'files'		=> array(
		'adm/style/acp_attachments.html',
		'adm/style/acp_avatar_options_gravatar.html',
		'adm/style/acp_avatar_options_remote.html',
		'adm/style/acp_captcha.html',
		'adm/style/acp_database.html',
		'adm/style/acp_forums.html',
		'adm/style/acp_groups.html',
		'adm/style/acp_icons.html',
		'adm/style/acp_inactive.html',
		'adm/style/acp_jabber.html',
		'adm/style/acp_main.html',
		'adm/style/acp_posting_buttons.html',
		'adm/style/acp_ranks.html',
		'adm/style/acp_search.html',
		'adm/style/acp_update.html',
		'adm/style/install_header.html',
		'adm/style/install_update_diff.html',
		'adm/style/overall_header.html',
		'adm/style/simple_header.html',
		'assets/javascript/core.js',
		'assets/javascript/editor.js',
		'common.php',
		'composer.lock',
		'config/feed.yml',
		'cron.php',
		'feed.php',
		'includes/acp/acp_attachments.php',
		'includes/acp/acp_board.php',
		'includes/acp/acp_database.php',
		'includes/acp/acp_forums.php',
		'includes/acp/acp_groups.php',
		'includes/acp/acp_icons.php',
		'includes/acp/acp_language.php',
		'includes/acp/acp_main.php',
		'includes/acp/acp_modules.php',
		'includes/acp/acp_permission_roles.php',
		'includes/acp/acp_profile.php',
		'includes/acp/acp_reasons.php',
		'includes/acp/acp_search.php',
		'includes/acp/acp_update.php',
		'includes/acp/acp_users.php',
		'includes/constants.php',
		'includes/functions.php',
		'includes/functions_acp.php',
		'includes/functions_admin.php',
		'includes/functions_content.php',
		'includes/functions_convert.php',
		'includes/functions_download.php',
		'includes/functions_messenger.php',
		'includes/functions_posting.php',
		'includes/functions_user.php',
		'includes/mcp/mcp_forum.php',
		'includes/mcp/mcp_main.php',
		'includes/mcp/mcp_warn.php',
		'includes/ucp/ucp_groups.php',
		'includes/ucp/ucp_main.php',
		'includes/ucp/ucp_pm_compose.php',
		'includes/ucp/ucp_profile.php',
		'index.php',
		'language/en/acp/attachments.php',
		'language/en/acp/board.php',
		'language/en/acp/common.php',
		'language/en/acp/search.php',
		'language/en/captcha_qa.php',
		'language/en/common.php',
		'language/en/email/forum_notify.txt',
		'language/en/email/newtopic_notify.txt',
		'language/en/email/short/newtopic_notify.txt',
		'language/en/email/short/topic_notify.txt',
		'language/en/email/topic_notify.txt',
		'language/en/install.php',
		'language/en/migrator.php',
		'language/en/posting.php',
		'language/en/ucp.php',
		'memberlist.php',
		'phpbb/auth/provider/oauth/oauth.php',
		'phpbb/avatar/driver/gravatar.php',
		'phpbb/avatar/driver/remote.php',
		'phpbb/avatar/driver/upload.php',
		'phpbb/cache/driver/base.php',
		'phpbb/cache/driver/file.php',
		'phpbb/captcha/plugins/qa.php',
		'phpbb/content_visibility.php',
		'phpbb/controller/helper.php',
		'phpbb/cron/manager.php',
		'phpbb/db/driver/driver.php',
		'phpbb/db/migration/data/v310/alpha1.php',
		'phpbb/db/migration/data/v310/alpha2.php',
		'phpbb/db/migration/data/v310/alpha3.php',
		'phpbb/db/migration/data/v310/beta1.php',
		'phpbb/db/migration/data/v310/beta2.php',
		'phpbb/db/migration/data/v310/beta3.php',
		'phpbb/db/migration/data/v310/beta4.php',
		'phpbb/db/migration/data/v310/gold.php',
		'phpbb/db/migration/data/v310/passwords_convert_p1.php',
		'phpbb/db/migration/data/v310/rc1.php',
		'phpbb/db/migration/data/v310/rc2.php',
		'phpbb/db/migration/data/v310/rc3.php',
		'phpbb/db/migration/data/v310/rc4.php',
		'phpbb/db/migration/data/v310/rc5.php',
		'phpbb/db/migration/data/v310/rc6.php',
		'phpbb/db/migration/data/v31x/add_log_time_index.php',
		'phpbb/db/migration/data/v31x/v311.php',
		'phpbb/db/migration/data/v31x/v3110.php',
		'phpbb/db/migration/data/v31x/v3110rc1.php',
		'phpbb/db/migration/data/v31x/v312.php',
		'phpbb/db/migration/data/v31x/v312rc1.php',
		'phpbb/db/migration/data/v31x/v313.php',
		'phpbb/db/migration/data/v31x/v313rc1.php',
		'phpbb/db/migration/data/v31x/v313rc2.php',
		'phpbb/db/migration/data/v31x/v314.php',
		'phpbb/db/migration/data/v31x/v314rc1.php',
		'phpbb/db/migration/data/v31x/v314rc2.php',
		'phpbb/db/migration/data/v31x/v315.php',
		'phpbb/db/migration/data/v31x/v315rc1.php',
		'phpbb/db/migration/data/v31x/v316.php',
		'phpbb/db/migration/data/v31x/v316rc1.php',
		'phpbb/db/migration/data/v31x/v317.php',
		'phpbb/db/migration/data/v31x/v317pl1.php',
		'phpbb/db/migration/data/v31x/v317rc1.php',
		'phpbb/db/migration/data/v31x/v318.php',
		'phpbb/db/migration/data/v31x/v318rc1.php',
		'phpbb/db/migration/data/v31x/v319.php',
		'phpbb/db/migration/data/v31x/v319rc1.php',
		'phpbb/db/migration/helper.php',
		'phpbb/db/migration/tool/config.php',
		'phpbb/db/migration/tool/config_text.php',
		'phpbb/db/migration/tool/module.php',
		'phpbb/db/migration/tool/permission.php',
		'phpbb/db/migrator.php',
		'phpbb/db/migrator_output_handler_interface.php',
		'phpbb/db/tools.php',
		'phpbb/event/kernel_exception_subscriber.php',
		'phpbb/feed/base.php',
		'phpbb/log/log.php',
		'phpbb/notification/manager.php',
		'phpbb/notification/method/messenger_base.php',
		'phpbb/profilefields/type/type_int.php',
		'phpbb/profilefields/type/type_string.php',
		'phpbb/profilefields/type/type_text.php',
		'phpbb/profilefields/type/type_url.php',
		'phpbb/recursive_dot_prefix_filter_iterator.php',
		'phpbb/request/request.php',
		'phpbb/search/base.php',
		'phpbb/search/fulltext_mysql.php',
		'phpbb/search/fulltext_native.php',
		'phpbb/search/fulltext_postgres.php',
		'phpbb/search/fulltext_sphinx.php',
		'phpbb/session.php',
		'phpbb/template/twig/twig.php',
		'phpbb/user.php',
		'posting.php',
		'search.php',
		'styles/prosilver/style.cfg',
		'styles/prosilver/template/confirm_delete_body.html',
		'styles/prosilver/template/mcp_forum.html',
		'styles/prosilver/template/mcp_move.html',
		'styles/prosilver/template/mcp_topic.html',
		'styles/prosilver/template/memberlist_email.html',
		'styles/prosilver/template/memberlist_view.html',
		'styles/prosilver/template/overall_header.html',
		'styles/prosilver/template/pagination.html',
		'styles/prosilver/template/posting_editor.html',
		'styles/prosilver/template/posting_poll_body.html',
		'styles/prosilver/template/posting_topic_review.html',
		'styles/prosilver/template/search_results.html',
		'styles/prosilver/template/simple_header.html',
		'styles/prosilver/template/ucp_avatar_options_gravatar.html',
		'styles/prosilver/template/ucp_avatar_options_remote.html',
		'styles/prosilver/template/ucp_pm_viewmessage_print.html',
		'styles/prosilver/template/viewforum_body.html',
		'styles/prosilver/template/viewtopic_print.html',
		'styles/subsilver2/style.cfg',
		'styles/subsilver2/template/mcp_forum.html',
		'styles/subsilver2/template/mcp_move.html',
		'styles/subsilver2/template/mcp_topic.html',
		'styles/subsilver2/template/memberlist_email.html',
		'styles/subsilver2/template/memberlist_view.html',
		'styles/subsilver2/template/overall_header.html',
		'styles/subsilver2/template/posting_attach_body.html',
		'styles/subsilver2/template/posting_body.html',
		'styles/subsilver2/template/posting_poll_body.html',
		'styles/subsilver2/template/posting_topic_review.html',
		'styles/subsilver2/template/search_results.html',
		'styles/subsilver2/template/simple_header.html',
		'styles/subsilver2/template/ucp_avatar_options_gravatar.html',
		'styles/subsilver2/template/ucp_avatar_options_remote.html',
		'styles/subsilver2/template/ucp_pm_viewmessage_print.html',
		'styles/subsilver2/template/viewforum_body.html',
		'styles/subsilver2/template/viewtopic_print.html',
		'viewforum.php',
		'viewtopic.php',
	),
	'binary'		=> array(),
	'deleted'		=> array(
		'language/en/search_ignore_words.php',
		'language/en/search_synonyms.php',
	),
);
