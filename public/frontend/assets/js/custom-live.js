jQuery(function ($) {
    $('.removeBorder').click(function (e) {
        e.preventDefault();
        $('#header').remove();
        $('.iframe').css({'top': '0px', 'height': '100%'});
    });

    $('.dsk').click(function (e) {
        e.preventDefault();
        $(this).css('color','#4391b1');
        $('.mbl').css('color','#FFF');
        $('.pad').css('color','#FFF');
        var w = window.innerWidth;
        var min = parseInt(w);
        var gavy = min/2;
        $("iframe").animate({
            width: '100%',
            'left': '0px'
        }, 1000);
    });

    $('.mbl').click(function (e) {
        e.preventDefault();
        $(this).css('color','#4391b1');
        $('.dsk').css('color','#FFF');
        $('.pad').css('color','#FFF');
        var w = window.innerWidth;
        var min = parseInt(w-320);
        var gavy = min/2;
        $("iframe").animate({
            width: '320px',
            'left': gavy+'px'
        }, 1000);
    });

    $('.pad').click(function (e) {
        e.preventDefault();
        $(this).css('color','#4391b1');
        $('.dsk').css('color','#FFF');
        $('.mbl').css('color','#FFF');
        var w = window.innerWidth;
        var min = parseInt(w-768);
        var gavy = min/2;
        $("iframe").animate({
            width: '768px',
            'left': gavy+'px'
        }, 1000);
    });


    $(document).on('click', '.download-bundle', function(e){
        e.preventDefault();
        var ths = $(this).attr('data-id');
        $.ajax({
            url: "/actions/downloadBundle.php",
            data: {"themeId": ths},
            method: "POST",
            dataType: "JSON",
            success: function(data) {
                if(data.isok == 1) {
                    window.location.href = data.msg;
                }
                else if (data.isok == 3) {
                    window.location.href = "/sign-in/";
                }
                else if (data.isok == 0) {
                    alert(data.msg);
                }
            }
        });
    });

    $(document).on('click', '.download-free-demo', function(e){
        e.preventDefault();
        var ths = $(this).attr('data-id');
        $.ajax({
            url: "/actions/downloadTheme.php",
            data: {"themeId": ths},
            method: "POST",
            dataType: "JSON",
            success: function(data) {
                if(data.isok == 1) {
                    window.location.href = "/purchase-history.php?success=download";
                }
                else if (data.isok == 3) {
                    window.location.href = "/sign-in/";
                }
            }
        });
    });


});
