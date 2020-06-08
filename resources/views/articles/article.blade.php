@extends("layout")
@section("content")

    <h1 class="heading">Blog</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
                <a href="/blog/create">
                    <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                            aria-hidden="true">
                        </i>+ Add
                    </button>
                </a> <br><br>
                @foreach ($articles as $article)
                    <h3><a href="/blog/{{ $article->id }}">{{ $article->title }}</a></h3>
                    <img src="{{ $article->mainpic }}" style="max-width: 680px">
                    <p>{{ $article->description }}</p>
                    <br><br>
                @endforeach

                {{ $articles->links() }}
            </div>
        </div>
    </div>
@endsection
