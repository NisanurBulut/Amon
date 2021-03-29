@props(['colors' => $colors])
<x-shared.modal />
<div class="ui top attached segment">
    <a id="btnStateAdd" class="ui huge top attached label btnModalOpen" href="{{ route('settings.createColor') }}">
        <i style="float: right;" data-content="Copy code" class="plus icon"></i>
    </a>

    <table id="dtColor" class="ui celled table">
        <thead>
            <tr>
                <th>Id</th>
                <th>İsim</th>
                <th>Açıklama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colors as $color)
            <tr>
               <td>{{ $color->name }}</td>
               <td>{{ $color->description }}</td>
                <td>
                    <a><i class="blue edit icon"></i></a>
                    <a><i class="red trash icon"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
