<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => '此 :attribute 必须同意',
    'active_url'           => '此 :attribute 是无效连接',
    'after'                => '此 :attribute 必须在 :date之后.',
    'alpha'                => '此 :attribute 仅可以包含字母.',
    'alpha_dash'           => '此 :attribute 仅可以包含字母，数字和下划线.',
    'alpha_num'            => '此 :attribute 仅可以包含字母和数字.',
    'array'                => '此 :attribute 必须是一个数组.',
    'before'               => '此 :attribute 必须在 :date之前.',
    'between'              => [
        'numeric' => '此 :attribute 必须在 :min 至 :max之间.',
        'file'    => '此 :attribute 文件大小必须在 :min 至 :max kilobytes之间.',
        'string'  => '此 :attribute 必须在 :min 至 :max 个字母之间.',
        'array'   => '此 :attribute 必须包含 :min 至 :max 项目.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'email'                => 'The :attribute must be a valid email address.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'The :attribute must be a number.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'The :attribute field is required.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        // Contact Form
        'name' => 'Name',
        'email' => 'Email',
        'phone' => 'Phone',
        'company' => 'Company',
        'message' => 'Message',
        'content' => 'Content',

        'title' => 'Title',
        'slug' => 'URL',
        'category' => 'Category',
        'original_filename' => 'Filename',
        'date_published' => 'Date Published',
        'summary' => 'Summary',
        'lead_copy' => 'Lead Copy',
        'video_heading' => 'Video Heading',
        'video_url' => 'Video URL',

        'seo' => [
            'title' => 'SEO Title',
            'description' => 'SEO Description',
            'og_title' => 'Facebook Title',
            'og_description' => 'Facebook Description',
            'og_image' => 'Facebook Image',
        ],

        'image' => [
            'file' => 'Image',
        ],

        'data' => [
            'phone' => 'Phone',
            'email' => 'Email',
            'physical_address' => 'Physical Address',
            'postal_address' => 'Postal Address',
            'caption' => 'Caption',
            'lat' => 'Latitude',
            'lng' => 'Longitude',
            'recipients' => 'Send Contact Form To',
            'recipients_cc' => 'CC Contact Form To',

            'hero_heading' => 'Hero Text Heading',
            'hero_content' => 'Hero Text Content',

            'video' => [
                '1' => ['url' => 'Video URL 1'],
                '2' => ['url' => 'Video URL 2'],
                '3' => ['url' => 'Video URL 3'],
            ],
        ],

        'advert' => [
            'advert-1' => 'Advert',
        ]
    ],

];
