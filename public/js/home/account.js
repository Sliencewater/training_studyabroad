$("#signup").click(function() {
    $("#div_user_login").height(400+"px");
    $("#form_signup").removeClass("hidden");
    $("#form_signin").addClass("hidden");
    $("#signin").removeClass("div-user-login-active");
    $("#signup").addClass("div-user-login-active");
});
$("#signin").click(function() {
    $("#div_user_login").height(360+"px");
    $("#form_signin").removeClass("hidden");
    $("#form_signup").addClass("hidden");
    $("#signup").removeClass("div-user-login-active");
    $("#signin").addClass("div-user-login-active");
});