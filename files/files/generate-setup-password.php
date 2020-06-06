<?php
function generate_setup_password_salt() {
    $salt = time() . '*' . mt_rand(0, 60000);
    $salt = md5($salt);
    return $salt;
}

function encrypt_setup_password($password, $salt) {
    return $salt . ':' . sha1($salt . ':' . $password);
}

echo encrypt_setup_password($argv[1], generate_setup_password_salt());
?>
