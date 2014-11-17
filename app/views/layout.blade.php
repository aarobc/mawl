<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Assets</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
      <!-- custom css -->
      <link rel="stylesheet" href="/assets/blog/public/css/custom.css">

   </head>

   <body>
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">Asset Manager</a>
         </div>
         <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
               @if(isset($asset->id) && strlen($asset->id))
               <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">This<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
					 <li><a href="{{ URL::route('edit', $asset->tag) }}">Edit</a></li>
                     <li><a href="#">Duplicate</a></li>
                     <li><a href="#">Delete</a></li>
                  </ul>
               </li>
               @endif
               <li><a href="{{ route('newUser') }}">New</a></li>
               <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">System<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                  <li><a href="#">History</a></li>
                  <li><a href="{{ route('categories') }}">Categories</a></li>
                  <li><a href="{{ route('statuses') }}">Statuses</a></li>
                  <li><a href="{{ route('locations') }}">Locations</a></li>
               </ul>
               </li>
            </ul>
    {{ Form::open(array('route' => 'search', 'class' => 'navbar-form navbar-right')) }}
    {{ Form::text('query', NULL, array('class' => 'form-control', 'placeholder' => 'Search')) }}
               <button type='submit' class="btn btn-success">Search</button>
             {{ Form::close() }}
         </div><!--/.nav-collapse -->
      </div>
      </nav>

      <div class="container">
      @yield('content')
      </div>
      <!-- body stuff here -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="/assets/blog/public/js/script.js"></script>
   </body>
</html>
