<?php
namespace Proyect\Root;

class Root
{
	/**
	 * gives base path for your proyect.
	 * eg. <code>$proyect_name/public/index.php</code> calls for <code>$proyect_name/bootstrap/autoload.php</code>,
	 * you just need to
	 * 
	 * <code>include root() . '/bootstrap/autoload.php'</code>
	 * 
	 * @param string $proyect_name
	 * @return string
	 */
	public static function root(string $proyect_name)
	{
		$dir = realpath(__DIR__);
		$ini = strpos($dir, $proyect_name) + strlen($proyect_name);
		$path = substr($dir, $ini);
		$cnt = substr_count($path, DIRECTORY_SEPARATOR);
		$root = DIRECTORY_SEPARATOR;
		for ($i = 0; $i < $cnt; $i ++) {
			$root .= '..' . DIRECTORY_SEPARATOR;
		}
		
		return realpath($dir . $root);
	}
}
?>
