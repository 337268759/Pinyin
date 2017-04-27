<?php

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