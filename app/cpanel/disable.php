<?php

/* It is web based version of desktop environment like GNOME or KDE. 
 * It will have basic functionalities of any linux system like text editor, file-manager, terminal, calculator ,web based office suite etc. 
 * It will also able to run any command line programs like gcc, python, bc, vi,mysql etc.
 * It also have control panel for personalize user experience like changing wallpaper, manage user accounts.
 * It is also mobile enable so any one can easily use it from any remote place over the internet.
 * It is  fully written in php.
 * It is developed by:-
 * 
 * Parth Shah,
 * Chirag Vidja,
 * Janvi Patel
 *  
 * You can download our project from http://github.com/shahparth123/web-desktop
 * for more detail contact us at parth@parthhosting.com
 * 
 * COPYRIGHT NOTICE
 * ================
 * Web Desktop and all related original code...
 * Copyright 2014 Parth Shah,Chirag Vidja,Janvi Patel
 * 
 *  
 */
?>
<?php

include '../../core/init.php';
admin_protect();
if (isset($_GET['id']) == true && $_GET['id'] != "") {
    $id = san($_GET['id']);
    $a = mysql_query("select active from user where user_id=" . $id);
    $active = mysql_result($a, 0);
    if ($active == 1) {
        $new = 0;
    } else {
        $new = 1;
    }
    $q = "update user set active=" . $new . " where user_id=$id";
    echo $q;
    mysql_query($q) or die("error");
    header('Location:manageuser.php?success');
} else {
    echo "error";
}
?>
