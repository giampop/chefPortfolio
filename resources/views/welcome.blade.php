<x-layout>

<div class="container-fluid  ">
    <div class="row ">
        @if (session('satus'))
        <div class="class alert alert-success">
            {{session('status')}}
        </div>
        @endif
        <div class="col-12 col-md-6  ">
                       <img class="p-5 rounded-circle img-fluid " src="{{asset('media/mazzancolle.jpg')}}" width="700" alt="">
                 
           
        </div>
        <div class="col-12 col-md-6 text-center ">
             <p class="p-5  fs-2 fst-italic mx-5 sfondo rounded-4 ">"Non avevo ben chiaro quale fosse la mia passione, poi pian piano ho trovato modo di comunicare attraverso il cibo"</p>
           </div>
            
        </div>
    </div>
</div>

</x-layout>