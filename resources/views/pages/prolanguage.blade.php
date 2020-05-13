@extends('layout.app')
@section('content')
<div class="content">
    <div class="container">
    <div class="title m-b-md">
        Programming languages
    </div>  

    <div class="title m-b-md">
        <ul>
                @foreach ($langs as $lang)
                <li> {{ $lang }} </li>
                @endforeach 
        </ul>
    </div>
</div>  </div>
@endsection
