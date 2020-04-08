@extends("layout")
@section("content")


    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <hr>

                <div class="gal">
                    @foreach($photos as $photo)
                        <img src="https://i.ibb.co/{{$photo->path}}" alt="">
                    @endforeach

                </div>

            </div>
        </div>
    </div>

@endsection

