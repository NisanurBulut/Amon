
<x-shared.modal />

<div class="ui top attached" id="content">
    <a id="btnStatusAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createStatus') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>
    <table id="dtStatus" class="ui celled table display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>İsim</th>
                <th>Renk</th>
                <th>işlem</th>
            </tr>
        </thead>
    </table>
</div>
