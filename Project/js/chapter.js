$(document).ready(loadChapter());

function loadChapter() {
    $.ajax({
        type: "GET",
        headers: {
            token: localStorage.getItem("auth")
        },
        url: window.location.href +"/1",
        async: true,
        contentType: "application/json; charset=utf-8",
        dataType: "text",
        success: function (data) {
            if (data) {
                $('.container').append(data);
            }
        }
    });
}