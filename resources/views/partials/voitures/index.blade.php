<section>
 
  <div class="container">
    <div class="my-5">
      <a href="{{ route('voiture.create') }}" >Create</a>
    </div>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">marque</th>
          <th scope="col">annee</th>
          <th scope="col">couleur</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($voitures as $car )
        <tr>
          <th scope="row">{{ $car->id  }}</th>
          <th scope="row">{{ $car->marque  }}</th>
          <th scope="row">{{ $car->annee  }}</th>
          <th scope="row">{{ $car->couleur->couleur}}</th>
          <th></th>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>