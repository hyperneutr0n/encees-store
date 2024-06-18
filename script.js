$(document).ready(function () {
    var $checkboxes = $('.checkbox');
    var $btnCompare = $('.btnCompare');

    $checkboxes.change(function () { 
        var checked = $checkboxes.filter(':checked').length;

        if (checked == 3) {
            $checkboxes.not(':checked').prop('disabled', true);
            $btnCompare.prop('disabled', false);
        } else {
            $checkboxes.prop('disabled', false);
            $btnCompare.prop('disabled', true);
        }
    });
});