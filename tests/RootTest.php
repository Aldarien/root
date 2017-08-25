<?php
use PHPUnit\Framework\TestCase;
use Proyect\Root\Root;

class RootTest extends TestCase
{
	private $proyect_name = 'root';
	private $current_dir;
	
	public function testBaseRoot()
	{
		$this->getCurrentDir();
		$this->assertEquals($this->getRoot(), $this->current_dir);
		$this->assertEquals($this->getBaseRoot(), $this->current_dir);
	}
	public function testBaseRootFunction()
	{
		$this->getCurrentDir();
		$this->assertEquals($this->getFRoot(), $this->current_dir);
		$this->assertEquals($this->getFBaseRoot(), $this->current_dir);
	}
	public function testSrcRoot()
	{
		$this->changeDir('src');
		$this->assertEquals(realpath($this->getRoot() . '/src'), $this->current_dir);
		$this->assertEquals(realpath($this->getBaseRoot() . '/src'), $this->current_dir);
	}
	public function testSrcRootFunction()
	{
		$this->changeDir('src');
		$this->assertEquals(realpath($this->getFRoot() . '/src'), $this->current_dir);
		$this->assertEquals(realpath($this->getFBaseRoot() . '/src'), $this->current_dir);
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
	private function getBaseRoot()
	{
		return Root::root();
	}
	private function getFRoot()
	{
		return root($this->proyect_name);
	}
	private function getFBaseRoot()
	{
		return root();
	}
}
?>