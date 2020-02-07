@extends("layout")
@section("content")

    <h1 class="heading">{{ $article->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm articlesBody">
                <img src="https://picsum.photos/600/200" alt="random picture">
                <br><br><br>
                {!! nl2br(e($article->body)) !!}

            </div>
        </div>
    </div>
@endsection
