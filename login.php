<php?
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "INSERT INTO USERS (FirstName, LastName, Username, Password)
        VALUES ($firstName, $lastName, $username, $password)";
?>