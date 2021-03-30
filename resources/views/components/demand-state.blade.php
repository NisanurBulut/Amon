
<x-shared.modal />

<div class="ui top attached" id="content">
    <a id="btnStateAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createState') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>
    <table id="dtState" class="ui celled table display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>İsim</th>
                <th>işlem</th>
            </tr>
        </thead>
    </table>
</div>
