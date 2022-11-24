<section>
    <a href="{{ route('voiture.index') }}">Back</a>
    <div class="container d-flex flex-column gap-3">
        <form action="{{ route('voiture.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">marque</label>
         <input type="text" name="marque">
         <label for="exampleInputEmail1" class="form-label">année</label>
         <input type="number" name="annee">
         <label for="exampleInputEmail1" class="form-label">couleur</label>

         <select name="couleur_id" id="">
          @foreach ($couleurs as $couleur)
            <option value="{{ $couleur->id }}">{{ $couleur->couleur }}</option>
          @endforeach
         </select>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</section>