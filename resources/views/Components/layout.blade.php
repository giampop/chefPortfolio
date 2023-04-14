<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Chef Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital@0;1&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])

  </head>
  <body>
      {{-- navbar --}}
        <x-navbar/>

       <main class="min-vh-100 mt-5">
        {{$slot}}
       </main>

       {{-- footer --}}
       <x-footer/>
   

    
  </body>
</html>