"use strict";

(function() {
    'use strict';
    function showSize() {
        $('#size').html('HEIGHT : ' + $(window).height() + '<br>WIDTH : ' + $(window).width());
        $('#size2').html('HEIGHT : ' + screen.height + '<br>WIDTH : ' + screen.width);
        $('#size3').html('HEIGHT : ' + $('.main-content').height() + '<br>WIDTH : ' + $('.main-content').width());
    }
    $(window).on('resize', showSize);
    showSize();
})();

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
// https://www.youtube.com/watch?v=GrycH6F-ksY
// Codecourse ajax script below
$(function() {
    "use strict";
    $('form#ajax').on('submit', function() {
        var that = $(this),
            url  = that.attr('action'),
            type = that.attr('method'),
            data = {};
        that.find('[name]').each(function(index, value) {
            var that   = $(this),
                name   = that.attr('name'),
                value  = that.val();
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

$(function() {
     "use strict";
     $('form#ajax1').on('submit', function() {
         var that = $(this),
             url  = that.attr('action'),
             type = that.attr('method'),
             data = {};
         that.find('[name]').each(function(index, value) {
             var that   = $(this),
                 name   = that.attr('name'),
                 value  = that.val();
             data[name] = value;
         });
         $.ajax({
             url: url,
             type: type,
             data: data
         });
         return false;
     });
 });

for (var i = 0; i < document.links.length; i++) { /*this highlights the current active link*/
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'current';
    }
}

$(function() {
    $("#date").datepicker();
});

$(function() {
    $("#last_date").datepicker();
});

$(function() {
    $(".grab").tooltip();
});

(function() {
  "use strict";
    $(".ancestry--ancestryContent").hide();
    $('button.grab').on('click', function() {
        $(this).next('.ancestry--ancestryContent').slideToggle('slow');
        $(this).toggleClass('opa');
    });
})();

$('#pass').keyup(function(e) {
     var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
     var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
     var enoughRegex = new RegExp("(?=.{6,}).*", "g");
     if (false == enoughRegex.test($(this).val())) {
             $('#passstrength').html('More Characters');
     } else if (strongRegex.test($(this).val())) {
             $('#passstrength').className = 'ok';
             $('#passstrength').html('Strong!');
     } else if (mediumRegex.test($(this).val())) {
             $('#passstrength').className = 'alert';
             $('#passstrength').html('Medium!');
     } else {
             $('#passstrength').className = 'error';
             $('#passstrength').html('Weak!');
     }
     return true;
});
// example
// <input type="password" name="pass" id="pass" />
// <span id="passstrength"></span>

(function() {
  $('#content').keyup(function() {
    var content = $(this).val().length;
    $('#feedback').html(content);
  });
})();

$(function() {
  $('#content').wordCount();
});

$(function() {
    $("#tabs" ).tabs({orientation: "vertical" });
  });
