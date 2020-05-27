@extends("layout")

@section("content")

    <h1 class="heading">Edit assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard/{{ $assignment->id }}">
            @csrf
            @method("PUT")

{{--            <div class="form-group">--}}
{{--                <label for="term_id">Term</label>--}}
{{--                @foreach($assignment->course->term->courses as $course)--}}
{{--                    <div class="form-check">--}}
{{--                        <input class="form-check-input" type="radio" name="term_id" id="term_id"--}}
{{--                               value="{{$course->term_id}}" checked>--}}
{{--                        @if($errors->has("course_id"))--}}
{{--                            <p class="error">{{ $errors->first("course_id") }}</p>--}}
{{--                        @endif--}}
{{--                        <label class="form-check-label" for="term_id">--}}
{{--                            Term {{$course->term_id}}--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                @endforeach--}}

{{--            </div>--}}

            <div class="form-group">
                <label for="term_id">Term</label>

                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="course_id"
                        id="course_id"
                        value="{{ $assignment->course->term_id }}">


                    @if($errors->has("course_id"))
                        <p class="error">{{ $errors->first("course_id") }}</p>
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
                >{{ $assignment->course->name }}</textarea>

                    @if($errors->has("course"))
                        <p class="error">{{ $errors->first("course") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="name">Assignment name</label>
                <div>
                <textarea
                    class="form-control"
                    name="name"
                    id="name"
                >{{ $assignment->name }}</textarea>

                    @if($errors->has("name"))
                        <p class="error">{{ $errors->first("name") }}</p>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="weight">Weight</label>

                <div>
                <textarea
                    class="form-control"
                    type="text"
                    name="weight"
                    id="weight"
                >{{ $assignment->weight }}</textarea>

                    @if($errors->has("weight"))
                        <p class="error">{{ $errors->first("weight") }}</p>
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
                >{{ $assignment->result }}</textarea>

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
                        </i>Save
                    </button>
                    <a href="/dashboard"><button type="button" class="btn btn-default submit" style="margin-left: 10px"><i class="fa fa-paper-plane"
                                                                                                                           aria-hidden="true"></i>Cancel
                        </button></a>
                    <br><br><br><br>
                </div>
            </div>

        </form>
    </div>
@endsection
