@props(['colorSelects' => $colorSelects])

<div class="ui selection dropdown">
    <input type="hidden" name="color_id">
    <i class="dropdown icon"></i>
    <div class="default text">Renk</div>
    <div class="menu">
        @foreach ($colorSelects as $colorSelect)
        <div class="item" data-value="{{ $colorSelect->id }}">{{ $colorSelect->name }}</div>
        @endforeach
    </div>
</div>
<script>
    $('.ui.dropdown').dropdown();

</script>
