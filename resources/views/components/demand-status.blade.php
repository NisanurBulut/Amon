
<x-shared.modal />
<div class="ui top attached segment">
    <a id="btnStatusAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createStatus') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>
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