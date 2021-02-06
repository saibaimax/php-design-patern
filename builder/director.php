<?php

require_once 'builder.php';

class Director
{
	private $builder;
	private $url;

	public function __construct(Builder $builder, $url)
	{
		$this->builder = $builder;
		$this->url = $url;
	}

	public function getNews()
	{
		$news_list = $this->builder->parse($this->url);
		return $news_list;
	}
}

