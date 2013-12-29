<?php namespace Humweb\Breadcrumbs\Tests;

use Humweb\Breadcrumbs\Breadcrumb;

class BreadcrumbsTest extends \PHPUnit_Framework_TestCase {


	public function testAddingCrumbs()
	{
		$b = new Breadcrumb();

		$b->add('Home', 'home/')
		  ->add('About');

		$this->assertEquals(2, $b->count());
	}

	public function testPresenters()
	{
		$links = [
			['label' => 'Home', 'url' => 'home/'],
			['label' => 'About', 'url' => '']
		];

		$b = new Breadcrumb($links);

		$bs3 = '<ol class="breadcrumb"><li><a href="home/">Home</a></li><li class="active">About</li></ol>';
		$foundation = '<ul class="breadcrumbs"><li><a href="home/">Home</a></li><li class="current">About</li></ul>';
		
		$this->assertEquals($bs3, $b->render());
		$this->assertEquals($foundation, $b->render('foundation'));
		
	}
	
	public function testClearBreadcrumbs()
	{
		$b = new Breadcrumb();

		$b->add('Home', 'home/')
		  ->add('About');
		
		$this->assertEquals(2, $b->count());
		$b->clear();
		$this->assertEquals(0, $b->count());
	}



}