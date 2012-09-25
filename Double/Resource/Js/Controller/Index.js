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
            url: '?controller=Double\\Controller\\ControllerMenu'
        },
        {
            name: 'left',
            url: '?controller=Double\\Controller\\ControllerPanel'
        },
        {
            name: 'right',
            url: '?controller=Double\\Controller\\ControllerPanel'
        },
        {
            name: 'bottom',
            url: '?controller=Double\\Controller\\ControllerCmd'
        }
    ];

    for (var i = 0; i < controls.length; ++i) {
        Double.refreshControl(controls[i]);
    }

    $('.dir_link').live('click', function () {
        var $this = $(this);

        $.ajax({
            url: $this.attr('href'),
            success: function (result) {
                $this.closest('.file_panel').html(result);
            }
        });

        return false;
    });

});