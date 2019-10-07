<?php

$routes['/'] = function () {
    echo "<!DOCTYPE html>" . PHP_EOL;
    echo "<title>test</title>" . PHP_EOL;
    echo "<p>現在は" . h(date('Y年m月d日H時i分s秒')) . "です</p>" . PHP_EOL;
    echo h("<script>document.write('malicious code')</script>") . PHP_EOL;
    echo "<ul><li><a href='/phpinfo.php'><code>phpinfo()</code></a></ul>" . PHP_EOL;
};

$routes['/phpinfo.php'] = function () {
    phpinfo();
};

return $routes;
