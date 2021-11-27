$(document).ready(function () {
    $('#addItemModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var content = button.data('whatever');
        var modal = $(this);
        modal.find('.btn-submit').text(content);
      })
});