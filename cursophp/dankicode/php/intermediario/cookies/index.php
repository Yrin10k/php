<?php 
session_start();
setcookie('nome', 'Guilherme', time()-(60*60*24),'/');
echo $_COOKIE['nome'];

//setcookie(string $name, string $value = "", array $options = []): bool

/*setcookie(
    string $name,
    string $value = "",
    int $expires_or_options = 0,
    string $path = "",
    string $domain = "",
    bool $secure = false,
    bool $httponly = false
): bool */

?>