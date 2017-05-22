<?php

return array (
	'language' => 'en',
	'old_entries' => 3,
	'keep_history_default' => 50,
	'ttl_default' => 3600,
	'mail_login' => '',
	'token' => '',
	'passwordHash' => '',
	'apiPasswordHash' => '',
	'posts_per_page' => 20,
	'since_hours_posts_per_rss' => 168,
	'min_posts_per_rss' => 2,
	'max_posts_per_rss' => 400,
	'view_mode' => 'normal',
	'default_view' => 'adaptive',
	'default_state' => FreshRSS_Entry::STATE_NOT_READ,
	'auto_load_more' => true,
	'display_posts' => false,
	'display_categories' => false,
	'hide_read_feeds' => true,
	'onread_jump_next' => true,
	'lazyload' => true,
	'sides_close_article' => false,
	'sticky_post' => true,
	'reading_confirm' => false,
	'auto_remove_article' => false,

	# In the case an article has changed (e.g. updated content):
	#	Set to `true` to mark it unread, or `false` to leave it as-is.
	'mark_updated_article_unread' => false, //TODO: -1 => ignore, 0 => update, 1 => update and mark as unread

	'sort_order' => 'DESC',
	'anon_access' => false,
	'mark_when' => array (
		'article' => true,
		'site' => true,
		'scroll' => true,
		'reception' => false,
	),
	'theme' => 'Origine',
	'content_width' => 'thin',
	'shortcuts' => array (
		'mark_read' => 'r',
		'mark_favorite' => 'f',
		'go_website' => 'space',
		'next_entry' => 'j',
		'prev_entry' => 'k',
		'first_entry' => 'home',
		'last_entry' => 'end',
		'collapse_entry' => 'c',
		'load_more' => 'm',
		'auto_share' => 's',
		'focus_search' => 'a',
		'user_filter' => 'u',
		'help' => 'f1',
		'close_dropdown' => 'escape',
	),
	'topline_read' => true,
	'topline_favorite' => true,
	'topline_date' => true,
	'topline_link' => true,
	'bottomline_read' => true,
	'bottomline_favorite' => true,
	'bottomline_sharing' => true,
	'bottomline_tags' => true,
	'bottomline_date' => true,
	'bottomline_link' => true,
	'sharing' => array (
	),
	'queries' => array (
	),
	'html5_notif_timeout' => 0,
	'extensions_enabled' => array(),
);
