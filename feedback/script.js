$(document).ready(function () {
    $('.close_popup').on("click", function(event)
    {
        event.preventDefault();
        history.back();
    });

    $(document).on("modify", ":input", function (event, data) {
        if (event.target.id == "edit-submitted-vash-email") {
            if (valid($.trim(data.currentValue), true)) {
                $('#notok1').css("display", "none");
                $('#ok1').css("display", "block");
                $(this).css("border", "1px solid transparent");
            }
            else {
                $('#ok1').css("display", "none");
                $('#notok1').css("display", "block");
                $(this).css("border", "1px solid #d11313");
            }
        }
        else {
            if (valid($.trim(data.currentValue))) {
                if (event.target.id == "edit-submitted-topic")
                    $('#error3').css("display", "none");
                if (event.target.id == "edit-submitted-fio")
                    $('#error1').css("display", "none");
                $(this).css("border", "1px solid transparent");
            }
            else {
                if (event.target.id == "edit-submitted-topic")
                    $('#error3').css("display", "block");
                if (event.target.id == "edit-submitted-fio")
                    $('#error1').css("display", "block");
                if (event.target.id == "edit-submitted-vopros") {
                    $('#ok2').css("display", "none");
                    $('#notok2').css("display", "block");
                }
                $(this).css("border", "1px solid #d11313");
            }
        }
    });

    $('.webform-client-form').on('submit', function (event) {
        event.preventDefault();
        var topic = $.trim($('#edit-submitted-topic').val());
        var submittedfio = $.trim($('#edit-submitted-fio').val());
        var submittedvash_email = $.trim($('#edit-submitted-vash-email').val());
        var submittedvopros = $.trim($('#edit-submitted-vopros').val());
        var allright = true;
        if (!valid(topic)) {
            $('#error3').css("display", "block");
            $('#edit-submitted-topic').css("border", "1px solid #d11313");
            allright = false;
        }
        if (!valid(submittedfio)) {
            $('#error1').css("display", "block");
            $('#edit-submitted-fio').css("border", "1px solid #d11313");
            allright = false;
        }
        if (!valid(submittedvash_email, true)) {
            $('#ok1').css("display", "none");
            $('#notok1').css("display", "block");
            $('#edit-submitted-vash-email').css("border", "1px solid #d11313");
            allright = false;
        }
        if (!valid(submittedvopros)) {
            $('#edit-submitted-vopros').css("border", "1px solid #d11313");
            allright = false;
        }

        if (!allright)
            return;

        $('.webform-client-form').toggle();
        $('.close_popup').toggle();
        $('#webform').append($('<span id="sending1" style="vertical-align:middle;">').html("Письмо отправляется..."));
        $('#webform').append($('<img id="sending" src="../images/sending.gif" style="vertical-align:middle;" alt="error" style="display:none;">'));
        $.ajax({
            method: 'post',
            url: 'action.php',
            data: {
                topic: topic,
                submittedfio: submittedfio,
                submittedvash_email: submittedvash_email,
                submittedvopros: submittedvopros
            },
            cache: false
        }).done(function (data) {
            console.log(data);
            $('#sending1').toggle();
            $('#sending').toggle();
            if (data == "mail sent")
                $('#webform').append($('<div style="height:394px; width: 562px; font-size:18px; color: #0000FF; overflow: visible;" class="ensuarence" >').append($('<span style="vertical-align:middle;">').html("Письмо отправлено - однажды, вам ответят...")));
            else
                $('#webform').append($('<div style="height:394px; width: 562px; font-size:18px; color: #0000FF; overflow: visible;" class="ensuarence" >').append($('<span style="vertical-align:middle;">').html("Увы, возникла ошибка, и письмо пропало - возможно, стоит попробовать позже...")));
            $('.ensuarence').append($('<a id="close_popup" class="close_popup" style="float: none;">').attr('href',"http://lib.surgu.ru/").html("Вернуться"));
            $('#close_popup').on("click", function(event)
            {
                event.preventDefault();
                history.back();
            });
        });
    });
});
//text - string value, ismail - bool value and is false by default
function valid(text, ismail) {
    ismail = typeof ismail != 'undefined' ? ismail : false;
    if (ismail)
        return /^[-a-z0-9!#$%&'*+/=?^_`{|}~]+(\.[-a-z0-9!#$%&'*+/=?^_`{|}~]+)*@([a-z0-9]([-a-z0-9]{0,61}[a-z0-9])?\.)*(aero|arpa|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|[a-z][a-z])$/.test(text);
    else
        return !/^[ \t\r\n\v\f]*$/.test(text);
}