<?php
if (isset($_POST['content'])) {
    $content = $_POST['content'];
    $file_name = time() . '.txt';
    $file_path = 'https://chiasevip.com/files/' . $file_name;
    file_put_contents($file_path, $content);
    echo $file_name;
    exit;
}
?>
