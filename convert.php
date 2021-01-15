<?php

$decode_word = function($string) {
           return strtr($string, array(
                'â€¢' => '•',
                'â€œ' => '“',
                'â€' => '”',
                'â€˜' => '‘',
                'â€™' => '’',
                'Ý¾' => 'İ',
                'Ý' => 'İ',
                'Ä°' => 'İ',
                'Ã' => 'İ',
                'â€¹' => 'İ',
                '&Yacute;' => 'İ',
                'ý' => 'ı',
                'Ä±' => 'ı',
                'Â±' => 'ı',
                'Ã½' => 'ı',
                'Ã›' => 'ı',
                'â€º' => 'ı',
                '&yacute;' => 'ı',
                'Þ' => 'Ş',
                'Åž' => 'Ş',
                'Ã…Å¸' => 'Ş',
                'Ã¥Ã¿' => 'Ş',
                '&THORN;' => 'Ş',
                'þ' => 'ş',
                'Å?' => 'ş',
                'ÅŸ' => 'ş',
                '&thorn;' => 'ş',
                'Ð' => 'Ğ',
                'Äž' => 'Ğ',
                'ð' => 'ğ',
                'Ä?' => 'ğ',
                'ÄŸ' => 'ğ',
                '&eth;' => 'ğ',
                'Ã‡' => 'Ç',
                'Ã?' => 'Ç',
                '&Ccedil;' => 'Ç',
                'Ã§' => 'ç',
                '&ccedil;' => 'ç',
                'Ã–' => 'Ö',
                '&Ouml;' => 'Ö',
                'Ã¶' => 'ö',
                '&ouml;' => 'ö',
                'Ãœ' => 'Ü',
                '&Uuml;' => 'Ü',
                'ÃƒÂ¼' => 'ü',
                'Ã£Â¼' => 'ü',
                'Ã¼' => 'ü',
                '&uuml;' => 'ü',
            ));
        };
        
        
        echo $decode_word('Bej Åžerit DetaylÄ± Telefon');
