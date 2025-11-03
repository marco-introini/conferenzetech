<div>

    @foreach ($conferences as $conference)
        <div>
            <div>
                <img src="{{asset('storage/'.$conference->cover_image)}}" alt="">
            </div>{{$conference->name}}
        </div>
    @endforeach


</div>
