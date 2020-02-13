@extends("layout")
@section("content")

    <h1 class="heading">{{ $article->title }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
               <a href="/blog/{{ $article->id }}/edit"><button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                        aria-hidden="true"></i>Submit
                </button></a>
                </form>
                <br><br><br>
                <img src="https://picsum.photos/600/200" alt="random picture">
                <br><br>
                {!! nl2br(e($article->body)) !!}
                {{--                {!! $article->body !!}--}}

            </div>
        </div>
    </div>
@endsection
