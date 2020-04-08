@extends("layout")
@section("content")

    <h1 class="heading">Dashboard</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-7 monitor normal">
                <a href="/dashboard/create">
                    <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                            aria-hidden="true">
                        </i>+ Add
                    </button>
                </a>
                <br><br><br>
                <section id="tabs" class="project-tab">
                    <nav>
                        @foreach($years as $year)
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-blok1-tab" data-toggle="tab"
                                   href="#nav-blok1"
                                   role="tab" aria-controls="nav-blok1" aria-selected="true">Year {{$year->id}}</a>
                            </div>
                        @endforeach
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-blok1" role="tabpanel"
                             aria-labelledby="nav-blok1-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>Assignment</th>
                                    <th>Weight</th>
                                    <th>EC</th>
                                    <th>Result (0-10)</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($assignments as $assignment)
                                    <tr>
                                        <td>
                                            <a href="/dashboard/{{ $assignment->id }}">{{$assignment->course->name}}</a>
                                        </td>
                                        <td>{{$assignment->name}}</td>
                                        <td>{{$assignment->weight}}</td>
                                        <td>{{$assignment->course->ec}}</td>
                                        <td>{{$assignment->result}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{--                        <div class="tab-pane fade" id="nav-blok3" role="tabpanel" aria-labelledby="nav-blok3-tab">--}}
                        {{--                            <table class="table" cellspacing="0">--}}
                        {{--                                <thead>--}}
                        {{--                                <tr>--}}
                        {{--                                    <th>Course</th>--}}
                        {{--                                    <th>Grading</th>--}}
                        {{--                                    <th>ECTS</th>--}}
                        {{--                                    <th>Result (0-10)</th>--}}
                        {{--                                </tr>--}}
                        {{--                                </thead>--}}
                        {{--                                <tbody>--}}
                        {{--                                @foreach($assignments as $assignment)--}}
                        {{--                                    <tr>--}}
                        {{--                                        <td><a href="#">{{$assignment->course}}</a></td>--}}
                        {{--                                        <td>{{$assignment->grading}}</td>--}}
                        {{--                                        <td>{{$assignment->ects}}</td>--}}
                        {{--                                        <td>{{$assignment->result}}</td>--}}
                        {{--                                    </tr>--}}
                        {{--                                @endforeach--}}
                        {{--                                </tbody>--}}
                        {{--                            </table>--}}
                        {{--                        </div>--}}
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
