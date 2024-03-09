<?php
$filePath = 'your_file_path.txt';

try {
    // Open the file for reading
    $fileHandle = fopen($filePath, 'r');
    
    // Read and print each line of the file
    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
        echo $line;
    }
    
    // Close the file
    fclose($fileHandle);
} catch (Exception $e) {
    // Handle any errors that occur during file reading
    echo 'An error occurred: ' . $e->getMessage();
}

// Wait for user input before exiting the program
echo "Press Enter to exit";
fgets(STDIN);
?>
