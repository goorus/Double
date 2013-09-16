var Double = {

    refreshControl: function (control) {
        $.ajax({
            url: control.url,
            data: control,
            success: function (result) {
                $('.' + control.name).html(result);
            }
        });
    }

};

$(function () {

    var controls = [
        {
            name: 'top',
            url: '/Menu'
        },
        {
            name: 'left',
            url: '/Panel'
        },
        {
            name: 'right',
            url: '/Panel'
        },
        {
            name: 'bottom',
            url: '/Cmd'
        }
    ];

    for (var i = 0; i < controls.length; ++i) {
        Double.refreshControl(controls[i]);
    }

    $('.panel').on(
        'click',
        '.dir_link', function () {
            var $this = $(this);

            $.ajax({
                url: $this.attr('href'),
                success: function (result) {
                    $this.closest('.file_panel').html(result);
                }
            });

            return false;
        }
    );

});