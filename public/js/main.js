$(document).ready(function () {


    function loadModal(href, modalId) {
        event.preventDefault();
        let itemModal = document.getElementById(`${modalId}`);
        $(itemModal)
            .modal({
                blurring: false,
                observeChanges: true,
                transition: "scale",
                onVisible: function (callback) {
                    callback = $.isFunction(callback)
                        ? callback
                        : function () {};

                    $.get(href, function (responseContent) {
                        console.log(responseContent);
                        $(itemModal).find(".content").html(responseContent);
                    });
                },
            })
            .modal("show");
    }

    $(document).on("click", ".btnModalOpen", function (event) {
        event.preventDefault();
        let href = $(this).attr("href");
        loadModal(href, "sharedModal");
    });
    $(document).on("click", ".btnConfirmModalOpen", function (event) {
        event.preventDefault();
        let href = $(this).attr("href");
        let id = $(this).attr("id");
        $('#confirmDeleteForm').attr('action',href);
        $('#confirmModal').modal('setting', 'closable', false).modal('show');
    });
});
