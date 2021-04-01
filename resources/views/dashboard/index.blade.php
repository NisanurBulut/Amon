@extends('layouts.layout')
@section('content')
    <div class="ui grid">
        <div class="four wide column">
            <div class="ui segment">
                <x-dashboard.basicbar-chart />
            </div>
        </div>
        <div class="four wide column">
            <div class="ui segment">
                <x-dashboard.columndrilldown-chart />
            </div>
        </div>
        <div class="four wide column">
            <div class="ui segment">
                <x-dashboard.pie-chart />
            </div>
        </div>
        <div class="four wide column">
            <div class="ui segment">
                <x-dashboard.columnplacement-chart />
            </div>
        </div>
        <div class="two wide column">
            <div class="ui segment">
                <x-dashboard.columndrilldown-chart />
            </div>
        </div>
        <div class="eight wide column">
            <div class="ui segment">
                <x-dashboard.columndrilldown-chart />
            </div>
        </div>
        <div class="six wide column">
            <div class="ui segment">
                <x-dashboard.columndrilldown-chart />
            </div>
        </div>
    </div>


@endsection
