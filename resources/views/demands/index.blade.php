@extends('layouts.layout')
@section('content')
    <div class="ui middle large center aligned aligned grid" id="content">
        <div class="html center ui top attached segment">
            <div class="ui huge top attached label">
                <i style="float: right;" data-content="Copy code" class="plus icon"></i>
            </div>
            <div class="ui cards" style="padding-top: 15px;">
                @for ($i = 0; $i < 20; $i++)
                    <x-demand-item />
                @endfor
            </div>
        </div>
    </div>
@endsection
