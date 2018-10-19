$(function() {

    $("#Login").submit(function(e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        var login = $("#InputLogin").val();
        var passwd = $("#InputPassword").val();
        $.ajax({
            type: 'POST',
            url: "/login",
            dataType: "json",
            data: {
                login: login,
                passwd: passwd
            }
        }).done(function(response) {
            if (response == true) {
                document.location.href = '/';
            } else if (response == false) {
                $("#InvalidPasswd").html("Invalid login or password");
            }
        });
    })

    $("#mainpagenav").click(mainPage);
    $("#allentriesnav").click(allEntries);
    $("#createentryinterface").click(createEntryInterface);
    $("#createuserinterface").click(createUserInterface);
    $("#displayusers").click(allUsers);
    $("#logout").click(logout);
});

function mainPage()
{
    $.ajax({
        url: "/root"
    }).done(function(data) {
        $(".jscontent").html(data);

        $(".mojemenu").removeClass("active list-group-item-primary");
        $("#mainpagenav").addClass("active");

        console.log("strona glowna");
    }).fail(function(e) {
        console.log(e);
    })
}

function allEntries(e)
{
    $.ajax({
        url: "/entries"
    }).done(function(data) {
        $(".jscontent").html(data);
        $(".jseditentry").click(editEntryInterface);
        $(".jsdeleteentry").click(deleteEntry);
        $(".mojemenu").removeClass("active list-group-item-primary");
        $("#allentriesnav").addClass("active");
        console.log("wszystkie wpisy");
    }).fail(function(e) {
        console.log(e);
    })
}

function editEntryInterface()
{
    $.ajax({
        url: "/edit_entry_i/"+this.dataset.editid
    }).done(function(data) {
        console.log("interfejs edycji");
        $(".jscontent").html(data);
        $("#editentrybutton").click(editEntryQuery);
    }).fail(function(e) {
        console.log(e);
    })
}

function editEntryQuery(event)
{
    event.preventDefault();
    var edit_news_title = $("#EditNewsTitle").val();
    var edit_news_content = $("#EditNewsContent").val();
    var edit_entry_id = $("#editentrybutton").data("id");
    $.ajax({
        type: 'POST',
        url: "/edit_entry/"+edit_entry_id,
        data: {
            edit_news_title: edit_news_title,
            edit_news_content: edit_news_content
        }
    }).done(function(data) {
        window.alert("Wpis został zmieniony");
        $(".jscontent").html(allEntries());
        console.log("wpis zmieniony");
    }).fail(function(e) {
        console.log(e);
    })
}

function deleteEntry(event)
{
    var delete_entry_id = this.dataset.deleteid;
    var n = this.dataset.n;
    $.ajax({
        type: 'POST',
        url: "/delete_entry/"+delete_entry_id
    }).done(function() {
        window.alert("Usunales wpis");
        $("#"+n).remove();
        console.log("usunelo wpis");
    }).fail(function(e) {
        console.log(e);
        window.alert("Cos poszlo nie tak");
    })
}

function createEntryInterface(e)
{
    $.ajax({
        url: "/create_entry_i"
    }).done(function(data) {
        $(".jscontent").html(data);
        $("#NewEntry").submit(createEntryQuery);

        $(".mojemenu").removeClass("active list-group-item-primary");
        $("#createentryinterface").addClass("active");

        console.log("interfejs tworzenia wpisu");
    }).fail(function(e) {
        console.log(e);
    })
}

function createEntryQuery(event)
{
    event.preventDefault();
    var news_title = $("#NewsTitle").val();
    var news_content = $("#NewsContent").val();
    $.ajax({
        type: 'POST',
        url: "/create_entry",
        data:{
            news_title: news_title,
            news_content: news_content
        }
    }).done(function() {
        window.alert("Pomyslnie dodano wpis");
        console.log("dodano wpis");
        document.getElementById("NewEntry").reset();
    }).fail(function(e) {
        console.log(e);
    })
}

function createUserInterface(e)
{
    $.ajax({
        url: "/create_user_i"
    }).done(function(data) {
        $(".jscontent").html(data);
        $("#CreateUser").submit(createUserQuery);

        $(".mojemenu").removeClass("active list-group-item-primary");
        $("#createuserinterface").addClass("active");

        console.log("interfejs tworzenia uzytkownika");
    }).fail(function(e) {
        console.log(e);
    })
}

function createUserQuery(event)
{
    event.preventDefault();
    var new_u_nick = $("#NewUNickname").val();
    var new_u_login = $("#NewULogin").val();
    var new_u_passwd = $("#NewUPassword").val();
    var user_type = $(".user_type:checked").val();
    $.ajax({
        type: 'POST',
        url: "/create_user",
        data:{
            new_u_nick: new_u_nick,
            new_u_login: new_u_login,
            new_u_passwd: new_u_passwd,
            user_type: user_type
        }
    }).done(function() {
        window.alert("Pomyslnie dodano uzytkownika");
        console.log("dodano usera");
        document.getElementById("CreateUser").reset();
    }).fail(function(e) {
        console.log(e);
    })
}

function allUsers()
{
    $.ajax({
        url: "/users"
    }).done(function(data) {
        $(".jscontent").html(data);
        $(".jsedituser").click(editUserInterface);
        $(".jsdeleteuser").click(deleteUser);

        $(".mojemenu").removeClass("active list-group-item-primary");
        $("#displayusers").addClass("active");

        console.log("all users");
    }).fail(function(e) {
        console.log(e);
    })
}

function editUserInterface()
{
    $.ajax({
        url: "/edit_user_i/"+this.dataset.editid
    }).done(function(data) {
        console.log("interfejs edycji");
        $(".jscontent").html(data);
        $("#edituserbutton").click(editUserQuery);
    }).fail(function(e) {
        console.log(e);
    })
}

function editUserQuery(event)
{
    event.preventDefault();
    var edit_u_nickname = $("#EditUNickname").val();
    var edit_u_login = $("#EditULogin").val();
    var edit_u_passwd = $("#EditUPasswd").val();
    var edit_u_type = $(".u_type:checked").val();
    var edit_user_id = $("#edituserbutton").data("edituserid");
    $.ajax({
        type: 'POST',
        url: "/edit_user/"+edit_user_id,
        data: {
            edit_u_nickname: edit_u_nickname,
            edit_u_login: edit_u_login,
            edit_u_passwd: edit_u_passwd,
            edit_u_type: edit_u_type
        }
    }).done(function(data) {
        window.alert("Uzytkownik został zmieniony");
        $(".jscontent").html(allUsers());
        console.log("user zmieniony");
    }).fail(function(data) {
        console.log(data);
        console.log("wystapil blad");
    })
}

function deleteUser()
{
    var delete_user_id = this.dataset.deleteid;
    var a = this.dataset.n;
    console.log(a);
    $.ajax({
        type: 'POST',
        url: "/delete_user/"+delete_user_id
    }).done(function() {
        window.alert("Usunales usera o id: "+a);
        $("#"+a).remove();
        console.log("user deleted");
    }).fail(function(e) {
        console.log(e);
        console.log("cos poszlo nie tak");
    })
}

function logout()
{
    $.ajax({
        url: "/logout"
    }).done(function() {
        $("body").empty();
        $("body").load("/logout");
        console.log("done");
    }).fail(function(e) {
        console.log(e);
    })
}