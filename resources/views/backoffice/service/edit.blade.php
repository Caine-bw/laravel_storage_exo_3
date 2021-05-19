@extends('layout.app')
@section('content')
    <section class="container shadow justify-content-center ">
        <h2 class="text-center my-4">Édition Service</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/services/{{ $service->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
              <label class="form-label">Icone</label>
              <select class="form-control fw-bold" name="icone">

                    <option value="fas fa-plane" {{ $service->icone === 'fas fa-plane' ? 'selected' : '' }}>
                         Voyage</option>

                    <option value="fas fa-utensils" {{ $service->icone === 'fas fa-utensils' ? 'selected' : '' }}>
                         Restaurant</option>

                    <option value="fas fa-cocktail" {{ $service->icone === 'fas fa-cocktail' ? 'selected' : '' }}>
                         Nightclubs</option>

                    <option value="fas fa-hotel" {{ $service->icone === 'fas fa-hotel' ?  'selected' : '' }}>
                         Hotel</option>

                    <option value="fas fa-hat-cowboy" {{ $service->icone === 'fas fa-hat-cowboy' ? 'selected' : '' }}>
                         Loisirs</option>
              </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Titre</label>
                <input value="{{ $service->titre }}" type="text" class="form-control" name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <input value="{{ $service->description }}" type="text" class="form-control" name="description">
            </div>
            <button type="submit" class="btn btn-primary mb-2 w-100">Submit</button>
          </form>
    </section>
@endsection

