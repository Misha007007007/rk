<?php

    include "databaseconnect.php";
    $login = "";
    $pass = "";
    
    $login = $_POST['login'];
    $pass = $_POST['password'];

    // $query = "SELECT login FROM users WHERE ";
    // $result = mysqli_query($conn, $queryCount);

    $stmt = $conn->prepare("SELECT login FROM users WHERE login = ? AND password = ?");
    $stmt->bind_param("ss", $login, $pass);
    $result = $stmt->execute();
    
    $result = mysqli_stmt_get_result($stmt);
    $stmt->close();

    $row = mysqli_fetch_row($result);
    if ($pass != "" && $login != ""){
        
        if (is_countable($row) && count($row) > 0){
            
            RedirectWithMethodPost("lk.php");

        }
        else{
            echo "<br> Неправильно введен пароль или логин от устройства";
        }
    }else{
        echo "<br> Заполните все поля";
    }

    function RedirectWithMethodPost($dest){
        $url = $params = '';
        if( strpos($dest,'?') ) { list($url,$params) = explode('?',$dest,2); }
        else { $url = $dest; }
        echo "<form id='the-form' 
            method='post' 
            enctype='multipart/form-data' 
            action='$url'>\n";
        foreach( explode('&',$params) as $kv )
        {
            if( strpos($kv,'=') === false ) { continue; }
            list($k,$v) = explode('=',$kv,2);
            echo "<input type='hidden' name='$k' value='$v'>\n";
        }
        echo <<<ENDOFFORM
            <p id="the-button" style="display:none;">
            Click the button if page doesn't redirect within 3 seconds.
            <br><input type="submit" value="Click this button">
            </p>
            </form>
            <script type="text/javascript">
            function DisplayButton()
            {
            document.getElementById("the-button").style.display="block";
            }
            setTimeout(DisplayButton,3000);
            document.getElementById("the-form").submit();
            </script>
            ENDOFFORM;
}
?>