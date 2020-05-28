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
                            value="{{ old("title") }}">
                    </div>
                </div>

                <div class="form-group col">
                    <label for="mainpic">Image link</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="mainpic"
                            id="mainpic"
                            value="{{ old("mainpic") }}">
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
                            value="{{ old("location") }}">
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
                            value="{{ old("year") }}">
                    </div>
                </div>
                <div class="form-group col">
                    <label for="month">Month</label>
                    <div>
                        <select id="month" class="form-control" name="month">
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
