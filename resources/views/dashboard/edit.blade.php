@extends("layout")

@section("content")

    <h1 class="heading">Edit assignment</h1>

    <div class="container form normal">
        <form method="POST" action="/dashboard/{{ $assignment->id }}">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="course_id">Course id</label>

                <div>
                    <input
                        class="form-control"
                        type="text"
                        name="course_id"
                        id="course_id"
                        value="{{ $assignment->course_id }}">


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
