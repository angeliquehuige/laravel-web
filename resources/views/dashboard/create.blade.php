@extends("layout")

@section("content")

    <h1 class="heading">New assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard">
            @csrf

            <div class="form-group">
                <label for="term_id">Term</label>
                <div>
                    <input
                        class="form-control"
                        type="number"
                        min="1"
                        max="4"
                        name="term_id"
                        id="term_id"
                        value="{{ old("term_id") }}">
                    @if($errors->has("term_id"))
                        <p class="error">{{ $errors->first("term_id") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="course_name">Course</label>
                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="course_name"
                        id="course_name"
                        value="{{ old("course_name") }}">
                    @if($errors->has("course_name"))
                        <p class="error">{{ $errors->first("course_name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="course_name">Assignment</label>
                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="assignment_name"
                        id="assignment_name"
                        value="{{ old("assignment_name") }}">
                    @if($errors->has("assignment_name"))
                        <p class="error">{{ $errors->first("assignment_name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="assingnment_weight">Weight %</label>
                <div>
                    <input
                        class="form-control"
                        type="number"
                        min="25"
                        max="100"
                        name="assingnment_weight"
                        id="assingnment_weight"
                        value="{{ old("assingnment_weight") }}">
                    @if($errors->has("assingnment_weight"))
                        <p class="error">{{ $errors->first("assingnment_weight") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="course_ec">EC</label>
                <div>
                    <input
                        class="form-control"
                        type="number"
                        min="0"
                        max="15"
                        name="course_ec"
                        id="course_ec"
                        value="{{ old("course_ec") }}">
                    @if($errors->has("course_ec"))
                        <p class="error">{{ $errors->first("course_ec") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="assignment_result">Result</label>
                <div>
                    <input
                        class="form-control"
                        type="number"
                        min="0"
                        max="10"
                        name="assignment_result"
                        id="assignment_result"
                        value="{{ old("assignment_result") }}">
                    @if($errors->has("assignment_result"))
                        <p class="error">{{ $errors->first("assignment_result") }}</p>
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
