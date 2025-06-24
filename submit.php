if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $website = htmlspecialchars($_POST['website']);
    $bio = htmlspecialchars($_POST['bio']);
    $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';

    // Here you can add server-side validation and processing
    // For example, saving to a database

    echo "Registration successful!<br>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Date of Birth: $dob<br>";
    echo "Gender: $gender<br>";
    echo "Website: $website<br>";
    echo "Bio: $bio<br>";
    echo "Subscribed to newsletter: $subscribe<br>";
}
?>
