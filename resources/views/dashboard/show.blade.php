@extends("layout")
@section("content")

    <h1 class="heading">Term {{$assignment->course->term->id}}</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm centeredBody normal">
                <h2 class="headingsmall">Courses</h2>
                <table id="dashboardTable" class="table" cellspacing="0">
                    <tbody>
                    @foreach($assignment->course->term->courses as $course)
                        <tr>
                            <td class="duplicates">
                                {{$course->name}}
                            </td>
                            <td><a href="/dashboard/{{ $course->id }}/edit">
                                    <button type="button" class="btn btn-default edit"><i class="fa fa-paper-plane"
                                                                                          aria-hidden="true"></i>Edit
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


{{--<td><a href="/dashboard/{{ $assignment->id }}/edit">--}}
{{--        <button type="button" class="btn btn-default edit"><i class="fa fa-paper-plane"--}}
{{--                                                              aria-hidden="true"></i>Edit--}}
{{--        </button>--}}
{{--    </a>--}}
{{--</td>--}}
