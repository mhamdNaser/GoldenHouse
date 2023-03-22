$('#state').on('change', function() {
    var selectedOption = $(this).find('option:selected');
    var selectedValue = selectedOption.val();

    $(this).removeClass('text-success text-danger');

    if (selectedValue == 'accept') {
        $(this).addClass('text-success');
    } else if (selectedValue == 'reject') {
        $(this).addClass('text-danger');
    }
});
