<?php
require_once 'curl.php';

if (isset($_POST['process'])) {
    $files = $_FILES['files']['name'];

    $totalFiles = count($files);
    if ($totalFiles <= 0 ) {
        die("Please select file first!");
    }

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $temporaryFile = $_FILES['files']['tmp_name'][$i];
        $fileExt = explode('.', $fileName);
        $originalFileName = '';

        if (count($fileExt) > 2) {
            array_pop($fileExt);
            $originalFileName = implode('.', $fileExt) . '.txt';
        } else {
            $originalFileName = $fileExt[0] . '.txt';
        }

        $targetFile = 'tmp-files/' . $originalFileName;
        $upload = move_uploaded_file($temporaryFile, $targetFile);
        if (!$upload) {
            echo $fileName . ' can`t uploaded! <br>';
        } else {

            $lines = file($targetFile);
            $encodedFile = $lines[1]; // line ke-2

            $result = decodeFiles($encodedFile);

            // Write php file
            $newFileName = str_replace('.txt', '.php', $originalFileName);
            $path = 'decoded-files/' . $newFileName;
            if (file_exists($path)) {
                unlink($path);
            }
            $finalResult = getDecodedContent($result);
            $finalResult = htmlspecialchars_decode($finalResult);
            file_put_contents($path, $finalResult);
        }
    }

    echo "Done! Please copy all files that have been decoded in the decoded-files directory...";

} else {
    header('Location: index.php');
}