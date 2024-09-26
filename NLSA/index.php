<?php
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    
    // Check if HTTP_HOST is set before using it
    $uri .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
    
    // Redirect to the HTML index page of your project
    header('Location: '.$uri.'/nlsa/index.html');
    exit;
?>

