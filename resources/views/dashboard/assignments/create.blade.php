@extends("layout")

@section("content")

    <h1 class="heading">New assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard" id="validate_form">
            @csrf
            <small><i>All fields are required</i></small><br><br>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="course_id">Course</label>

                    <div>
                        <select class="form-control" name="course_id" id="course_id" data-parsley-required
                                data-parsley-type="number" data-parsley-trigger="keyup">
                                <option selected value="course_id">{{ old("course->id") }}</option>

                        </select>
                        <div class="error">
                            @error('course_id') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="name">Assignment name</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="name"
                            id="name"
                            data-parsley-trigger="keyup"
                            data-parsley-required
                            value="{{ old("name") }}"
                            required>
                        <div class="error">
                            @error('name') {{ $message }} @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-2">
                    <label for="weight">Weight <small><i>(%)</i></small></label>

                    <div>
                        <input
                            class="form-control"
                            type="number"
                            min="25"
                            data-parsley-minlength="25"
                            max="100"
                            data-parsley-maxlength="100"
                            data-parsley-type="number"
                            name="weight"
                            id="weight"
                            data-parsley-required
                            data-parsley-trigger="keyup"
                            value="{{ old("weight") }}"
                            required>
                        <div class="error">
                            @error('weight') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label for="result">Result <small><i>(1-10)</i></small></label>

                    <div>
                        <input
                            class="form-control"
                            type="number"
                            min="1"
                            data-parsley-minlength="1"
                            max="10"
                            data-parsley-maxlength="10"
                            data-parsley-type="number"
                            name="result"
                            id="result"
                            data-parsley-required
                            data-parsley-trigger="keyup"
                            value="{{ old("result") }}"
                            required>
                        <div class="error">
                            @error('result') {{ $message }} @enderror
                        </div>
                    </div>
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
