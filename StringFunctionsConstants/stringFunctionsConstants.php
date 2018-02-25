<?php

echo 'strrev(abcdefg): '.strrev("abcdefg")."<br />";
echo 'strlen(123 56 89): '.strlen("123 56 89")."<br />";
echo 'str_word_count(These are some words): '.str_word_count("These are some words")."<br />";
echo 'strpos(Find the needle in the haystack, needle): '.strpos("Find the needle in the haystack", "needle")."<br />";
echo 'str_replace(words, chars, These are some words): '.str_replace("words","chars","These are some words")."<br />";
// case-insensitive const name
define("MR_CONST", "I am case-insensitive", true);
echo 'define(CONST, I am case-insensitive, true): '.mr_const."<br />";
define("MR_CONST_IN", "I am not case-insensitive", false);
echo 'define(MR_CONST_IN, I am not case-insensitive, false): '.MR_CONST_IN."<br />";