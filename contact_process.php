<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Chyba!</h1><p>Zkontrolujte prosím, zda jste vyplnili všechna pole správně.</p>";
        echo "<a href='contact.html'>Vrátit se zpět</a>";
        exit;
    }

    $host = 'localhost'; 
    $dbname = 'cernyjo1'; 
    $username = 'cernyjo1';
    $password = 'Ew12345678!';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO project_messages (name, email, message, created_at) VALUES (:name, :email, :message, NOW())";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);

        // Úspěšná hláška
        echo "<h1>Děkujeme!</h1><p>Vaše zpráva byla úspěšně odeslána a uložena do systému.</p>";
        echo "<a href='contact.html'>Vrátit se zpět na web</a>";

} catch(PDOException $e) {
        // Pokud se něco pokazí s databází
        echo "<h1>Jejda!</h1><p>Něco se pokazilo při ukládání zprávy. Zkuste to prosím později.</p>";
        
        // TADY ODSTRANĚNA LOMÍTKA PRO VÝPIS CHYBY:
        echo "<p>Chyba DB: " . $e->getMessage() . "</p>"; 
        
        echo "<a href='contact.html'>Vrátit se zpět</a>";
    }

} else {
    echo "K tomuto souboru nemáte přístup.";
}
?>