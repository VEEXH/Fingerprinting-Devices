<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the fingerprint data from the POST request
    $fingerprintData = $_POST['fingerprint'];

    // Append the fingerprint data to the file
    $file = 'fingerprint.txt';
    file_put_contents($file, $fingerprintData . "\n\n", FILE_APPEND);

    // Send a success response to the client
    http_response_code(200);
    echo "Fingerprint data saved successfully.";
  } else {
    // Send an error response if the request method is not POST
    http_response_code(405);
    echo "Invalid request method.";
  }
?>
