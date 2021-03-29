@extends('layouts.layout')
@section('content')
<x-shared.modal />
    <div class="ui middle large center aligned aligned grid" id="content">
        <div class="html center ui top attached segment">
            <a class="ui huge top attached label btnModalOpen" href={{ route('demands.create') }}>
                <i style="float: right;" data-content="Copy code" class="plus icon"></i>
            </a>
            <div class="ui cards" style="padding-top: 15px;">
                @for ($i = 0; $i < 20; $i++)
                    <x-demand-item />
                @endfor
            </div>
        </div>
    </div>



@endsection
