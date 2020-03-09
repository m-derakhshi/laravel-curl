<?php

use mderakhshi\Curl\CurlService;

/**
 * @param  string  $url
 *
 * @return \mderakhshi\Curl\CurlBuilder
 */
function curl(string $url) {
	return (new CurlService())->to($url);
}
