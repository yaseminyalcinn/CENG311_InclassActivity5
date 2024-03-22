<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview</title>
</head>
<body>
    <h2>Preview:</h2>
    <?php
    $fields = array(
        $_POST['name'],
        $_POST['username'],
        $_POST['password'],
        $_POST['address'] ?? 'Not provided',
        $_POST['country'],
        $_POST['zip'] ?? 'Not provided',
        $_POST['email'] ?? 'Not provided',
        $_POST['sex'],
        isset($_POST['language']) ? implode(", ", $_POST['language']) : 'Not provided',
        $_POST['about'] ?? 'Not provided'
    );

    $labels = array(
        'Name:',
        'Username:',
        'Password:',
        'Address:',
        'Country:',
        'ZIP Code:',
        'Email:',
        'Sex:',
        'Language:',
        'About:'
    );

    $fields_labels = array_combine($labels, $fields);

    foreach ($fields_labels as $label => $value) {
        if ($value === '' || $value === 'Not provided') {
            echo "<p>Not provided</p>";
        } else {
            echo "<p>$value</p>";
        }
    }
    ?>
</body>
</html>
