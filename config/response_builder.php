<?php

/**
 * Laravel API Response Builder - configuration file
 *
 * See docs/config.md for detailed documentation
 *
 * @author    Marcin Orlowski <mail (#) marcinOrlowski (.) com>
 * @copyright 2016-2021 Marcin Orlowski
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/MarcinOrlowski/laravel-api-response-builder
 */

use App\ApiCode;

return [
	/*
	|-------------------------------------------------------------------------------------------------------------------
	| Code range settings
	|-------------------------------------------------------------------------------------------------------------------
	*/
	'min_code'          => 100,
	'max_code'          => 1024,

	/*
	|-------------------------------------------------------------------------------------------------------------------
	| Error code to message mapping
	|-------------------------------------------------------------------------------------------------------------------
	*/
	'map'               => [
        ApiCode::INVALID_CREDENTIALS => "api.invalid_credentials"
	],
];
