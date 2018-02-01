<?php 

class _hashing_{
	public function get_hash($text){
		$pecah_kata = str_split(strtolower($text));
		$banyak = strlen($text);
		$kata = $text;
		$data_hash = array(
			"a" => "md2",
			"b" => "md4",
			"c" => "sha1",
			"d" => "sha224",
			"e" => "sha256",
			"f" => "sha512",
			"g" => "sha384",
			"h" => "ripemd128" ,
			"i" => "ripemd160" ,
			"j" => "ripemd256",
			"k" => "ripemd320",
			"l" => "whirlpool",
			"m" => "tiger128,3",
			"n" => "tiger160,3",
			"o" => "tiger192,3",
			"p" => "tiger128,4",
			"q" => "tiger160,4",
			"r" => "tiger192,4",
			"s" => "snefru",
			"t" => "snefru256",
			"u" => "gost",
			"v" => "gost-crypto",
			"w" => "adler32",
			"x" => "crc32",
			"z" => "crc32b",
			" " => "md5"
		);
		for ($i = 0; $i < $banyak ; $i++) {
			if ($data_hash[$pecah_kata[$i]] == NULL) {
				$kata = hash(md5, $kata);
			}else{
				$kata = hash($data_hash[$pecah_kata[$i]], $kata);
			}
		}
		return $kata;
		// return hash($data_hash[$pecah_kata[0]], $text);
	}
}
$hash = new _hashing_;
print_r ($hash->get_hash('password'));
?>