<div id="confirmModal" class="ui mini modal transition">
    <div class="content">Bu işlem geri alınamaz. Emin misiniz ?</div>
    <div class="actions">
        <form id="confirmDeleteForm" method="POST" action="">
            @csrf()
            @method('DELETE')
            <button class="ui button" onclick="event.preventDefault();" id="confirmCloseBtn">İptal</button>
           <button class="ui primary button" type="submit">Evet</button>
        </form>
    </div>
</div>
