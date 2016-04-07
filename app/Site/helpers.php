<?php

/**
 * @return string
 */
function i18n_date_format() {

	switch(I18n::getCurrentLocale())
	{
		case 'ru':
			$format = 'd.m.Y';
			break;
		default:
			$format = 'm/d/Y';
			break;
	}

	return $format;
}