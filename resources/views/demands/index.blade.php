@extends('layouts.layout')
@section('content')
    <div class="ui middle large aligned center aligned grid" id="content">
        <div class="column">
            <div class="ui cards">
                @for ($i=0; $i<20; $i++)
                <x-demand-item />
                @endfor
            </div>
        </div>
    </div>
@endsection
