@extends("layout")

@section("content")

    <h1 class="heading">New assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard">
            @csrf

            <div class="form-group">
                <label for="term_id">Term</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="term_id" id="term_id"
                           value="{{ old("term_id") }}">
                    @if($errors->has("term_id"))
                        <p class="error">{{ $errors->first("term_id") }}</p>
                    @endif
                    <label class="form-check-label" for="term_id">
                        1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="term_id" id="term_id"
                           value="{{ old("term_id") }}">
                    @if($errors->has("term_id"))
                        <p class="error">{{ $errors->first("term_id") }}</p>
                    @endif
                    <label class="form-check-label" for="term_id">
                        2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="term_id" id="term_id"
                           value="{{ old("term_id") }}">
                    @if($errors->has("term_id"))
                        <p class="error">{{ $errors->first("term_id") }}</p>
                    @endif
                    <label class="form-check-label" for="term_id">
                        3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="term_id" id="term_id"
                           value="{{ old("term_id") }}">
                    @if($errors->has("term_id"))
                        <p class="error">{{ $errors->first("term_id") }}</p>
                    @endif
                    <label class="form-check-label" for="term_id">
                        4
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="course_name">Course</label>

                <div>
                    <input
                        class="form-control"
                        type="course_name"
                        name="course_name"
                        id="course_name"
                        value="{{ old("course_name") }}">


                    @if($errors->has("course_name"))
                        <p class="error">{{ $errors->first("course_name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="assignment_name">Assignment name</label>
                <div>
                <textarea
                    class="form-control"
                    name="assignment_name"
                    id="assignment_name"
                >{{ old("assignment_name") }}</textarea>

                    @if($errors->has("assignment_name"))
                        <p class="error">{{ $errors->first("assignment_name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="assingnment_result">Result</label>

                <div>
                <textarea
                    class="form-control"
                    type="text"
                    name="assingnment_result"
                    id="assingnment_result"
                >{{ old("assingnment_result") }}</textarea>

                    @if($errors->has("assingnment_result"))
                        <p class="error">{{ $errors->first("assingnment_result") }}</p>
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
