<?php

class FormController extends BaseController {

   public function saveNote($id){
			
	//$id = Input::get('id');
	$asset = Asset::find($id);

	$note = new Note;
	$note->text = Input::get('text');
	$note->asset()->associate($asset);
	$note->save();

 	 return View::make('asset')->with('asset', $asset);

   }

   public function saveAsset()
   {

	 $asset = new Asset();
	 $asset->tag = Input::get('tag');
 	 $asset->description = Input::get('description');
 	 $asset->status_id = Input::get('status');
 	 $asset->location_id = Input::get('location');
 	 $asset->category_id = Input::get('category');
 	 $asset->save();

 	 return View::make('asset')->with('asset', $asset);
   }

   public function updateAsset($id)
   {
	 $asset = Asset::find($id);
	 // work around because it hates it if you set it to the same thing
	 if($asset->tag !== Input::get('tag')){
		$asset->tag = Input::get('tag');
	 }
 	 $asset->description = Input::get('description');
 	 $asset->status_id = Input::get('status');
 	 $asset->location_id = Input::get('location');
 	 $asset->category_id = Input::get('category');
 	 $asset->save();

 	 return View::make('asset')->with('asset', $asset);
   }

   public function users()
   {
 	 $user = new User;
 	 $user->name = Input::get('username');
 	 $user->email = Input::get('email');
 	 $user->save();

 	 $users = User::all();
 	 return View::make('users')->with('users', $users);
 	 //$name = Input::get('username');
 	 //return $name;
   }

   public function categories()
   {
 	 //return View::make('bacon pancakes');
 	 $category = new Category;
 	 $category->name = Input::get('name');
 	 $category->prefix = Input::get('prefix');
 	 $category->save();

 	 $categories = Category::all();
 	 return View::make('categories')->with('categories', $categories);
 	 //$name = Input::get('username');
 	 //return $name;
   }

   public function statuses()
   {
 	 //return View::make('bacon pancakes');
 	 $status = new Status;
 	 $status->name = Input::get('name');
 	 $status->save();

 	 $statuses = Status::all();
 	 return View::make('statuses')->with('statuses', $statuses);
 	 //$name = Input::get('username');
 	 //return $name;
   }

   public function locations()
   {
 	 $location = new Location;
 	 $location->name = Input::get('name');
 	 $location->save();

 	 $locations = Location::all();
 	 return View::make('locations')->with('locations', $locations);
   }

}
