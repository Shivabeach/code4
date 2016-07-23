$(function() {
    'use strict';

    function showSize() {
        $('#size').html('HEIGHT : ' + $(window).height() + '<br>WIDTH : ' + $(window).width());
        $('#size2').html('HEIGHT : ' + screen.height + '<br>WIDTH : ' + screen.width);
        $('#size3').html('HEIGHT : ' + $('.main-content').height() + '<br>WIDTH : ' + $('.main-content').width());
    }
    $(window).on('resize', showSize);
    showSize();
});
$(function() {
    "use strict";
    $('A[rel="external"]')
        .click(function() {
            window.open($(this).attr('href'),
                rel = "noopener noreferrer");
            return false;
            var newWnd = window.open();
            newWnd.opener = null;
        });
});
$(function() {
    "use strict";
    $('form#ajax').on('submit', function() {
        var that = $(this),
            url = that.attr('action'),
            type = that.attr('method'),
            data = {};
        that.find('[name]').each(function(index, value) {
            var that = $(this),
                name = that.attr('name'),
                value = that.val();
            data[name] = value;
        });
        $.ajax({
            url: url,
            type: type,
            data: data,
            success: function(response) {
                $('#display').html(response).delay(8000).fadeOut(1000);
            }
        });
        return false;
    });
});
for (var i = 0; i < document.links.length; i++) {/*this highlights the current active link*/
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}
$(function() {
  $("#date").datepicker();
})
