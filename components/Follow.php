<?php namespace Alxy\Twitter\Components;

use Cms\Classes\ComponentBase;
use HTML;

class Follow extends ComponentBase
{

    public $user;
    public $attributes;

    public function componentDetails()
    {
        return [
            'name'        => 'Follow Button',
            'description' => 'Display a twitter Follow button.'
        ];
    }

    public function defineProperties()
    {
        return [
            'user' => [
                 'title'             => 'User to follow',
                 'description'       => 'The username of the user to follow.',
                 'type'              => 'string',
            ],
            'data-size' => [
                 'title'             => 'Button Size',
                 'description'       => 'The size of the button can render in either "medium", which is the default size, or in "large" - which is the larger button.',
                 'default'           => 'medium',
                 'type'              => 'dropdown',
                 'options'           => [
                    'medium' => 'medium',
                    'large' => 'large'
                 ]
            ],
            'data-width' => [
                 'title'             => 'Width',
                 'description'       => 'You can specify the width of the Follow Button (in pixels or percentage).',
                 'type'              => 'string',
                 'validationPattern' => '^(\d+(px|%))?$',
                 'validationMessage' => 'The width must be specified in either pixels or percentage.'
            ],
            'data-align' => [
                 'title'             => 'Alignment',
                 'description'       => 'You can specify the alignment of the Follow Button.',
                 'default'           => 'left',
                 'type'              => 'dropdown',
                 'options'           => [
                    'left' => 'left',
                    'right' => 'right'
                 ]
            ],
            'data-show-count' => [
                 'title'             => 'Followers count display',
                 'description'       => 'By default, the User\'s followers count is not displayed with the Follow Button.',
                 'default'           => 0,
                 'type'              => 'checkbox'
            ],
            'data-show-screen-name' => [
                 'title'             => 'Show Screen Name',
                 'description'       => 'The user\'s screen name shows up by default, but you can opt not to show the screen name in the button.',
                 'default'           => 1,
                 'type'              => 'checkbox'
            ],
            'data-dnt' => [
                 'title'             => 'Opt-out of tailoring Twitter',
                 'description'       => 'Twitter buttons on your site can help us tailor content and suggestions for Twitter users. If you want to opt-out of this feature, check this option.',
                 'default'           => 0,
                 'type'              => 'checkbox'
            ],
            'data-lang' => [
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
        $attributes = array_except($this->getProperties(), ['user']);
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
        $this->user = $this->property('user');
    }

}