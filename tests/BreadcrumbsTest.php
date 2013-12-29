<?php namespace Humweb\Breadcrumbs\Tests;

class BreadcrumbsTest extends \PHPUnit_Framework_TestCase {


	public function testAddingCrumbs()
	{
		$b = new Breadcrumb();

		$b->add('Home', 'home/')
		  ->add('About');

		$this->assertEquals(2, $b->count());
	}

}