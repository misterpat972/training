@extends('layouts.app')


@section('content')
<div class="container mt-4">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        
    @endif
<div class="row">
   <form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Mon titre</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Entrez votre titre">
        </div>
        <div class="mb-3">
        <label for="content" class="form-label">Mon contenu</label>
        <textarea class="form-control" name="content" id="content" placeholder="Entrez votre contenu"></textarea>
        </div> 
        {{-- <div class="mb-3">
            <label for="image" class="form-label">fichier image</label>
            <input type="file" name="image" class="form-control" id="file" aria-describedby="titleHelp" placeholder="Entrez votre titre">
        </div>        --}}
        <button type="submit" class="btn btn-primary">Sauvegarder l'article</button>
    </form> 
</div>
</div>
@endsection
