var machine = window.location.protocol + "//" + window.location.hostname + ":" + window.location.port;
var offset = 0;

function ConvertFormToJSON(form) {
  var array = jQuery(form).serializeArray();
  var json = {};

  jQuery.each(array, function () {
    json[this.name] = this.value || "";
  });

  return json;
}

function loadUser() {
  $.ajax({
    type: "GET",
    headers: {
      token: localStorage.getItem("auth")
    },
    url: machine + '/user',
    async: true,
    contentType: "application/json; charset=utf-8",
    dataType: "text",
    success: function (data) {
      if(data) {
      $('#loginBox').remove();
      $('.rlist').empty();
      $('.rlist').append(data);
      }
    }
  });
}

function loadNovels() {
  $.ajax({
    type: "GET",
    url: machine + '/novel',
    data: "off="+offset,
    async: true,
    contentType: "application/json; charset=utf-8",
    dataType: "text",
    success: function (data) {
      if (data) {
        $('.container').append(data);
        offset += 10;
      }
    }
  });
}

function refresh() {
  if (localStorage.getItem("auth")) {
    if (!window.location.hash || performance.navigation.type == 1) {
      loadUser();
      window.location = machine + "/#Welcome";
    }
  }
  loadNovels();
}

$(function () {
  $("button#logout").click(function () {
    localStorage.removeItem("auth");
    $("userInfo").hide();
    window.location = machine;
  });
});

$(function () {
  var form = $("form#loginForm");

  $(form).submit(function (event) {
    event.preventDefault();

    $.ajax({
      type: "POST",
      data: JSON.stringify(ConvertFormToJSON(form)),
      url: machine + "/login",
      async: true,
      contentType: "application/json; charset=utf-8",
      dataType: "json",
      success: function (data) {       
        var tk = JSON.parse(data);

        if (tk.error) {
         alert(tk.error);
        } else {
          localStorage.setItem("auth", tk.token);
          $("#loginBox").modal("hide");
          window.location = machine;
        }
      }
    });
  });
});

$(document).ready(refresh());

$(window).on("scroll", function () {
  var scrollHeight = $(document).height();
  var scrollPosition = $(window).height() + $(window).scrollTop();
  if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
    // when scroll to bottom of the page
    loadNovels();
  }
});