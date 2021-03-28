@extends('layouts.layout')
@section('content')

    <div class="ui container" id="content">
        <div class="ui four item stackable tabs menu" id="settingsTab">
            <a class="tabItem item active" data-tab="tabDemandStatus">Talep Durumları</a>
            <a class="tabItem item" data-tab="tabDemandState">Talep Aşamaları</a>
        </div>
        <div class="main ui container">
            <div class="ui active tab segment" data-tab="tabDemandStatus" style="">
                <table id="dtDemandStatus" class="ui celled table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>İsim</th>
                            <th>Renk</th>
                            <th>işlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Normal</td>
                            <td>blue</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Name">2</td>
                            <td data-label="Age">Acil</td>
                            <td data-label="Age">orange</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Name">3</td>
                            <td data-label="Age">Çok Acil</td>
                            <td data-label="Age">red</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ui tab segment" data-tab="tabDemandState" style="">
                <table id="dtDemandStatus" class="ui celled table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>İsim</th>
                            <th>İşlem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Id">1</td>
                            <td data-label="İsim">Görüldü</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Id">1</td>
                            <td data-label="İsim">Devam ediyor</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Id">1</td>
                            <td data-label="İsim">Tamamlandı</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Id">1</td>
                            <td data-label="İsim">Onaylandı</td>
                            <td>
                                <a><i class="blue edit icon"></i></a>
                                <a><i class="red trash icon"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('js/settings.view.js') }}" defer></script>
    @endsection
