<?php

function create_ph_users_db() {

    global $wpdb;
    $new_tablename = $wpdb->prefix."physics_users"; //wp_new_db

    if ($wpdb->get_var("SHOW TABLES LIKE '$new_tablename'") != $new_tablename) {

        $charset_collate = $wpdb->get_charset_collate();

        $newdb_query="CREATE TABLE $new_tablename(
            id int(10) NOT NULL AUTO_INCREMENT,
            email varchar(255),
            userlogin varchar(255),
            pass varchar(255),
            telephone varchar(255),
            username varchar(255),
            PRIMARY KEY (id),
            UNIQUE (email)      
        ) $charset_collate;";

        require_once( ABSPATH ."wp-admin/includes/upgrade.php" );
        dbDelta( $newdb_query );
    } else {

    }
}


function register_ph_user() {

    if(isset($_POST['submit'])) {

        global $wpdb;
        $tablename = $wpdb->prefix.'physics_users';

        $new_email = $_POST['email'];
        $new_login = $_POST['userlogin'];
        $new_pass = $_POST['pass'];
        $new_telephone = $_POST['online_phone'];
        $new_name = $_POST['username'];

        $pass_hashed = password_hash($new_pass, PASSWORD_DEFAULT);

        $data = array( 'email' => $new_email, 'userlogin' => $new_login, 'pass' => $pass_hashed, 'telephone' => $new_telephone, 'username' => $new_name);
        $format = array( '%s', '%s', '%s', '%s', '%s' );
        if (!$wpdb->insert($tablename, $data, $format)) {
            $_POST['email'] = '';
        } else {
          
        }
    } else {

    }
}


function auth_result() {
    if(isset($_POST['login'])) {

        global $wpdb;
        $auth_email = trim($_POST['email']);
        $table_result = $wpdb->prefix.'physics_users';
        $results = $wpdb->get_row( "SELECT * FROM $table_result WHERE email = '$auth_email' ;");

        if ($results) {
            if (password_verify($_POST['pass'], $results->pass)) {
                $_SESSION['username'] = $results->username;
                echo '<h4 style="color:red">Вы авторизованы как: '.$_SESSION['username'].'</h4>';
            } else {
                echo 'Неправильный пароль!';
            }
        } else {
            echo 'Пользователь не существует!';
        }
    } elseif (isset($_SESSION['username'])) {
        echo '<h4 style="color:red">Вы авторизованы как: '.$_SESSION['username'].'</h4>';
    } else {
        echo '<p style="color:red">Неавторизованный пользователь</p>';
    }
}

function check_auth() {

    if(isset($_SESSION['username'])) {

        $auth_user = $_SESSION['username'];
        global $wpdb;
        $table_result = $wpdb->prefix.'physics_users';
        $results = $wpdb->get_row( "SELECT * FROM $table_result WHERE username = '$auth_user' ;");
        if ($results) {
            echo '<p style="color:red">Вы авторизованы как '.$results->username.'</p>';    
        }
    } else {
        echo '<p style="color:red">Неавторизованный пользователь</p>';
    }
}

?>