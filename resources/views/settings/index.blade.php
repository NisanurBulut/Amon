@extends('layouts.layout')
@section('content')

<div class="" id="content">
        <div class="ui container" style="padding-top: 20px">
            <div class="ui four item stackable tabs menu" id="settingsTab">
                <a class="tabItem item" data-tab="tabDemandStatus">Talep Durumları</a>
                <a class="tabItem item" data-tab="tabDemandState">Talep Aşamaları</a>
                <a class="tabItem item active" data-tab="tabStatusColor">Renk Tanımları</a>
            </div>
            <div class="main ui container">
                <div class="ui tab segment" data-tab="tabDemandStatus" style="">
                    <x-demand-status />
                </div>
                <div class="ui tab segment" data-tab="tabDemandState" style="">
                    <x-demand-state />
                </div>
                <div class="ui active tab segment" data-tab="tabStatusColor" style="">
                    <x-state-color />
                </div>
            </div>
    </div>


    @endsection

    @section('scripts')
        <script src="{{ asset('js/settings.view.js') }}" defer></script>
    @endsection
{{--
    --}}