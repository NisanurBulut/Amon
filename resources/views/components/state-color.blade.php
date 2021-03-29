
<x-shared.modal />
<div class="ui top attached segment" id="content">
    <a id="btnStateAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createColor') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>
    <table id="dtColor" class="ui celled table display" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
    </table>

</div>
