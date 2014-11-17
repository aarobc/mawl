<?php

class JSONController extends BaseController {

   function makeTag($category_id){
	$category = Category::find($category_id);	  
	$prefix = $category->prefix;
	$asset = Asset::has('tag')->get();
	//$asset = Asset::has('tag', 'LIKE', "$prefix%")->
	//orderBy('tag', 'DESC')->
	//first();

	var_dump($asset);

   }

}
