<?php namespace Alxy\Twitter\Components;

use Cms\Classes\ComponentBase;
use HTML;

class EmbeddedTimeline extends ComponentBase
{

    public $attributes;

    public function componentDetails()
    {
        return [
            'name'        => 'Embedded Timeline',
            'description' => 'Display an embedded timeline area.'
        ];
    }

    public function defineProperties()
    {
        return [
            'data-widget-id' => [
                 'title'             => 'Widget ID',
                 'description'       => 'To create a timeline you must be signed in to twitter.com and visit the widgets section [https://twitter.com/settings/widgets] of your settings page.',
                 'type'              => 'string',
                 'validationPattern' => '^\d+$',
                 'validationMessage' => 'The widget ID can only contain digits and is required.'
            ],
            'width' => [
                 'title'             => 'Width',
                 'description'       => 'You can specify the width of the embedded timeline.',
                 'type'              => 'string',
                 'default'           => 520,
                 'validationPattern' => '^\d+$',
                 'validationMessage' => 'The width attribute can only contain numbers.'
            ],
            'height' => [
                 'title'             => 'Height',
                 'description'       => 'You can specify the height of the embedded timeline.',
                 'type'              => 'string',
                 'default'           => 600,
                 'validationPattern' => '^\d+$',
                 'validationMessage' => 'The height attribute can only contain numbers.'
            ],
            'data-theme' => [
                 'title'             => 'Theme',
                 'description'       => 'Theme.',
                 'default'           => 'light',
                 'type'              => 'dropdown',
                 'options'           => [
                    'light' => 'light',
                    'dark' => 'dark'
                 ]
            ],
            'data-chrome' => [
                 'title'             => 'Chrome',
                 'description'       => 'Control the widget layout and chrome. Use a space-separated set of the following options: [noheader, nofooter, noborders, noscrollbar, transparent]',
                 'default'           => 'nofooter transparent',
                 'type'              => 'string'
            ],
            'data-border-color' => [
                 'title'             => 'Border color',
                 'description'       => 'Change the border color used by the widget. Takes an #abc123 hex format color.',
                 'default'           => '',
                 'type'              => 'string'
            ],
            'data-tweet-limit' => [
                 'title'             => 'Tweet limit',
                 'description'       => 'To fix the size of a timeline to a preset number of Tweets, use any value between 1 and 20 Tweets',
                 'type'              => 'string',
                 'default'           => 10,
                 'validationPattern' => '^\d+$',
                 'validationMessage' => 'The tweet limit attribute must be an integer.'
            ],
            'data-related' => [
                 'title'             => 'Recommended accounts',
                 'description'       => 'Related accounts.',
                 'type'              => 'string',
            ],
            'data-aria-polite' => [
                 'title'             => 'ARIA politeness',
                 'description'       => 'ARIA is an accessibility system that aids people using assistive technology interacting with dynamic web content.',
                 'default'           => 'polite',
                 'type'              => 'dropdown',
                 'options'           => [
                    'polite' => 'polite',
                    'assertive' => 'assertive'
                 ]
            ],
            'data-dnt' => [
                 'title'             => 'Opt-out of tailoring Twitter',
                 'description'       => 'Twitter buttons on your site can help us tailor content and suggestions for Twitter users. If you want to opt-out of this feature, check this option.',
                 'default'           => 0,
                 'type'              => 'checkbox'
            ],
            'lang' => [
                'title'             => 'Language',
                'type'              => 'dropdown',
                'default'           => 'en',
                'placeholder'       => 'Select language',
                'options'           => [
                    "aa" => "Afar",
                    "ab" => "Abkhazian",
                    "ae" => "Avestan",
                    "af" => "Afrikaans",
                    "ak" => "Akan",
                    "am" => "Amharic",
                    "an" => "Aragonese",
                    "ar" => "Arabic",
                    "as" => "Assamese",
                    "av" => "Avaric",
                    "ay" => "Aymara",
                    "az" => "Azerbaijani",
                    "ba" => "Bashkir",
                    "be" => "Belarusian",
                    "bg" => "Bulgarian",
                    "bh" => "Bihari",
                    "bi" => "Bislama",
                    "bm" => "Bambara",
                    "bn" => "Bengali",
                    "bo" => "Tibetan",
                    "br" => "Breton",
                    "bs" => "Bosnian",
                    "ca" => "Catalan",
                    "ce" => "Chechen",
                    "ch" => "Chamorro",
                    "co" => "Corsican",
                    "cr" => "Cree",
                    "cs" => "Czech",
                    "cu" => "Church Slavic",
                    "cv" => "Chuvash",
                    "cy" => "Welsh",
                    "da" => "Danish",
                    "de" => "German",
                    "dv" => "Divehi",
                    "dz" => "Dzongkha",
                    "ee" => "Ewe",
                    "el" => "Greek",
                    "en" => "English",
                    "eo" => "Esperanto",
                    "es" => "Spanish",
                    "et" => "Estonian",
                    "eu" => "Basque",
                    "fa" => "Persian",
                    "ff" => "Fulah",
                    "fi" => "Finnish",
                    "fj" => "Fijian",
                    "fo" => "Faroese",
                    "fr" => "French",
                    "fy" => "Western Frisian",
                    "ga" => "Irish",
                    "gd" => "Scottish Gaelic",
                    "gl" => "Galician",
                    "gn" => "Guarani",
                    "gu" => "Gujarati",
                    "gv" => "Manx",
                    "ha" => "Hausa",
                    "he" => "Hebrew",
                    "hi" => "Hindi",
                    "ho" => "Hiri Motu",
                    "hr" => "Croatian",
                    "ht" => "Haitian",
                    "hu" => "Hungarian",
                    "hy" => "Armenian",
                    "hz" => "Herero",
                    "ia" => "Interlingua (International Auxiliary Language Association)",
                    "id" => "Indonesian",
                    "ie" => "Interlingue",
                    "ig" => "Igbo",
                    "ii" => "Sichuan Yi",
                    "ik" => "Inupiaq",
                    "io" => "Ido",
                    "is" => "Icelandic",
                    "it" => "Italian",
                    "iu" => "Inuktitut",
                    "ja" => "Japanese",
                    "jv" => "Javanese",
                    "ka" => "Georgian",
                    "kg" => "Kongo",
                    "ki" => "Kikuyu",
                    "kj" => "Kwanyama",
                    "kk" => "Kazakh",
                    "kl" => "Kalaallisut",
                    "km" => "Khmer",
                    "kn" => "Kannada",
                    "ko" => "Korean",
                    "kr" => "Kanuri",
                    "ks" => "Kashmiri",
                    "ku" => "Kurdish",
                    "kv" => "Komi",
                    "kw" => "Cornish",
                    "ky" => "Kirghiz",
                    "la" => "Latin",
                    "lb" => "Luxembourgish",
                    "lg" => "Ganda",
                    "li" => "Limburgish",
                    "ln" => "Lingala",
                    "lo" => "Lao",
                    "lt" => "Lithuanian",
                    "lu" => "Luba-Katanga",
                    "lv" => "Latvian",
                    "mg" => "Malagasy",
                    "mh" => "Marshallese",
                    "mi" => "Maori",
                    "mk" => "Macedonian",
                    "ml" => "Malayalam",
                    "mn" => "Mongolian",
                    "mr" => "Marathi",
                    "ms" => "Malay",
                    "mt" => "Maltese",
                    "my" => "Burmese",
                    "na" => "Nauru",
                    "nb" => "Norwegian Bokmal",
                    "nd" => "North Ndebele",
                    "ne" => "Nepali",
                    "ng" => "Ndonga",
                    "nl" => "Dutch",
                    "nn" => "Norwegian Nynorsk",
                    "no" => "Norwegian",
                    "nr" => "South Ndebele",
                    "nv" => "Navajo",
                    "ny" => "Chichewa",
                    "oc" => "Occitan",
                    "oj" => "Ojibwa",
                    "om" => "Oromo",
                    "or" => "Oriya",
                    "os" => "Ossetian",
                    "pa" => "Panjabi",
                    "pi" => "Pali",
                    "pl" => "Polish",
                    "ps" => "Pashto",
                    "pt" => "Portuguese",
                    "qu" => "Quechua",
                    "rm" => "Raeto-Romance",
                    "rn" => "Kirundi",
                    "ro" => "Romanian",
                    "ru" => "Russian",
                    "rw" => "Kinyarwanda",
                    "sa" => "Sanskrit",
                    "sc" => "Sardinian",
                    "sd" => "Sindhi",
                    "se" => "Northern Sami",
                    "sg" => "Sango",
                    "si" => "Sinhala",
                    "sk" => "Slovak",
                    "sl" => "Slovenian",
                    "sm" => "Samoan",
                    "sn" => "Shona",
                    "so" => "Somali",
                    "sq" => "Albanian",
                    "sr" => "Serbian",
                    "ss" => "Swati",
                    "st" => "Southern Sotho",
                    "su" => "Sundanese",
                    "sv" => "Swedish",
                    "sw" => "Swahili",
                    "ta" => "Tamil",
                    "te" => "Telugu",
                    "tg" => "Tajik",
                    "th" => "Thai",
                    "ti" => "Tigrinya",
                    "tk" => "Turkmen",
                    "tl" => "Tagalog",
                    "tn" => "Tswana",
                    "to" => "Tonga",
                    "tr" => "Turkish",
                    "ts" => "Tsonga",
                    "tt" => "Tatar",
                    "tw" => "Twi",
                    "ty" => "Tahitian",
                    "ug" => "Uighur",
                    "uk" => "Ukrainian",
                    "ur" => "Urdu",
                    "uz" => "Uzbek",
                    "ve" => "Venda",
                    "vi" => "Vietnamese",
                    "vo" => "Volapuk",
                    "wa" => "Walloon",
                    "wo" => "Wolof",
                    "xh" => "Xhosa",
                    "yi" => "Yiddish",
                    "yo" => "Yoruba",
                    "za" => "Zhuang",
                    "zh" => "Chinese",
                    "zu" => "Zulu"
                ]
            ]
        ];
    }

    public function onRun() {
        $attributes = $this->getProperties();
        array_walk($attributes, function(&$value, $key) {
            switch ($value) {
                case '1':
                    $value = 'true';
                    break;

                case '0':
                    $value = 'false';
                    break;
                
                default:
                    $value = $value;
                    break;
            }
        });
        $this->attributes = HTML::attributes($attributes);
    }

}