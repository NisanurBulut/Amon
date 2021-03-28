$(document).ready(function(){
    $('.tabItem').tab();
    $('.ui.modal').modal();
});

function loadModal(href, modalId)
{
debugger;
let itemModal =document.getElementById(`${modalId}`);
  $(itemModal).modal({
      blurring: true,
      observeChanges: true,
      transition: 'scale',
      onVisible: function (callback) {
        callback = $.isFunction(callback) ? callback : function () { };
         console.log(href);
          $.get(href, function (responseContent) {
            $(itemModal).html(responseContent);
          });
      }
  }).modal('show')
}
$(document).on('click', '#btnAdd', function(event) {
  event.preventDefault();
  let href = $(this).attr('href');
  debugger;
  loadModal(href,'sharedModal');
});
