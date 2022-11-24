<section>
    <a href="{{ route('couleur.index') }}">Back</a>
    <div class="container d-flex flex-column gap-3">
        <form action="{{ route('couleur.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Creer couleur</label>
         <input type="text" name="couleur">
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</section>