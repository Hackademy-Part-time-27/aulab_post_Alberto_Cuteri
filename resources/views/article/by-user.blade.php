<x-layout>
    <div class="container-fluid p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">{{ $user->name }}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{ Storage::url($article->image) }}" class="card-img-top" alt="Immagine dell'articolo: {{$article->title}}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-subtitle">{{ $article->subtitle }}</p>
                </div>
                    <p class="fs-5">autore:
                        <a href="{{route('article.byUser', $article->user)}}" class="text-capitalize fw-bold text-muted">{{ $article->user->name }}</a>
                    </p>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br>
                            da {{$article->user->name}}</p>
                        <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi</a>
                    </div>
                </div>
            </div>
        @endforeach    
    </div>
</div>
</x-layout>