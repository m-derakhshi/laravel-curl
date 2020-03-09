<?php namespace mderakhshi\Curl\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class Curl
 * @method static \mderakhshi\Curl\CurlBuilder to(string $url)
 *
 * @package mderakhshi\Curl\Facades
 */
class Curl extends Facade
{
	
	/**
	 * @return string
	 */
	protected static function getFacadeAccessor() {
		return 'Curl';
	}
	
}
