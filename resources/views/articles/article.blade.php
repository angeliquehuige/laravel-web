@extends("layout")
@section("content")

    <h1 class="heading">Blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
                @foreach ($articles as $article)
                    <h3><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></h3>
                    <img src="{{$article->mainpic}}">
                    <p>{{ $article->description }}</p>
                    <br><br>
                @endforeach

                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
