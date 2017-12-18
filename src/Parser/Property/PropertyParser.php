<?php

namespace JeroenDesloovere\VCard\Parser\Property;

class PropertyParser
{
    /**
     * Unescape newline characters according to RFC2425 section 5.8.4.
     * This function will replace escaped line breaks with PHP_EOL.
     *
     * @link http://tools.ietf.org/html/rfc2425#section-5.8.4
     * @param  string $text
     * @return string
     */
    protected function unescape($text): string
    {
        return str_replace("\\n", PHP_EOL, $text);
    }
}