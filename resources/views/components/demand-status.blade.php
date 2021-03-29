
<x-shared.modal />
<div class="ui top attached segment">
    <a id="btnStatusAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createStatus') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>
    <table id="dtStatus" class="ui celled table">
        <thead>
            <tr>
                <th>Id</th>
                <th>İsim</th>
                <th>Renk</th>
                <th>işlem</th>
            </tr>
        </thead>

    </table>
</div>