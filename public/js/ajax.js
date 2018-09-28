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

    $("#NewEntry").submit(function(e) {
        e.preventDefault();
        var news_title = $("#NewsTitle").val();
        var news_content = $("#NewsContent").val();
        $.ajax({
            type: 'POST',
            url: "/create_entry",
            dataType: "json",
            data: {
                news_title: news_title,
                news_content: news_content
            }
        }).done(function(response) {
            $("#NewEntry")[0].reset();
            window.alert("Pomyslnie dodano newsa!");
        }).fail(function(e) {
            console.log(e);
            window.alert("Wystapil blad. Sprobuj jeszcze raz!");
        });
    })

    $("#EditEntry").submit(function(e) {
        e.preventDefault();
        var edit_news_title = $("#EditNewsTitle").val();
        var edit_news_content = $("#EditNewsContent").val();
        var url = window.location.pathname;
        var id = url.split("/");
        $.ajax({
            type: 'POST',
            url: "/edit_entry/"+id[2],
            dataType: "json",
            data: {
                edit_news_title: edit_news_title,
                edit_news_content: edit_news_content
            }
        }).done(function(response){
            console.log(response);
            $("#EditNewsTitle").val('');
            $("#EditNewsContent").val('');
            window.alert("Pomyslnie dodano newsa!");
        }).fail(function(e) {
            console.log(e);
            window.alert("Wystapil blad. Sprobuj jeszcze raz!");
        })
    })

    $().submit(function(e) {
        e.preventDefault
    })

    $("#CreateUser").submit(function(e) {
        e.preventDefault();
        var new_u_nick = $("#NewUNickname").val();
        var new_u_login = $("#NewULogin").val();
        var new_u_passwd = $("#NewUPassword").val();
        var user_type = $(".user_type:checked").val();
        console.log(user_type);
        $.ajax({
            type: 'POST',
            url: "/create_user",
            dataType: "json",
            data: {
                new_u_nick: new_u_nick,
                new_u_login: new_u_login,
                new_u_passwd: new_u_passwd,
                user_type: user_type
            }
        }).done(function(response) {
            $("#CreateUser")[0].reset();
            window.alert("Pomyslnie dodano uzytkownika!");
        }).fail(function(e) {
            console.log(e);
        })
    })

    $("#EditUser").submit(function(e) {
        e.preventDefault();
        var edit_u_nickname = $("#EditUNickname").val();
        var edit_u_login = $("#EditULogin").val();
        var edit_u_passwd = $("#EditUPasswd").val();
        var edit_u_type = $(".edit_u_type:checked").val();
        var url = window.location.pathname;
        var id = url.split("/");
        $.ajax({
            type: 'POST',
            url: "/edit_user/"+id[2],
            dataType: "json",
            data: {
                edit_u_nickname: edit_u_nickname,
                edit_u_login: edit_u_login,
                edit_u_passwd: edit_u_passwd,
                edit_u_type: edit_u_type
            }
        }).done(function(response) {
            $("#EditUNickname").val('');
            $("#EditULogin").val('');
            $("#EditUPasswd").val('');
            $(".edit_u_type:checked").val(false);
            console.log(response);
            window.alert("Pomyslnie edytowano uzytkownika");
        }).fail(function(e) {
            console.log(e);
            window.alert("Cos poszlo nie tak");
        })
    })

    $(".delete_entry").click(function() {
        var de = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "/delete_entry/"+de
        }).done(function() {
            console.log("wszystko ok");
            location.reload();
        }).fail(function(e) {
            console.log(e);
        })
    })

    $(".delete_user").click(function() {
        var du = $(this).attr('id');
        $.ajax({
            type: 'POST',
            url: "/delete_user/"+du
        }).done(function() {
            console.log("wszystko ok");
            location.reload();
        }).fail(function(e) {
            console.log(e);
        })
    })

});
