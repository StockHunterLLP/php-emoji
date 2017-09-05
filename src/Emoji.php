<?php

namespace Biang\Emoji;

/**
 * simple emoji library
 *
 * @author biangbiang <djchurch007@gmail.com>
 */
class Emoji{
    /**
     * Class constructor.
     *
     * @param  void
     * @return void
     */
    public function __construct() {}

    /**
     * remove emoji from text
     *
     * @param  string $text input text
     * @return string
     */
    public function removeEmoji($text) {
        $cleanText = "";

        // Match Miscellaneous Symbols
        $regexMisc = '/[\x{2600}-\x{26FF}]/u';
        $cleanText = preg_replace($regexMisc, '', $text);

        // Match Dingbats
        $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
        $cleanText = preg_replace($regexDingbats, '', $cleanText);

        // Match Miscellaneous Symbols and Pictographs
        $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
        $cleanText = preg_replace($regexSymbols, '', $cleanText);

        // Match Emoticons
        $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
        $cleanText = preg_replace($regexEmoticons, '', $cleanText);

        // Match Ornamental Dingbats
        $regexTransport = '/[\x{1F650}-\x{1F67F}]/u';
        $cleanText = preg_replace($regexTransport, '', $cleanText);

        // Match Transport And Map Symbols
        $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
        $cleanText = preg_replace($regexTransport, '', $cleanText);

        // Match Supplemental Symbols and Pictographs
        $regexTransport = '/[\x{1F900}-\x{1F9FF}]/u';
        $cleanText = preg_replace($regexTransport, '', $cleanText);

        return $cleanText;
    }

    /**
     * transform emoji to string（only process 4-byte emoji）
     *
     * @param  array  $transformDict transform dict
     * @param  string $text          input text
     * @return string
     */
    public function transformEmoji($transformDict, $text) {
        $pattern = '/[\x{1F300}-\x{1F6FF}\x{1F900}-\x{1F9FF}]/u';
        $matchResult = preg_match_all($pattern, $text, $matches);
        if ($matchResult > 0) {
            foreach ($matches[0] as $k => $v) {
                $replaceStr = '';
                if ( ! empty($transformDict[$v])) {
                    // match success
                    $replaceStr = $transformDict[$v];
                } else {
                    // match fail
                    $replaceStr = $v;
                }
                // replace emoji by string
                $text = str_replace($v, $replaceStr, $text);
            }
        }
        return $text;
    }

    /**
     * transform emoji to utf-8
     *
     * @param  string $emoji input emoji
     * @return string
     */
    public function emojiToUtf8($emoji) {
        $target = '';
        $len = strlen($emoji);
        for ($i = 0; $i < $len; $i ++) {
            $temp = strtoupper(dechex(ord($emoji[$i])));
            $target .= "\x" . $temp;
        }
        return $target;
    }
}

