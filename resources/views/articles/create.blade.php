@extends("layout")

@section("content")

    <h1 class="heading">New article</h1>

    <div class="container form normal">
        <form method="POST" action="/blog" id="validate_form">
            @csrf
            <small><i>All fields are required unless marked optional</i></small><br><br>
            <div class="form-row">
                <div class="form-group col">
                    <label for="title">Title</label>

                    <div>
                        <input
                            class="form-control"
                            type="text"
                            name="title"
                            id="title"
                            data-parsley-minlength="10"
                            data-parsley-trigger="keyup"
                            data-parsley-required
                            value="{{ old("title") }}"
                            required>
                        <small id="titleHelp" class="form-text text-muted">Enter at least 10 characters</small>
                        <div class="error">
                            @error('title') {{ $message }} @enderror
                        </div>
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
                            data-parsley-type="url"
                            data-parsley-trigger="keyup"
                            data-parsley-required
                            value="{{ old("mainpic") }}"
                            required>
                        <small id="mainpicHelp" class="form-text text-muted">Enter the image URL address </small>
                        <div class="error">
                        @error('mainpic') {{ $message }} @enderror
                        </div>
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
                            data-parsley-required
                            data-parsley-trigger="keyup"
                            value="{{ old("location") }}"
                            required>
                        <div class="error">
                            @error('location') {{ $message }} @enderror
                        </div>
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
                            data-parsley-required
                            data-parsley-type="number"
                            data-parsley-trigger="keyup"
                            value="{{ old("year") }}"
                            required>
                        <div class="error">
                            @error('year') {{ $message }} @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group col">
                    <label for="month">Month <small><i>(opt.)</i></small></label>
                    <div>
                        <select id="month" class="form-control" name="month">
                            <option selected>{{ old("month") }}</option>
                            <option>January</option>
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
                    data-parsley-minlength="150"
                    data-parsley-trigger="keyup"
                    data-parsley-required
                    required
                >{{ old("description") }}</textarea>
                    <div class="error">
                        @error('description') {{ $message }} @enderror
                    </div>
                    <small id="descriptionHelp" class="form-text text-muted">Enter at least 150 characters</small>
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
                    data-parsley-required
                    data-parsley-trigger="keyup"
                    required
                >{{ old("body") }}</textarea>
                    <div class="error">
                        @error('body') {{ $message }} @enderror
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
        <br><br>
    </div>
@endsection
