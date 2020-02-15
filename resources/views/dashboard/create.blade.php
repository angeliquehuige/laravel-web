@extends("layout")

@section("content")

    <h1 class="heading">New assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard">
            @csrf

            <div class="form-group">
                <label for="course_id">Course ID</label>

                <div>
                    <input
                        class="form-control"
                        type="course_id"
                        name="course_id"
                        id="course_id"
                        value="{{ old("course_id") }}">


                    @if($errors->has("course_id"))
                        <p class="error">{{ $errors->first("course_id") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <div>
                <textarea
                    class="form-control"
                    name="name"
                    id="name"
                >{{ old("name") }}</textarea>

                    @if($errors->has("name"))
                        <p class="error">{{ $errors->first("name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="result">Result</label>

                <div>
                <textarea
                    class="form-control"
                    type="text"
                    name="result"
                    id="result"
                >{{ old("result") }}</textarea>

                    @if($errors->has("result"))
                        <p class="error">{{ $errors->first("result") }}</p>
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
                    <br><br><br><br>
                </div>
            </div>

        </form>
    </div>
@endsection
