@extends("layout")

@section("content")

    <h1 class="heading">New article</h1>

    <div class="container form normal">
        <form method="POST" action="/blog">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>

                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="title"
                        id="title"
                        value="{{ old("title") }}">


                    @if($errors->has("title"))
                        <p class="error">{{ $errors->first("title") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="excerpt">Excerpt</label>
                <div>
                <textarea
                    class="form-control"
                    name="excerpt"
                    id="excerpt"
                >{{ old("excerpt") }}</textarea>

                    @if($errors->has("excerpt"))
                        <p class="error">{{ $errors->first("excerpt") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="body">Body</label>

                <div>
                <textarea
                    class="form-control"
                    type="body"
                    name="body"
                    id="body"
                >{{ old("body") }}</textarea>

                    @if($errors->has("body"))
                        <p class="error">{{ $errors->first("body") }}</p>
                    @endif

                </div>
            </div>

            <div>
                <div>
                    <button
                        type="submit"
                        class="btn btn-default submit">
                        <i class="fa fa-paper-plane" aria-hidden="true">
                        </i>Submit
                    </button>
                </div>
            </div>

        </form>
    </div>
@endsection
