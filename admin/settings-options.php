<?php
/**
 * Settings Sections
 *
 * @return array
 */
function auiu_settings_sections() {
    $sections = array(
	array(
        'id' => 'auiu_frontend_posting',
            'title' => __( 'General Settings', 'auiu' )
        ),
        array(
            'id' => 'auiu_labels',
            'title' => __( 'Form - Field Labels', 'auiu' )
        ),
		array(
            'id' => 'auiu_enablecustom',
            'title' => __( 'Custom Fields - Uploader Name/Email/Terms', 'auiu' )
        ),
		array(
            'id' => 'auiu_styles',
            'title' => __( 'Form - Buttons/Fonts', 'auiu' )
        ),
        array(
            'id' => 'auiu_others',
            'title' => __( 'Notification/ Redirect / reCAPTCHA', 'auiu' )
        )
     );
    return apply_filters( 'auiu_settings_sections', $sections );
}
function auiu_settings_fields() {
    $users = auiu_list_users();
    $settings_fields = array(
        'auiu_labels' => apply_filters( 'auiu_options_label', array(
            array(
                'name' => 'title_label',
                'label' => __( 'Post Title Label', 'auiu' ),
				'desc' => __( 'Define the title of the user submission, e.g. "Name of Picture"', 'auiu' ),
                'default' => 'Title'
            ),
            array(
                'name' => 'title_help',
                'label' => __( 'Post Title Help Text', 'auiu' ),
				'desc' => __( 'The text visitors will see, helping them to fill out the post title field', 'auiu' ),
				'default' => 'Please enter a title'
            ),
            array(
                'name' => 'cat_label',
                'label' => __( 'Post Category Label', 'auiu' ),
                'default' => 'Category',
				'desc' => __( 'Define the label of the "category" field', 'auiu' )
            ),
            array(
                'name' => 'cat_help',
                'label' => __( 'Post Category Help Text', 'auiu' ),
				'desc' => __( 'The text visitors will see, helping them choose a category', 'auiu' ),
				'default' => 'Please select a category'
            ),
            array(
                'name' => 'desc_label',
                'label' => __( 'Post Description Label', 'auiu' ),
				'default' => 'Description',
                'desc' => __( 'Define the label of the description or comment field', 'auiu' )
            ),
            array(
                'name' => 'desc_help',
                'label' => __( 'Post Description Help Text', 'auiu' ),
				'desc' => __( 'The text visitors will see, helping them fill in a description or comment', 'auiu' ),
				'default' => 'Please describe your image'
            ),
            array(
                'name' => 'tag_label',
                'label' => __( 'Post Tag Label', 'auiu' ),
                'default' => 'Tags',
				'desc' => __( 'Define the label for the tags field', 'auiu' ),
            ),
            array(
                'name' => 'tag_help',
                'label' => __( 'Post Tag Help Text', 'auiu' ),
				'desc' => __( 'The text visitors will see, helping them choose tags', 'auiu' ),
				'default' => 'Please tag your image'
            ),
            array(
                'name' => 'submit_label',
                'label' => __( 'Post Submit Button Label', 'auiu' ),
				'desc' => __( 'Define the label of the submit button', 'auiu' ),
                'default' => 'Submit Image!'
            ),
            array(
                'name' => 'updating_label',
                'label' => __( 'Post Updating Button Label', 'auiu' ),
                'desc' => __( 'This text will be shown right after submitting a post', 'auiu' ),
                'default' => 'Please wait...'
            ),
            array(
                'name' => 'ft_image_label',
                'label' => __( 'Post Image (Featured Image) Label', 'auiu' ),
				'desc' => __( 'The label next to the image upload button', 'auiu' ),
                'default' => 'Your Image'
            ),
            array(
                'name' => 'ft_image_btn_label',
                'label' => __( 'Post Image (Featured Image) Button Label', 'auiu' ),
				'desc' => __( 'The upload image button label you can customize', 'auiu' ),
                'default' => 'Upload Image'
			),
            array(
                'name' => 'dropzone_label',
                'label' => __( 'Drop File Text', 'auiu' ),
				'desc' => __( 'The drop file here text you can customize', 'auiu' ),
                'default' => 'Click Button or Drop File here'
			),
            array(
                'name' => 'checkbox_error',
                'label' => __( 'Checkbox Error Text', 'auiu' ),
				'desc' => __( 'Define the error label when checkbox is not ticked. Default: Please tick the checkbox.', 'auiu' ),
                'default' => 'Please tick the checkbox'
			)				
        ) ),
		'auiu_styles' => apply_filters( 'auiu_options_label', array(
			array(
                'name' => 'enable_styles',
                'label' => __( 'Enable Custom Styles', 'auiu' ),
                'desc' => __( 'By default custom styles are switched off. Click "Yes" to enable them.', 'auiu' ),
                'type' => 'select',
                'default' => 'no',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
            array(
                'name' => 'button_background',
                'label' => __( 'Button Background Colour (hex code)', 'auiu' ),
				'desc' => __( 'Insert the colour hex code you want for the button background. Default is: #4090BA', 'auiu' ),
                'default' => '#4090BA'
            ),
			array(
                'name' => 'button_textcolor',
                'label' => __( 'Button Text Colour (hex code)', 'auiu' ),
				'desc' => __( 'Insert the colour hex code you want for the button text. Default is white: #FFF', 'auiu' ),
                'default' => '#FFF'
            ),
			array(
                'name' => 'button_hoverback',
                'label' => __( 'Hover State - Button Background Colour)', 'auiu' ),
				'desc' => __( 'Insert the colour hex code you want for the button hover state. Default is: #3981A7', 'auiu' ),
                'default' => '#3981A7'
            ),
			array(
                'name' => 'button_hovertext',
                'label' => __( 'Hover State - Button Text Colour', 'auiu' ),
				'desc' => __( 'Insert the colour hex code you want for the button text in hover state: #FFF', 'auiu' ),
                'default' => '#FFF'
            ),
			array(
                'name' => 'button_radius',
                'label' => __( 'Button Border Radius', 'auiu' ),
				'desc' => __( 'Insert the border radius you want around the button. For example: 5. Default is 5 pixels', 'auiu' ),
                'default' => '5'
            ),
			array(
                'name' => 'button_font',
                'label' => __( 'Button Font Family', 'auiu' ),
				'desc' => __( 'Insert font family information. For example: Montserrat,"Helvetica Neue",sans-serif', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'button_transform',
                'label' => __( 'Button Uppercase', 'auiu' ),
				'desc' => __( 'Type in "uppercase" (without the quotation marks) if you want the button text to be in captitals.', 'auiu' ),
                'default' => 'inherit'
            ),	
			array(
                'name' => 'button_size',
                'label' => __( 'Button Font Size', 'auiu' ),
				'desc' => __( 'Insert the font size that you want. For exampe: 16. This will translate into 16 pixels.', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'label_size',
                'label' => __( 'Form Fields Label - Font Size', 'auiu' ),
				'desc' => __( 'Insert the font size that you want. For exampe: 16. This will translate into 16 pixels.', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'label_weight',
                'label' => __( 'Form Fields Label - Font Weight (Bold or Normal)', 'auiu' ),
				'desc' => __( 'Set the font weight that you want. For exampe: bold. Default is normal.', 'auiu' ),
                'default' => 'normal'
            ),
			array(
                'name' => 'label_font',
                'label' => __( 'Form Fields Label - Font Family', 'auiu' ),
				'desc' => __( 'Insert font family information. For example: Montserrat,"Helvetica Neue",sans-serif', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'description_size',
                'label' => __( 'Form Fields Description - Font Size', 'auiu' ),
				'desc' => __( 'Insert the font size that you want. For exampe: 16. This will translate into 16 pixels.', 'auiu' ),
                'default' => '14'
            ),	
			array(
                'name' => 'description_font',
                'label' => __( 'Form Fields Description - Font Family', 'auiu' ),
				'desc' => __( 'Insert font family information. For example: Montserrat,"Helvetica Neue",sans-serif', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'dropfile_size',
                'label' => __( 'Drop File Text - Font Size', 'auiu' ),
				'desc' => __( 'Insert the font size that you want. For exampe: 16. This will translate into 16 pixels.', 'auiu' ),
                'default' => '16'
            ),
			array(
                'name' => 'dropfile_font',
                'label' => __( 'Drop File Text - Font Family', 'auiu' ),
				'desc' => __( 'Insert font family information. For example: Montserrat,"Helvetica Neue",sans-serif', 'auiu' ),
                'default' => 'inherit'
            ),			
			array(
                'name' => 'category_select_size',
                'label' => __( 'Category Selection - Font Size', 'auiu' ),
				'desc' => __( 'Insert the font size that you want. For example: 16. This will translate into 16 pixels.', 'auiu' ),
                'default' => '14'
            ),
			array(
                'name' => 'category_select_font',
                'label' => __( 'Category Selection - Font Family', 'auiu' ),
				'desc' => __( 'Insert font family information. For example: Montserrat,"Helvetica Neue",sans-serif', 'auiu' ),
                'default' => 'inherit'
            ),
			array(
                'name' => 'label_width',
                'label' => __( 'Label Width (in %)', 'auiu' ),
				'desc' => __( 'With some themes you need to experiment with label width. For example: 23. Makes the label 23% wide.', 'auiu' ),
                'default' => '23'
            ),
			array(
                'name' => 'text_width',
                'label' => __( 'Text Field & Area Width (in %)', 'auiu' ),
				'desc' => __( 'With some themes you need to experiment with text width. For example: 74. Makes the text field/area 74% wide.', 'auiu' ),
                'default' => '74'
            )				
 		) ),	
		'auiu_enablecustom' => apply_filters( 'auiu_options_label', array(
			array(
                'name' => 'enable_uploadername',
                'label' => __( 'Enable Uploader Name Field', 'auiu' ),
                'desc' => __( 'By default the form requires the Uploader Name. Select "No" and click "Save Changes" and reload the form, if you do not want it.', 'auiu' ),
                'type' => 'select',
                'default' => 'yes',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
			array(
                'name' => 'enable_uploaderemail',
                'label' => __( 'Enable Uploader Email Field', 'auiu' ),
                'desc' => __( 'By default the form requires the Uploader Email Address. Select "No" and click "Save Changes" and reload the form, if you do not want it.', 'auiu' ),
                'type' => 'select',
                'default' => 'yes',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
			array(
                'name' => 'enable_uploaderagree',
                'label' => __( 'Enable Agree to Terms Field', 'auiu' ),
                'desc' => __( 'By default the form requires the Uploader to click the checkbox "Agree to Terms". Select "No" and click "Save Changes" and reload the form, if you do not want it.', 'auiu' ),
                'type' => 'select',
                'default' => 'yes',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
            array(
                'name' => 'agree_text',
                'label' => __( 'Agree to Terms Text', 'auiu' ),
				'desc' => __( 'The Agree to Terms text the uploader will see', 'auiu' ),
				'type' => 'textarea',
				'default' => 'I certify that by submitting the above information and photograph that I have first read and hereby agree to be bound by the Term of Use Agreement, which can be read here:'
            ),
            array(
                'name' => 'terms_link',
                'label' => __( 'Link to Terms Page', 'auiu' ),
				'desc' => __( 'Link to the Terms Page. Just copy and paste the link here (with http://).', 'auiu' ),
				'default' => ''
            ),				
			array(
                'name' => 'enable_custom_field',
                'label' => __( 'Enable Custom Fields', 'auiu' ),
                'desc' => __( 'To make the above two fields show up and to add more than the above custom fields keep this checked. Add new fields by going to the <b>Custom Fields</b> option page.', 'auiu' ),
                'type' => 'checkbox',
				'default' => 'on'
            ),
		) ),
        'auiu_frontend_posting' => apply_filters( 'auiu_options_frontend', array(
			array(
                'name' => 'enable_featured_image',
                'label' => __( 'Post Image (Featured Image) Upload', 'auiu' ),
                'desc' => __( 'Your visitors can upload an image directly from the form. That image will be the post image (or "featured image").', 'auiu' ),
                'type' => 'radio',
                'default' => 'yes',
                'options' => array(
                    'yes' => __( 'Enable', 'auiu' ),
                    'no' => __( 'Disable', 'auiu' )
                )
            ),
            array(
                'name' => 'post_status',
                'label' => __( 'Post Status', 'auiu' ),
                'desc' => __( 'Default post status after a visitor submits an image', 'auiu' ),
                'type' => 'select',
                'default' => 'pending',
                'options' => array(
                    'publish' => 'Publish',
                    'draft' => 'Draft',
                    'pending' => 'Pending'
                )
            ),
            array(
                'name' => 'map_author',
                'label' => __( 'Map posts to poster', 'auiu' ),
                'desc' => __( 'New post\'s post author will be this user by default', 'auiu' ),
                'type' => 'select',
                'options' => auiu_list_users()
            ),			
            array(
                'name' => 'allow_cats',
                'label' => __( 'Allow Selecting Category?', 'auiu' ),
                'desc' => __( 'Do you want your visitors to choose a category with their submission?', 'auiu' ),
                'type' => 'checkbox',
                'default' => 'on'
            ),
            array(
                'name' => 'default_taxonomy',
                'label' => __( 'Default Post Taxonomy', 'auiu' ),
                'desc' => __( 'You can extend WordPress with customized categories (custom taxonomy) in addition to the normal post categories. By default the normal post "category" is selected', 'auiu' ),
                'type' => 'select',
                'options' => auiu_get_taxonomies()
            ),
            array(
                'name' => 'default_cat',
                'label' => __( 'Default Post Category', 'auiu' ),
                'desc' => __( 'If visitors are not allowed to choose a category for their submission, this category will be used instead', 'auiu' ),
                'type' => 'select',
                'options' => auiu_get_cats()
            ),
            array(
                'name' => 'cat_type',
                'label' => __( 'Category Selection Type', 'auiu' ),
                'type' => 'radio',
                'default' => 'normal',
                'options' => array(
                    'normal' => __( 'Normal', 'auiu' ),
                    'ajax' => __( 'Ajaxified', 'auiu' ),
                    'checkbox' => __( 'Checkbox', 'auiu' )
                )
            ),
			array(
                'name' => 'exclude_cats',
                'label' => __( 'Exclude Category IDs', 'auiu' ),
                'desc' => __( 'If you want to use certain categories for other purposes (like blogging), you can exclude those from the dropdown.', 'auiu' ),
                'type' => 'text'
            ),
            array(
                'name' => 'attachment_max_size',
                'label' => __( 'Post Image - Maximum Size Allowed', 'auiu' ),
                'desc' => __( 'Enter the maximum file size in <b>KILOBYTE</b> of the image your visitor is allowed to upload (default size: 256 KB)', 'auiu' ),
                'type' => 'text',
                'default' => '256'
            ),
			array(
                'name' => 'maxsize_text_before',
                'label' => __( 'Before Label - Post Image Maximum Size', 'auiu' ),
                'desc' => __( 'This is the label you want to show <b>before</b> the maximum image size number', 'auiu' ),
                'type' => 'text',
                'default' => 'Make sure your picture is not bigger than'
            ),
			array(
                'name' => 'maxsize_text_after',
                'label' => __( 'After Label - Post Image Maximum Size', 'auiu' ),
                'desc' => __( 'This is the label you want to show <b>after</b> the maximum image size number', 'auiu' ),
                'type' => 'text',
                'default' => 'or it won\'t work.'
            ),
            array(
                'name' => 'editor_type',
                'label' => __( 'Content Editor Type', 'auiu' ),
                'type' => 'select',
                'default' => 'plain',
                'options' => array(
                    'rich' => __( 'Rich Text (tiny)', 'auiu' ),
                    'full' => __( 'Rich Text (full)', 'auiu' ),
                    'plain' => __( 'Plain Text', 'auiu' )
                )
            ),
            array(
                'name' => 'allow_tags',
                'label' => __( 'Allow Post Tags', 'auiu' ),
                'desc' => __( 'The visitor will be able to add post tags', 'auiu' ),
                'type' => 'checkbox',
                'default' => 'on'
            ),
            array(
                'name' => 'enable_custom_field',
                'label' => __( 'Enable Custom Fields', 'auiu' ),
                'desc' => __( 'You can use additional fields on the image submission form. Add new fields by clicking the <b>Custom Fields</b> option page.', 'auiu' ),
                'type' => 'checkbox',
				'default' => 'on'
            ),
            
        ) ),
        'auiu_others' => apply_filters( 'auiu_options_others', array(
            array(
                'name' => 'post_notification',
                'label' => __( 'New Post Notification', 'auiu' ),
                'desc' => __( 'As soon as a form is submitted, the administrator receives an email, based on the email address in the WordPress settings.', 'auiu' ),
                'type' => 'select',
                'default' => 'yes',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
			array(
                'name' => 'post_redirect',
                'label' => __( 'Redirect After Posting', 'auiu' ),
                'desc' => __( 'Insert the ID of the page the visitor should be directed to after submitting the form. Default is the homepage.', 'auiu' ),
                'type' => 'text'
            ),
			array(
                'name' => 'enable_recaptcha',
                'label' => __( 'Enable reCAPTCHA', 'auiu' ),
                'desc' => __( 'By default "No". Click "Yes" if you want a CAPTCHA on the form.', 'auiu' ),
                'type' => 'select',
                'default' => 'no',
                'options' => array(
                    'yes' => __( 'Yes', 'auiu' ),
                    'no' => __( 'No', 'auiu' )
                )
            ),
            array(
                'name' => 'captcha_public_key',
                'label' => __( 'reCAPTCHA Site Key', 'auiu' ),
                'desc' => __( 'Insert your reCAPTCHA Site Key. You can sign up for reCAPTCHA at https://www.google.com/recaptcha/', 'auiu' ),
                'type' => 'text'
            ),
			array(
                'name' => 'captcha_private_key',
                'label' => __( 'reCAPTCHA Secret Key', 'auiu' ),
                'desc' => __( 'Insert your reCAPTCHA Secret Key. You can sign up for reCAPTCHA at https://www.google.com/recaptcha/', 'auiu' ),
                'type' => 'text'
            ),
            array(
                'name' => 'recaptcha_label',
                'label' => __( 'Are You Human?', 'auiu' ),
                'desc' => __( 'Type in the text for the reCAPTCHA label. Default is "Are You Human?"', 'auiu' ),
				'default' => 'Are You Human?',
                'type' => 'text'
            ),			
         ) ),
    );
    return apply_filters( 'auiu_settings_fields', $settings_fields );
}