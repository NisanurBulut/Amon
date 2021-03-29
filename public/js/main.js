$(document).ready(function () {
    $(".tabItem").tab();
    $(".ui.modal").modal();


    function loadModal(href, modalId) {
        event.preventDefault();
        let itemModal = document.getElementById(`${modalId}`);
        $(itemModal)
            .modal({
                blurring: true,
                observeChanges: true,
                transition: "scale",
                onVisible: function (callback) {
                    callback = $.isFunction(callback)
                        ? callback
                        : function () {};
                    console.log(href);
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

    function loadColorsToTable() {
        var table = $("#dtColor").DataTable({
            serverSide: false,
            ajax: {
                url: "/settings/getColors",
                dataSrc: "",
            },
            columns: [
                { data: "id" },
                { data: "name" },
                { data: "description" },
                {data:'id', render: function(data, type) {
                  return '<a><i class="blue edit icon"></i></a>'+
                         '<a><i class="red trash icon"></i></a>';
                }}
            ],
            bPaginate: true,
            bLengthChange: false,
            pageLength: 5,
        });
    }
    function loadSituationsToTable() {
        var table = $("#dtStatus").DataTable({
            serverSide: false,
            ajax: {
                url: "/settings/getSituations",
                dataSrc: "",
            },
            columns: [
                { data: "id" },
                { data: "name" },
                { data: "color" },
                {data:'id', render: function(data, type) {
                  return '<a><i class="blue edit icon"></i></a>'+
                         '<a><i class="red trash icon"></i></a>';
                }}
            ],
            bPaginate: true,
            bLengthChange: false,
            pageLength: 5,
        });
    }
    loadColorsToTable();
    loadSituationsToTable();
});
