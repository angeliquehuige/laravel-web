@extends("layout")

@section("content")

    <h1 class="heading">New article</h1>

    <div class="container form normal">
        <form method="POST" action="/blog">
            @csrf
            <div class="form-row">
                <div class="form-group col">
                    <label for="title">Title</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="title"
                            id="title"
                            value="{{ old("title") }}"
                            required>
                    </div>
                </div>

                <div class="form-group col">
                    <label for="mainpic">Image</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="mainpic"
                            id="mainpic"
                            value="{{ old("mainpic") }}"
                            required>
                        <small id="mainpicHelp" class="form-text text-muted">Enter the image URL address </small>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        Please enter a valid image URL address
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="location">Location</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="location"
                            id="location"
                            value="{{ old("location") }}"
                            required>
                    </div>
                </div>
                <div class="form-group col">
                    <label for="year">Year</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="year"
                            id="year"
                            value="{{ old("year") }}"
                            required>
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        Please enter a date between 2015 and the current year--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                    </div>
                </div>
                <div class="form-group col">
                    <label for="month">Month</label>
                    <div>
                        <select id="month" class="form-control" name="month" required>
                            <option selected>January</option>
                            <option>February</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <div>
                <textarea
                    class="form-control"
                    name="description"
                    id="description"
                    required
                >{{ old("description") }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <label for="body">Body</label>

                <div>
                <textarea
                    class="form-control"
                    type="body"
                    name="body"
                    id="body"
                    required
                >{{ old("body") }}</textarea>
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
