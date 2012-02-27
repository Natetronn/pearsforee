<?php

// --------------------------------------------------------------------

/**
 * Required modules
 */

// 'channel', 'member', 'stats' are already required by the system
//$required_modules = array('email', 'rss', 'comment', 'search');

// --------------------------------------------------------------------

/**
 * Optional Values, Used for a Fresh Site
 */

$default_group = 'site';

// --------------------------------------------------------------------

/**
 * Default Preferences and Access Permissions for all Templates
 */

$default_template_preferences = array('caching'			=> 'n',
									  'cache_refresh'	=> 0,
									  'php_parsing'		=> 'none', // none, input, output
									  );

// Uses the Labels of the default four groups, as it is easier than the Group IDs, let's be honest
$default_template_access = array('Banned' 	=> 'n',
								 'Guests'	=> 'y',
								 'Pending'	=> 'y');

// --------------------------------------------------------------------

/**
 * Template Specific Preferences and Settings
 */

// $template_preferences['pears']['index'] = array('caching' => 'y', 'cache_refresh' => 60);

$no_access = array(
					'Banned'	=> 'n',
					'Guests'	=> 'n',
					'Members'	=> 'n',
					'Pending'	=> 'n'
					);


/* End of file theme_preferences.php */
/* Location: ./themes/site_themes/pears
* /theme_preferences.php */