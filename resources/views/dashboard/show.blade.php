@extends("layout")
@section("content")

    <h1 class="heading">{{ $assignment->Name }} <br><br>
        {{ $assignment->result}}
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
                <a href="/dashboard/{{ $assignment->id }}/edit"><button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                                                                aria-hidden="true"></i>Edit
                    </button></a>
                </form>
                <br><br><br>
                <div>
                    <p>The assignment {{ $assignment->name }} is part of the {{ $assignment->course_id}} st/rd term.
                    The result of this was {{ $assignment->result}} out of 10.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
