<!-- store_text.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userText = $_POST["user_text"]; // Retrieve the entered text from the form
    
    // Store the entered text in a file
    $file = fopen("text_storage.txt", "a");
    fwrite($file, $userText . "\n");
    fclose($file);
    
    echo "Text stored successfully!";
}
// Explaination of the above code

// if ($_SERVER["REQUEST_METHOD"] == "POST"): This conditional statement checks if the request method is POST. It ensures that the code inside the if block will be executed only when the form is submitted.

// $userText = $_POST["user_text"];: This line retrieves the entered text from the form using the $_POST superglobal. $_POST["user_text"] corresponds to the name attribute of the text input field in the HTML form (<input type="text" name="user_text" ...>).

// $file = fopen("text_storage.txt", "a");: This line opens the file "text_storage.txt" in append mode ("a"). It creates the file if it doesn't exist. The fopen() function returns a file pointer resource that is stored in the $file variable.

// fwrite($file, $userText . "\n");: This line writes the entered text to the file using the fwrite() function. $file is the file pointer resource, $userText contains the entered text, and "\n" adds a new line character at the end to separate each entry.

// fclose($file);: This line closes the file using the fclose() function. It's important to close the file after writing to release system resources.

// echo "Text stored successfully!";: This line outputs a success message to the browser.
?>
