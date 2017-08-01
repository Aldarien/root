<?php
use PHPUnit\Framework\TestCase;
use Proyect\Root\Root;

class RootTest extends TestCase
{
	private $proyect_name = 'root';
	private $current_dir;
	
	public function testBaseRootFunction()
	{
		$this->getCurrentDir();
		$this->assertEquals($this->getRoot(), $this->current_dir);
	}
	public function testSrcRootFunction()
	{
		$this->changeDir('src');
		$this->assertNotEquals($this->getRoot(), $this->current_dir);
	}
	private function getCurrentDir()
	{
		$this->current_dir = getcwd();
	}
	private function changeDir($dir)
	{
		chdir($dir);
		$this->getCurrentDir();
	}
	private function getRoot()
	{
		return Root::root($this->proyect_name);
	}
}
?>