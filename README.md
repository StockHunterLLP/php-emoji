# php-emoji

## Install

```bash
composer require biangbiang/emoji
```

## Usage

```php
<?php
require 'vendor/autoload.php';

$emoji = new Biang\Emoji\Emoji();

$text  = 'hello ☺😘😜🤓😶🙄😟😕😫😱😦😪😲🤕😁😅😊😋😗😝😎😐🤔😠🙁😩😨😧😓🤐😴😂😆🙂🙂😌😙😛🤗😑😳😡😣😤😰😢😭😷 world';
$smile = '🙂';

// transform emoji to utf-8
$utf8Text = $emoji->emojiToUtf8($smile);

// remove emoji from text
$removeText = $emoji->removeEmoji($text);

// transform emoji to string with transformDict
$transformDict = array(
    "\xF0\x9F\x99\x82" => "[微笑]",
    "\xF0\x9F\x98\x84" => "[嘻嘻]",
    "\xF0\x9F\x98\xAC" => "[哈哈]",
    "\xF0\x9F\x98\x87" => "[可怜]",
    "\xF0\x9F\x98\x86" => "[挖鼻]" ,
    "\xF0\x9F\x98\xA5" => "[吃惊]",
    "\xF0\x9F\x98\x93" => "[吃惊]",
    "\xF0\x9F\x99\x84" => "[害羞]",
    "\xF0\x9F\x98\x9C" => "[挤眼]",
    "\xF0\x9F\x98\x9D" => "[挤眼]",
    "\xF0\x9F\x98\x9B" => "[挤眼]",
    "\xF0\x9F\xA4\x90" => "[闭嘴]",
    "\xF0\x9F\x98\xB7" => "[闭嘴]",
    "\xF0\x9F\x98\x90" => "[鄙视]",
    "\xF0\x9F\x98\xB5" => "[爱你]",
    "\xF0\x9F\x98\xAD" => "[泪]",
    "\xF0\x9F\x98\x81" => "[偷笑]",
    "\xF0\x9F\x98\x9A" => "[亲亲]",
    "\xF0\x9F\x98\x99" => "[亲亲]",
    "\xF0\x9F\x98\x96" => "[生病]",
    "\xF0\x9F\x98\x8A" => "[太开心]" ,
    "\xF0\x9F\x98\x81" => "[白眼]",
    "\xF0\x9F\x98\x97" => "[右哼哼]",
    "\xF0\x9F\x98\x9A" => "[左哼哼]",
    "\xF0\x9F\x98\x91" => "[嘘]",
    "\xF0\x9F\x98\xA2" => "[衰]",
    "\xF0\x9F\x98\xB2" => "[委屈]",
    "\xF0\x9F\x98\xA4" => "[吐]",
    "\xF0\x9F\x98\xB4" => "[哈欠]",
    "\xF0\x9F\x98\x9D" => "[抱抱]",
    "\xF0\x9F\x98\xA1" => "[怒]",
    "\xF0\x9F\xA4\x94" => "[疑问]",
    "\xF0\x9F\x98\x8B" => "[馋嘴]",
    "\xF0\x9F\x98\x94" => "[思考]",
    "\xF0\x9F\x98\x85" => "[汗]",
    "\xF0\x9F\x98\xAF" => "[困]",
    "\xF0\x9F\x98\xAA" => "[睡]",
    "\xF0\x9F\x98\xB0" => "[睡]",
    "\xF0\x9F\xA4\x91" => "[钱]",
    "\xF0\x9F\x98\xAE" => "[失望]",
    "\xF0\x9F\x98\x8E" => "[酷]",
    "\xF0\x9F\x98\x8d" => "[色]",
    "\xF0\x9F\x98\x92" => "[哼]",
    "\xF0\x9F\xA4\x97" => "[鼓掌]",
    "\xF0\x9F\x98\xA8" => "[晕]",
    "\xF0\x9F\x98\x9F" => "[悲伤]",
    "\xF0\x9F\x98\xAB" => "[悲伤]",
    "\xF0\x9F\x98\xA9" => "[悲伤]",
    "\xF0\x9F\x98\x8C" => "[悲伤]",
    "\xF0\x9F\x98\xA0" => "[抓狂]",
    "\xF0\x9F\x98\x95" => "[黑线]",
    "\xF0\x9F\x98\x8F" => "[黑线]",
    "\xF0\x9F\x99\x81" => "[阴险]",
    "\xF0\x9F\x98\xA3" => "[怒骂]",
    "\xF0\x9F\x98\xA6" => "[心]",
    "\xF0\x9F\x98\x9E" => "[伤心]",
    "\xF0\x9F\x98\x92" => "[伤心]",
    "\xF0\x9F\x98\xB6" => "[猪头]",
    "\xF0\x9F\x98\xA7" => "[神马]",
    "\xF0\x9F\xA4\x93" => "[去旅行]",
    "\xF0\x9F\x98\x89" => "[最右]",
    "\xF0\x9F\x98\xB3" => "[doge]",
    "\xF0\x9F\x98\xB1" => "[喵喵]",
    "\xF0\x9F\x98\x82" => "[笑cry]",
    "\xF0\x9F\xA4\x92" => "[芒果得意]",
    "\xF0\x9F\x99\x83" => "[倒]",
    "\xF0\x9F\xA4\x95" => "[受伤]"
);
$transformText = $emoji->transformEmoji($transformDict, $text);
```

