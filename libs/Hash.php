<?php

class Hash
{
	
	/**
	 *
	 * @param string $algo The algorithm (md5, sha1, whirlpool, etc)
	 * @param string $data The data to encode
	 * @param string $salt The salt (This should be the same throughout the system probably)
	 * @return string The hashed/salted data
	 */
        private static $salt = "5kkQze2Ukj";
        private static $algo = "md5";
	public static function create($data)
	{
		
		$context = hash_init(self::$algo, HASH_HMAC, self::$salt);
		hash_update($context, $data);
		//return md5($data);
		return hash_final($context);		
	}
	
}

?>