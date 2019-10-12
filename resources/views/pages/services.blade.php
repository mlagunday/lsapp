    @extends('layout.main')
    @section('content')
        <br>
        <br>
        <h1>{{$title}}</h1>

        @if(count($services) > 0)
            <ul class="list-group">
                @foreach($services as $key => $value)
                    <li class="list-group-item">{{$key}}</li>
                @endforeach
            </ul>
        @endif
    @endsection

