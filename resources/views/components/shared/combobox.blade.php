@props(['items' => $items, 'itemSelected' => $itemSelected])

<div class="ui search selection dropdown">
    <input type="hidden" name="color_id" value="{{ $itemSelected }}">
    <i class="dropdown icon"></i>
    <div class="default text">Renk</div>
    <div class="menu">
        @foreach ($items as $item)
        <div class="item" data-value="{{ $item->id }}">{{ $item->name }}</div>
        @endforeach
    </div>
</div>
<script>
    $('.ui.dropdown').dropdown();

</script>
