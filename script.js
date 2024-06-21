$(document).ready(function () {
    var $checkboxes = $('.checkbox');
    var $btnCompare = $('.btnCompare');

    $checkboxes.change(function () { 
        var checked = $checkboxes.filter(':checked').length;

        if (checked == 3) {
            $checkboxes.not(':checked').attr('disabled', true);
            $btnCompare.attr('disabled', false);
        } else {
            $checkboxes.attr('disabled', false);
            $btnCompare.attr('disabled', true);
        }
    });
});