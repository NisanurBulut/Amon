@extends('layouts.layout')
@section('content')
    <div class="ui container">
        <div class="ui four item stackable tabs menu" id="settingsTab">
            <a class="tabItem item active" data-tab="definition">Definition</a>
            <a class="tabItem item" data-tab="examples">Examples</a>
            <a class="tabItem item" data-tab="usage">Usage</a>
            <a class="tabItem item" data-tab="settings">Settings</a>
        </div>
        <div class="main ui container">
            <div class="ui active tab segment" data-tab="definition" style=""> 1</div>
            <div class="ui tab segment" data-tab="examples" style=""> 2</div>
            <div class="ui tab segment" data-tab="Usage" style=""> 3</div>
            <div class="ui tab segment" data-tab="settings" style=""> 4</div>

        </div>
    @endsection

    @section('scripts')
    <script>console.log('hi from Settings View!');</script>
    <script src="{{ assets('js/settings.view.js') }}" defer></script>
    @endsection