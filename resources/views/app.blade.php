<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />  
    @routes 
    @vite('resources/js/app.js')
    @inertiaHead
  </head>
    @inertia 
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
  <script src="{{ asset('admin_assets/js/scripts.bundle.js') }}"></script>
  <script src="{{ asset('admin_assets/js/plugins.bundle.js') }}"></script> 
  <script src="{{ asset('admin_assets/js/app.js') }}"></script> 
</html>