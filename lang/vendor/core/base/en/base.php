<?php

return [
    'yes' => 'Yes',
    'no' => 'No',
    'is_default' => 'Is default?',
    'proc_close_disabled_error' => 'Function proc_close() is disabled. Please contact your hosting provider to enable'."\n"
        .'    it. Or you can add to .env: CAN_EXECUTE_COMMAND=false to disable this feature.',
    'email_template' => [
        'header' => 'Email template header',
        'footer' => 'Email template footer',
        'site_title' => 'Site title',
        'site_url' => 'Site URL',
        'site_logo' => 'Site logo',
        'site_email' => 'Site admin email',
        'site_copyright' => 'Site copyright',
        'site_social_links' => 'Site social links (data type: array)',
        'date_time' => 'Current date time',
        'date_year' => 'Current year',
        'settings' => 'Setting Values',
        'email_css' => 'Email CSS',
        'variable' => 'Variable',
        'preview' => 'Preview',
        'icon_variables' => 'Icon variables',
        'usage' => 'Usage:',
        'icon_variable_usage_description' => 'You can copy variable :variable and paste:',
        'add_new_icons' => 'Add new icons:',
        'add_more_icon_description' => 'You can add more icons by uploading them (supporting PNG, JPEG, JPG, and GIF formats) to the following path: :path',
        'missing_icons' => 'Missing the icons',
        'missing_icons_description' => 'The following icons are missing in the path: :to, please copy all icons file from :from to :to.',
        'twig' => [
            'tag' => [
                'apply' => 'The apply tag allows you to apply Twig filters',
                'for' => 'Loop over each item in a sequence',
                'if' => 'The if statement in Twig is comparable with the if statements of PHP',
            ],
        ],
    ],
    'change_image' => 'Change image',
    'delete_image' => 'Delete image',
    'preview_image' => 'Preview image',
    'image' => 'Image',
    'using_button' => 'Using button',
    'select_image' => 'Select image',
    'click_here' => 'Click here',
    'to_add_more_image' => 'to add more images',
    'add_image' => 'Add image',
    'tools' => 'Tools',
    'close' => 'Close',
    'panel' => [
        'others' => 'Others',
        'system' => 'System',
        'manage_description' => 'Manage :name',
    ],
    'global_search' => [
        'title' => 'Search',
        'search' => 'Search',
        'clear' => 'Clear',
        'no_result' => 'No result found',
        'to_select' => 'to select',
        'to_navigate' => 'to navigate',
        'to_close' => 'to close',
    ],
    'validation' => [
        'email_in_blacklist' => 'The :attribute is in blacklist. Please use another email address.',
        'domain' => 'The :attribute must be a valid domain.',
    ],
    'showing_records' => 'Showing :from to :to of :total records',
    'copy' => 'Copy',
    'copied' => 'Copied',
];
