<?php namespace Humweb\Breadcrumbs;

class Bootstrap4Presenter extends Presenter {

	public function getLink($item)
	{
		return '<li class="breadcrumb-item"><a href="'.$item['url'].'">'.$item['label'].'</a></li>';
	}

	public function getActiveLink($item)
	{
		return '<li class="breadcrumb-item active">'.$item['label'].'</li>';
	}
}
