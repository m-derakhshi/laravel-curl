<?php namespace mderakhshi\Curl;


class CurlService
{
	
	
	
	/**
	 * @param $url string   The URL to which the request is to be sent
	 *
	 * @return \mderakhshi\Curl\CurlBuilder
	 */
	public function to($url) {
		$builder = new CurlBuilder();
		
		return $builder->to($url);
	}
	
}
