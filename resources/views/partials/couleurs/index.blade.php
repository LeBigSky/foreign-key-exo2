<section>
 
  <div class="container">
    <div class="my-5">
      <a href="{{ route('couleur.create') }}" >Create</a>
    </div>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">couleurs</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($couleurs as $color )
        <tr>
          <th scope="row">{{ $color->id  }}</th>
          <td> {{ $color->couleur }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>