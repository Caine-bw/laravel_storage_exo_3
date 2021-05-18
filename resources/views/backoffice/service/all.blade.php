@extends('layout.app')
@section('content')

    <div class="container">
        <h1 class="text-danger text-center my-5" >Service</h1>
        <a href={{ route("services.create") }} class="btn btn-success "> Créer</a>
    
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Description</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
   
            <tr>
              <th scope="row">{{ $service->id }}</th>
              <td><a href="/services/{{ $service->id }}"><i class="fas fa-2x {{ $service->icone}}"></i></a></td>
              <td>{{ $service->titre }}</td>
              <td>{{ $service->description }}</td>
              <td>
                  <div class="d-flex ">
                    <a href="/services/{{ $service->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                    <form action="/services/{{ $service->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                    </form>
                  </div>
              </td>

            </tr>
            @endforeach
          
        </tbody>
      </table>
      <div>
          {{ $services->links() }}
      </div>
    </div>
@endsection