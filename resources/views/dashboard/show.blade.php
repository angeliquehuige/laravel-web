@extends("layout")
@section("content")

    <h1 class="heading">{{ $assignment->course }}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
                <a href="/dashboard/{{ $assignment->id }}/edit"><button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                                                                aria-hidden="true"></i>Edit
                    </button></a>
                </form>
                <br><br><br>
                <p>Term: </p>{{ $assignment->term}}
                <p>Grading: </p>{{ $assignment->grading}}
                <p>EC: </p>{{ $assignment->ects}}
                <p>Result: </p>{{ $assignment->result}}
            </div>
        </div>
    </div>
@endsection
