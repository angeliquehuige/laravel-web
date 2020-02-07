@extends("layout")

@section("content")

    <h1 class="heading">New article</h1>

    <div class="container createForm">
    <form method="POST" action="/blog">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>

            <div>
                <input form-control type="text" name="title" id="title">
            </div>
        </div>

        <div class="form-group">
            <label for="excerpt">Excerpt</label>

            <div>
                <textarea class="form-control" name="excerpt" id="excerpt"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="body">Body</label>

            <div>
                <textarea class="form-control" type="body" name="body" id="body"></textarea>
            </div>
        </div>

        <div>
            <div>
                <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>Submit</button>
            </div>
        </div>

    </form>
</div>
@endsection
