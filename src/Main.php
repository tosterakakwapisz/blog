<?php
namespace Toster;

class Main
{
    var $content;
    function __construct()
    {
        $this->smarty = new \Smarty();
        $this->smarty->setTemplateDir('../private/templates');
        $this->smarty->setCompileDir('../private/templates_c');
        $this->dbConnect();
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
            $this->parse();
            $this->main();
        } elseif (!isset($_SESSION['id'])) {
            $this->smarty->assign("logged", false);
            if (isset($_POST['login']) && isset($_POST['passwd'])) {
                $login = $_POST['login'];
                $password = $_POST['passwd'];
                $salt = $this->hashed($login);
                $crypted = crypt($password, '$6$rounds=500000$' . $salt);
                $pass_check=$this->dbh->prepare("SELECT * FROM Users WHERE u_Login=:Login AND u_Password=:Crypted");
                $pass_check->bindValue(":Login", $login);
                $pass_check->bindValue(":Crypted", $crypted);
                $pass_check->execute();
                $pass_check_r=$pass_check->fetch();

                if ($login == $pass_check_r['u_Login'] && $crypted == $pass_check_r['u_Password']) {
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
                    header("Location: /");
                } elseif ($login != $pass_check_r['u_Login'] || $password != $pass_check_r['u_Password']) {
                    $this->smarty->assign("validate_pass", "Invalid login or pass");
                }
            } else {
                $this->content = $this->smarty->fetch("login.tpl");
            }
        }
    }

    function hashingPasswd($password)
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

    function hashed($login)
    {
        $db_hash = $this->dbh->prepare("SELECT u_Password FROM Users WHERE u_Login = :Login");
        $db_hash->bindParam(":Login", $login);
        $db_hash->execute();
        $hashed_pass = $db_hash->fetchAll();
        if (isset($hashed_pass[0]['u_Password'])) {
            $hash = $hashed_pass[0]['u_Password'];
            return explode("$", $hash)[3];
        } else {
          return NULL;
        }
    }

    function parse()
    {
        $this->uri = explode("/", $_SERVER['REQUEST_URI']) ;
    }

    function main()
    {
        if ($this->uri[1] == "") {
            $this->smarty->assign("user_Type", $_SESSION['user_type']);
            $this->content = $this->smarty->fetch("main_page.tpl");
        } elseif ($this->uri[1] == "entries") {
            if (isset($_SESSION['user_type'])){
                $this->displayAllEntries();
            }
        } elseif ($this->uri[1] == "create_entry_i") {
            if (isset($_SESSION['user_type'])){
                $this->smarty->assign("user_Type", $_SESSION['user_type']);
                $this->content = $this->smarty->fetch("new_entry.tpl");
            }
        } elseif ($this->uri[1] == "create_entry") {
            if (isset($_SESSION['user_type'])){
                $this->createEntry();
            }
        } elseif ($this->uri[1] == "edit_entry_i") {
            if ($_SESSION['user_type'] <= 2) {
                $this->editEntryInterface();
            }
        } elseif ($this->uri[1] == "edit_entry") {
            if ($_SESSION['user_type'] <= 2) {
                $this->editEntryQuery();
            }
        } elseif ($this->uri[1] == "create_user_i") {
            if ($_SESSION['user_type'] <= 1) {
                $this->smarty->assign("user_Type", $_SESSION['user_type']);
                $this->content = $this->smarty->fetch("create_user.tpl");
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
            }
        } elseif ($this->uri[1] == "logout") {
            $this->logout();
        }
    }

    function displayAllEntries()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $dae = $this->dbh->prepare("SELECT * FROM News ORDER BY n_Date DESC");
        $dae->execute();
        $dae_r = $dae->fetchAll();
        $this->smarty->assign("dae_r", $dae_r);
        $this->content = $this->smarty->fetch("all_entries.tpl");
    }

    function createEntry()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        if (isset($_POST['news_title']) && isset($_POST['news_content'])) {
            $news_title = $_POST['news_title'];
            $news_content = $_POST['news_content'];
            $nickname = $_SESSION['nickname'];
            $ce = $this->dbh->prepare("INSERT INTO News (nId, n_Title, n_Content, n_AuthorNickname, n_Date) VALUES (NULL, :Title, :Content, :Nick, NOW());");
            $ce->bindValue(":Title", $news_title);
            $ce->bindValue(":Content", $news_content);
            $ce->bindValue(":Nick", $nickname);
            $ce->execute();
            $this->smarty->assign("creation_success", true);
        } elseif (!isset($_POST['news_title']) || !isset($_POST['news_content'])) {
            $this->smarty->assign("noTitleOrContent", "Wprowadź poprawnie tytuł lub zawartość newsa");
        }
    }

    function editEntryInterface()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $se = $this->dbh->prepare("SELECT * FROM News WHERE nId = :news_id;");
        $se->bindValue(":news_id", $this->uri[2]);
        $se->execute();
        $se_r = $se->fetchAll();
        $this->smarty->assign("se_r", $se_r[0]);
        $this->content = $this->smarty->fetch("edit_entry.tpl");
    }

    function editEntryQuery()
    {
        if (isset($_POST['edit_news_title']) && isset($_POST['edit_news_content'])) {
            $ee = $this->dbh->prepare("UPDATE News SET n_Title = :edit_title, n_Content = :edit_content, n_Date = NOW() WHERE News.nId = :news_id;");
            $ee->bindValue(":edit_title", $_POST['edit_news_title']);
            $ee->bindValue(":edit_content", $_POST['edit_news_content']);
            $ee->bindValue(":news_id", $this->uri[2]);
            $ee->execute();
            $this->smarty->assign("update_success", true);
        } elseif (!isset($_POST['edit_news_title']) || !isset($_POST['edit_news_content'])) {
            $this->smarty->assign("noTitleOrContent", "Wprowadź poprawnie tytuł lub zawartość newsa");
        }
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->fetch("all_entries.tpl");
    }

    function createUser()
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
            $this->smarty->assign("creat_user_success", true);
        } elseif (!isset($_POST['new_u_nick']) || !isset($_POST['new_u_login']) || !isset($_POST['new_u_passwd']) || !isset($_POST['user_type'])) {
            $this->smarty->assign("formNotFilled", "Wprowadz poprawne dane uzytkownika");
        }
    }

    function displayAllUsers()
    {
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $dau = $this->dbh->prepare("SELECT * FROM Users WHERE uId != 1 ORDER BY uId ASC");
        $dau->execute();
        $dau_r = $dau->fetchAll();
        $this->smarty->assign("dau_r", $dau_r);
        $this->content = $this->smarty->fetch("users.tpl");
    }

    function editUserInterface()
    {
        $su = $this->dbh->prepare("SELECT * FROM Users WHERE uId = :user_id");
        $su->bindValue(":user_id", $this->uri[2]);
        $su->execute();
        $su_r = $su->fetchAll();
        $this->smarty->assign("su_r", $su_r[0]);
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->fetch("edit_user.tpl");
    }

    function editUserQuery() //DOKONCZYC INTERFEJS!!!!
    {
        if (isset($_POST['edit_u_nickname']) && isset($_POST['edit_u_login']) && isset($_POST['edit_u_passwd'])) {
            echo "1 </br><pre>";
            print_r($this->uri[2]);
            echo "</pre>";
            $eu = $this->dbh->prepare("UPDATE Users SET u_Login = :user, u_Password = :crypted, u_Nickname = :nick /*, u_UserType = :type  CO DA MI TU RADIO??? */ WHERE Users.uId = :user_id;");
            $password = $_POST['edit_u_passwd'];
            $crypted = $this->hashingPasswd($password);
            $eu->bindValue(":crypted", $crypted);
            $eu->bindValue(":login", $_POST['edit_u_login']);
            $eu->bindValue(":nick", $_POST['edit_u_nickname']);
            $eu->bindValue(":user_id", $this->uri[2]);
            //uncomment when Im done with radio in interface
            //$eu->bindValue(":type", $_POST['edit_u_type']);
            $eu->execute();
        } elseif (isset($_POST['edit_u_nickname']) && isset($_POST['edit_u_login'])) {
            $eu = $this->dbh->prepare("UPDATE Users SET u_Login = :user, u_Nickname = :nick /*, u_UserType = :type  CO DA MI TU RADIO??? */ WHERE Users.uId = :user_id;");
            $eu->bindValue(":login", $_POST['edit_u_login']);
            $eu->bindValue(":nick", $_POST['edit_u_nickname']);
            $eu->bindValue(":user_id", $this->uri[2]);
            //uncomment when Im done with radio in interface
            //$eu->bindValue(":type", $_POST['edit_u_type']);
            $eu->execute();
        }
        $this->smarty->assign("user_Type", $_SESSION['user_type']);
        $this->content = $this->smarty->fetch("edit_user.tpl");
    }

    function logout()
    {
        unset($nick_name);
        session_unset();
        session_destroy();
        header("Location: /");
    }

}

    /*


    public function logout()
    {
        if (isset($_GET['logout']) && $_GET['logout'] == "true") {
            unset($nick_name);
            session_unset();
            session_destroy();
            header("Location: index.php");
        }
    }

    */
