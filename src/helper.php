<?php

function Pinyin( $string = '', $link = '', $type = 'permalink' ) {
	$pinyin = new Jun\Pinyin\Pinyin();
	if ( $type == 'name' ) {
		if ( ! in_array( $link, [ PINYIN_NONE, PINYIN_ASCII, PINYIN_UNICODE ] ) ) {
			$link = PINYIN_NONE;
		}
	} elseif ( $type == 'sentence' ) {
		if ( ! empty( $link ) ) {
			$link = true;
		}
	}

	return $pinyin->$type( $string, $link );
}