@extends("layout")
@section("content")

    <h1 class="heading">Blog</h1>

    <div class="container">
    <div class="row">
        <div class="col-sm articlesBody">
            @foreach ($articles as $article)
                    <h3><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></h3>
                    <p>{{ $article->excerpt }}</p>
                <br><br>
            @endforeach
        </div>
    </div>
</div>
@endsection
