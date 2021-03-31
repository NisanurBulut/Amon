@props(['items' => $items,
'itemSelected' => $itemSelected,
'placeHolder'=>'placeholder',
 'attrId'=>'attrId'])

<div class="ui search selection dropdown">
    <input type="hidden" name="{{ $attrId }}" value="{{ $itemSelected }}">
    <i class="dropdown icon"></i>
    <div class="default text">{{ $placeHolder }}</div>
    <div class="menu">
        @foreach ($items as $item)

        <div class="item" data-value="{{ $item->id }}">
            <a class="ui {{ $item->color }} empty circular label"></a> {{ $item->name }}</div>
        @endforeach
    </div>
</div>
<script>
    $('.ui.dropdown').dropdown();

</script>
