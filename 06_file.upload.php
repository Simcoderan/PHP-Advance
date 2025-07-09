<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES["fileToUpload"])) {

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is actual
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "✅ File is an image - " . $check["mime"] . "<br>";
    } else {
        echo "❌ Not an image.<br>";
        $uploadOk = 0;
    }

    // Check if file exists
    if (file_exists($target_file)) {
        echo "❌ File already exists.<br>";
        $uploadOk = 0;
    }

    // Limit file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "❌ File too large.<br>";
        $uploadOk = 0;
    }

    // Allow only images
    $allowedTypes = ["jpg", "jpeg", "png", "gif"];
    if (!in_array($imageFileType, $allowedTypes)) {
        echo "❌ Only JPG, JPEG, PNG & GIF allowed.<br>";
        $uploadOk = 0;
    }

    // Try to upload
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "✅ The file <strong>" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "</strong> has been uploaded.";
        } else {
            echo "❌ Error uploading file.";
        }
    } else {
        echo "❌ File was not uploaded.";
    }

} else {
    echo "⚠️ Please upload via the form.";
}
?>
