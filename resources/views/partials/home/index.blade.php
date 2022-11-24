<section>

<div class="div">
    <a href="{{ route('couleur.index') }}">couleurs</a>
    <a href="{{ route('voiture.index') }}">voitures</a>
</div>
    <div class="container">
        <div>
            @foreach ($couleurs as $couleur )
             <div class="d-flex">
               <h2 class="border">{{ $couleur->couleur }}</h2>   
             </div>
            
         
         <ul class="d-flex flex-column">
            @foreach ($couleur->voiture as $car )
             <li>{{ $car->marque }}    </li> 
             @endforeach 
         </ul>
     
         @endforeach  
         </div>
    </div>
</section>