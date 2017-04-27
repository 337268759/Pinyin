<?php

/**
 * 将字符串转为拼音
 *
 * @param string $String 中文字符串
 * @param string $linkString 链接字符串
 * @param string $type 翻译类型
 *
 * @return mixed
 */
function Pinyin( $String = '', $linkString = '', $type = 'permalink' ) {

	$pinyin = new Jun\Pinyin\Pinyin();

	$type = strtolower( $type );

	if ( $type == 'name' OR $type == 'convert' ) {
		if ( ! in_array( $linkString, [ PINYIN_NONE, PINYIN_ASCII, PINYIN_UNICODE ] ) ) {
			$linkString = PINYIN_NONE;
		}
	} elseif ( $type == 'sentence' ) {
		if ( ! empty( $linkString ) ) {
			$linkString = true;
		} else {
			$linkString = false;
		}
	}

	return $pinyin->$type( $String, $linkString );
}