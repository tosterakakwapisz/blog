<?php
namespace Toster;

class Main
{
    public $content;
    public function __construct()
    {
        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir('../private/templates');
        $this->smarty->setCompileDir('../private/templates_c');
        $this->dbConnect();
        $this->parse();
        session_start();
        $this->session();
        $menu = $this->smarty->fetch("menu.tpl");
        $header = $this->smarty->fetch("header.tpl");
        $footer = $this->smarty->fetch("footer.tpl");
        $navbar = $this->smarty->fetch("navbar.tpl");
        $this->smarty->assign("content", $this->content);
        $this->smarty->assign("menu", $menu);
        $this->smarty->assign("header", $header);
        $this->smarty->assign("footer", $footer);
        $this->smarty->assign("navbar", $navbar);
        $this->smarty->display("index.tpl");
    }

    public function dbConnect()
    {
        try {
            $this->dbh = new \PDO('mysql:host=localhost;dbname=toster', "root", "");
        } catch (PDOException $error) {
            print "Error!: " . $error->getMessage() . "<br/>";
            die();
        }
    }

    public function session()
    {
        if (isset($_SESSION['id'])) {
            $this->smarty->assign("logged", true);
            $this->main();
        } elseif (!isset($_SESSION['id'])) {
            $this->smarty->assign("logged", false);
            $this->content = $this->smarty->fetch("login.tpl");
            if ($this->uri[1] == "login") {
                $this->login();
            }
        }
    }

    public function hashingPasswd($password)
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 16; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $salt = implode($pass); //turn the array into a string
        $crypted = crypt($password, '$6$rounds=500000$' . $salt);
        return $crypted;
    }

    public function hashed($login)
    {
        $db_hash = $this->dbh->prepare("SELECT u_Password FROM Users WHERE u_Login = :Login");
        $db_hash->bindParam(":Login", $login);
        $db_hash->execute();
        $hashed_pass = $db_hash->fetchAll();
        if (isset($hashed_pass[0]['u_Password'])) {
            $hash = $hashed_pass[0]['u_Password'];
            return explode("$", $hash)[3];
        } else {
            return null;
        }
    }

    public function parse()
    {
        $this->uri = explode("/", $_SERVER['REQUEST_URI']) ;
    }

    public function main()
    {
        if ($this->uri[1] == "") {
            $this->smarty->assign("user_Type", $_SESSION['user_type']);
            $this->content = $this->smarty->fetch("main_page.tpl");
        } elseif ($this->uri[1] == "root") {
            $this->smarty->assign("user_Type", $_SESSION['user_type']);
            $this->content = $this->smarty->display("main_page.tpl");
            exit();
        } elseif ($this->uri[1] == "entries" ) {
            if (isset($_SESSION['user_type'])) {
                $this->displayAllEntries();
            }
        } elseif ($this->uri[1] == "create_entry_i") {
            if (isset($_SESSION['user_type'])) {
                $this->smarty->assign("user_Type", $_SESSION['user_type']);
                $this->content = $this->smarty->display("new_entry.tpl");
                exit();
            }
        } elseif ($this->uri[1] == "create_entry") {
            if (isset($_SESSION['user_type'])) {
                $this->createEntry();
            }
        } elseif ($this->uri[1] == "edit_entry_i") {
            if ($_SESSION['user_type'] <= 2) {
                $this->editEntryInterface();
            }
        } elseif ($this->uri[1] == "edit_entry") {
            if ($_SESSION['user_type'] <= 2) {
                $this->editEntryQuery();
                $this->displayAllEntries();
            }
        } elseif ($this->uri[1] == "delete_entry") {
            if ($_SESSION['user_type'] <= 2) {
                $this->deleteEntry();
            }
        } elseif ($this->uri[1] == "create_user_i") {
            if ($_SESSION['user_type'] <= 1) {
                $this->smarty->assign("user_Type", $_SESSION['user_type']);
                $this->content = $this->smarty->display("create_user.tpl");
                exit();
            }
        } elseif ($this->uri[1] == "create_user") {
            if ($_SESSION['user_type'] <= 1) {
                $this->createUser();
            }
        } elseif ($this->uri[1] == "users") {
            if ($_SESSION['user_type'] <= 1) {
                $this->displayAllUsers();
            }
        } elseif ($this->uri[1] == "edit_user_i") {
            if ($_SESSION['user_type'] <= 1) {
                $this->editUserInterface();
            }
        } elseif ($this->uri[1] == "edit_user") {
            if ($_SESSION['user_type'] <= 1) {
                $this->editUserQuery();
                $this->displayAllUsers();
            }
        } elseif ($this->uri[1] == "delete_user") {
            if ($_SESSION['user_type'] <= 1) {
                $this->deleteUser();
            }
        } elseif ($this->uri[1] == "logout") {
            $this->logout();
        }
    }

    // TESTING LOGIN WITH AJAX
    public function login()
    {
        $login = $_POST['login'];
        $password = $_POST['passwd'];
        $salt = $this->hashed($login);
        $crypted = crypt($password, '$6$rounds=500000$' . $salt);
        $pass_check=$this->dbh->prepare("SELECT * FROM Users WHERE u_Login=:Login AND u_Password=:Crypted");
        $pass_check->bindValue(":Login", $login);
        $pass_check->bindValue(":Crypted", $crypted);
        $pass_check->execute();
        $pass_check_r=$pass_check->fetch();
        if ($pass_check_r > 0) {
            $this->smarty->assign("logged", true);
            $found[0] = true;
            if ($pass_check_r['u_UserType'] == 1) {
                $_SESSION['user_type'] = 1;
                $this->smarty->assign("user_Type", 1);
            } elseif ($pass_check_r['u_UserType'] == 2) {
                $_SESSION['user_type'] = 2;
                $this->smarty->assign("user_Type", 2);
            } elseif ($pass_check_r['u_UserType'] == 3) {
                $_SESSION['user_type'] = 3;
                $this->smarty->assign("user_Type", 3);
            }
            $_SESSION['id'] = 1;
            $_SESSION['nickname'] = $pass_check_r['u_Nickname'];
            $content = $this->smarty->fetch("main_page.tpl");
            $menu = $this->smarty->fetch("menu.tpl");
            $navbar = $this->smarty->fetch("navbar.tpl");
            $this->smarty->assign("content", $content);
            $this->smarty->assign("menu", $menu);
            $this->smarty->assign("navbar", $navbar);
            $this->smarty->display("index.tpl");
            exit();
        } else {
            $found[0] = false;
            $this->smarty->assign("logged", false);
        }
        exit();
    }

    public function displayAllEntries()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $dae = $this->dbh->prepare("SELECT * FROM News ORDER BY n_Date DESC");
        $dae->execute();
        $dae_r = $dae->fetchAll();
        $this->smarty->assign("dae_r", $dae_r);
        $this->content = $this->smarty->display("all_entries.tpl");
        exit();
    }

    public function createEntry()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        if (isset($_POST['news_title']) && isset($_POST['news_content'])) {
            $ce = $this->dbh->prepare("INSERT INTO News (nId, n_Title, n_Content, n_AuthorNickname, n_Date) VALUES (NULL, :Title, :Content, :Nick, NOW());");
            $ce->bindValue(":Title", $_POST['news_title']);
            $ce->bindValue(":Content", $_POST['news_content']);
            $ce->bindValue(":Nick", $_SESSION['nickname']);
            $ce->execute();
            $this->content = $this->smarty->display("new_entry.tpl");
            exit();
        } elseif (!isset($_POST['news_title']) || !isset($_POST['news_content'])) {
            $this->smarty->assign("noTitleOrContent", "Wprowadź poprawnie tytuł lub zawartość newsa");
            $something = false;
        }
    }

    public function editEntryInterface()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $se = $this->dbh->prepare("SELECT * FROM News WHERE nId = :news_id;");
        $se->bindValue(":news_id", $this->uri[2]);
        $se->execute();
        $se_r = $se->fetchAll();
        $this->smarty->assign("se_r", $se_r[0]);
        $this->content = $this->smarty->display("edit_entry.tpl");
        exit();
    }

    public function editEntryQuery()
    {
        if (isset($_POST['edit_news_title']) && isset($_POST['edit_news_content'])) {
            $ee = $this->dbh->prepare("UPDATE News SET n_Title = :edit_title, n_Content = :edit_content, n_Date = NOW() WHERE nId = :news_id;");
            $ee->bindValue(":edit_title", $_POST['edit_news_title']);
            $ee->bindValue(":edit_content", $_POST['edit_news_content']);
            $ee->bindValue(":news_id", $this->uri[2]);
            $ee->execute();
            $this->smarty->assign("update_success", true);
            header('Content-Type: application/json; charset=utf8');
            echo json_encode(true);
            exit();
        } elseif (!isset($_POST['edit_news_title']) || !isset($_POST['edit_news_content'])) {
            $this->smarty->assign("noTitleOrContent", "Wprowadź poprawnie tytuł lub zawartość newsa");
            $something = false;
        }
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->fetch("all_entries.tpl");
    }

    function deleteEntry()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $de = $this->dbh->prepare("DELETE FROM News WHERE nId = :news_id;");
        $de->bindValue(":news_id", $this->uri[2]);
        $de->execute();
        $something = true;
        header('Content-Type: application/json; charset=utf8');
        echo json_encode($something);
        exit();
    }

    public function createUser()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        if (isset($_POST['new_u_nick']) && isset($_POST['new_u_login']) && isset($_POST['new_u_passwd']) && isset($_POST['user_type'])) {
            $cu = $this->dbh->prepare("INSERT INTO Users (uId, u_Login, u_Password, u_Nickname, u_UserType) VALUES (NULL, :Login, :Password, :Nick, :Type);");
            $password = $_POST['new_u_passwd'];
            $crypted = $this->hashingPasswd($password);
            $cu->bindValue(":Login", $_POST['new_u_login']);
            $cu->bindValue(":Password", $crypted);
            $cu->bindValue(":Nick", $_POST['new_u_nick']);
            $cu->bindValue(":Type", $_POST['user_type']);
            $cu->execute();
            $this->content = $this->smarty->display("new_entry.tpl");
        } elseif (!isset($_POST['new_u_nick']) || !isset($_POST['new_u_login']) || !isset($_POST['new_u_passwd']) || !isset($_POST['user_type'])) {
            $this->smarty->assign("formNotFilled", "Wprowadz poprawne dane uzytkownika");
        }
    }

    public function displayAllUsers()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $dau = $this->dbh->prepare("SELECT * FROM Users WHERE uId != 1 ORDER BY uId ASC");
        $dau->execute();
        $dau_r = $dau->fetchAll();
        $this->smarty->assign("dau_r", $dau_r);
        $this->content = $this->smarty->display("users.tpl");
        exit();
    }

    public function editUserInterface()
    {
        $su = $this->dbh->prepare("SELECT * FROM Users WHERE uId = :user_id");
        $su->bindValue(":user_id", $this->uri[2]);
        $su->execute();
        $su_r = $su->fetch();
        $this->smarty->assign("su_r", $su_r);
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->display("edit_user.tpl");
        exit();
    }

    public function editUserQuery()
    {
        if (isset($_POST['edit_u_nickname']) && isset($_POST['edit_u_login']) && isset($_POST['edit_u_passwd']) && isset($_POST['edit_u_type'])) {
            $eu = $this->dbh->prepare("UPDATE Users SET u_Login = :login, u_Password = :crypted, u_Nickname = :nick , u_UserType = :type WHERE uId = :userid;");
            $password = $_POST['edit_u_passwd'];
            $crypted = $this->hashingPasswd($password);
            $eu->bindValue(":crypted", $crypted);
            $eu->bindValue(":login", $_POST['edit_u_login']);
            $eu->bindValue(":nick", $_POST['edit_u_nickname']);
            $eu->bindValue(":type", $_POST['edit_u_type']);
            $eu->bindValue(":userid", $this->uri[2]);
            $eu->execute();
            $eu_r = $eu->fetch();
            $this->smarty->assign("su_r", $eu_r);
        }
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->fetch("edit_user.tpl");
    }

    function deleteUser()
    {
            $this->smarty->assign("user_Type", $_SESSION['user_type']);
            $du = $this->dbh->prepare("DELETE FROM Users WHERE uId = :user_id;");
            $du->bindValue(":user_id", $this->uri[2]);
            $du->execute();
            header("Location: /users");
            exit();
    }

    public function logout()
    {
        unset($nick_name);
        session_unset();
        session_destroy();
        $this->smarty->clearAssign(array('content','menu','navbar','logged'));
        $this->smarty->assign("logged", false);
        $this->smarty->assign("content", $this->smarty->fetch("login.tpl"));
        $this->smarty->display("index.tpl");
        exit();
    }
}
