@extends("layout")

@section("content")

    <h1 class="heading">New assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard">
            @csrf

            <div class="form-group">
                <label for="Term">Term name</label>

                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="term"
                        id="term"
                        value="{{ old("term") }}">


                    @if($errors->has("term"))
                        <p class="error">{{ $errors->first("term") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="course">Course</label>
                <div>
                <textarea
                    class="form-control"
                    name="course"
                    id="course"
                >{{ old("course") }}</textarea>

                    @if($errors->has("course"))
                        <p class="error">{{ $errors->first("course") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="grading">Grading</label>

                <div>
                <textarea
                    class="form-control"
                    type="grading"
                    name="grading"
                    id="grading"
                >{{ old("grading") }}</textarea>

                    @if($errors->has("grading"))
                        <p class="error">{{ $errors->first("grading") }}</p>
                    @endif

                </div>
            </div>

            <div class="form-group">
                <label for="ects">ECTS</label>

                <div>
                <textarea
                    class="form-control"
                    type="ects"
                    name="ects"
                    id="ects"
                >{{ old("ects") }}</textarea>

                    @if($errors->has("ects"))
                        <p class="error">{{ $errors->first("ects") }}</p>
                    @endif

                </div>
            </div>

            <div class="form-group">
                <label for="result">Result</label>

                <div>
                <textarea
                    class="form-control"
                    type="result"
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
