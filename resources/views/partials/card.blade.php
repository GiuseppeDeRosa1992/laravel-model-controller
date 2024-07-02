<section>
    <div class="text-center px-2 row m-0">
        {{-- CICLO DENTRO MOVIES CHE PRENDO DA PAGECONTROLLER --}}
        @foreach ($movies as $movie)
            <div class="col-4 mt-3">
                <div class="card p-0 h-100">
                    <div class="row g-0 m-0">
                        <div class="col-md-4">
                            <img src="{{ $movie->path_img }}" class="w-100 rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><b>Titolo:</b> {{ $movie->title }}</h5>
                                <p class="card-text"><b>Nazionalità:</b> {{ $movie->nationality }}</p>
                                <p class="card-text"><b>Voto:</b> {{ $movie->vote }}</p>
                                <p class="card-text"><b>Titolo Originale:</b> {{ $movie->original_title }}</p>
                                <p class="card-text"><b>Data Di Uscita:</b>
                                    {{ $movie->date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
