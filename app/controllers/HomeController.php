<?php

   class HomeController extends BaseController {

      /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
      */
      private function makeForm(){

         $elements = array();

         $statuses = Status::all();
         foreach($statuses as $status){
            $elements['status'][$status->id] = $status->name;
         }

         $locations = Location::all();
         foreach($locations as $loc){
            $elements['location'][$loc->id] = $loc->name;
         }

         $categories = Category::all();
         $catray = array();
         foreach($categories as $cat){
            $elements['categories'][$cat->id] = $cat->name;
         }
         return $elements;

      }


      public function newUser()
      {

         $ments = $this->makeForm();
         $dummy = new Dummy();
         return View::make('edit')->
         with('ments', $ments)->
         with('asset', $dummy);

      }

      public function search(){
         $query = Input::get('query');
         $assets = Asset::where('tag', 'like', "%$query%")->get();
         return View::make('assets')->with('assets', $assets);
      }

      public function edit($tag){
         $ments = $this->makeForm();

         //$id = Input::get('id');
         //$asset = Asset::find($id);
		 $asset = Asset::where('tag', $tag)->first();

         return View::make('edit')->
         with('asset', $asset)->
         with('route', 'editAsset')->
         with('ments', $ments);
      }

	  public function color($color){

         //$color = Input::get('color');
		 echo "$color<br>";
		 echo "bacon pancakes";
	  }

	  public function rmLocation($id){
		 //TODO: figure out proper db schema so we dont have to check this way
		 echo $id;
		 echo " ";
		 $assets = Asset::where('location_id', $id)->get();

		 if(count($assets)){
			echo "nope";
		 }
		 else{
		 $location = Location::find($id);
		 $location->delete();
		 }
	  }

   }
