<x-layout>
  <div class="container mt-3">
    
    <br>
    <!-- Nav pills -->
    <ul class="nav nav-pills justify-content-center" role="tablist">
      <li class="nav-item">
        <a class="nav-link fs-5 lead active mx-5" data-bs-toggle="pill" href="#antipasti">Antipasti</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5 lead mx-5" data-bs-toggle="pill" href="#primi">Primi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5 lead mx-5 " data-bs-toggle="pill" href="#secondi">Secondi</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-5 lead mx-5 text-decoration-none" data-bs-toggle="pill" href="#dolci">Dolci</a>
      </li>
    </ul>
    
    <!-- Tab panes -->
    
      <div class="tab-content my-5">
       
        <div id="antipasti" class="container tab-pane active"><br>
          <img class=" img-fluid" width="400" src="{{asset('media\antipasti\IMG-20230310-WA0000-removebg-preview.png')}}" alt="">
          <img class=" img-fluid " width="400" src="{{asset('media\antipasti\IMG-20230310-WA0010-removebg-preview.png')}}" alt="">
          <img class=" img-fluid imgCustom" src="{{asset('media\antipasti\IMG-20230310-WA0004-removebg-preview.png')}}" alt="">
        </div>
        
        <div id="primi" class="container tab-pane fade "><br>
          <img class="imgCustom img-fluid" src="{{asset('media\antipasti\IMG-20230310-WA0009-removebg-preview.png')}}" alt="">
          <img class=" mx-auto  img-fluid" width="400" src="{{asset('media\antipasti\IMG-20230310-WA0027.jpg')}}" width="500" alt="">
          <img class=" img-fluid" width="400" src="{{asset('media\antipasti\IMG-20230310-WA0006-removebg-preview.png')}}" alt="">
        </div>
        
        <div id="secondi" class="container tab-pane fade"><br>
          <img class=" img-fluid" width="400" src="{{asset('media\antipasti\IMG-20230310-WA0060-removebg-preview.png')}}" alt="">
          <img class=" img-fluid" width="300" height="400" src="{{asset('media\antipasti\IMG-20230310-WA0052-removebg-preview.png')}}" alt="">
          <img class="imgCustom img-fluid " src="{{asset('media\antipasti\IMG-20230310-WA0049-removebg-preview.png')}}" alt="">
        </div>
        
        <div id="dolci" class="container tab-pane fade"><br>
          <img class=" img-fluid" height="500" width="300" src="{{asset('media\antipasti\IMG-20230310-WA0043-removebg-preview.png')}}" alt="">
        </div>
        
      </div>
    </div>
  </div>
  
</x-layout>