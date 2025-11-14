<title>e1b55253 Thom Daniel Yutuc</title>
<h1>Welcome to my guessing game</h1>
<p>
    <?php
    $number = 78;
    $guess = $_GET["guess"] ?? null;
    if ($guess === null) {
        echo "Missing guess parameter";
    } elseif ($guess === "") {
        echo "Your guess is too short";
    } elseif (!is_numeric($guess)) {
        echo "Your guess is not a number";
    } elseif ($guess == $number) {
        echo "Congratulations - You are right";
    } elseif ($guess < $number) {
        echo "Your guess is too low";
    } elseif ($guess > $number) {
        echo "Your guess is too high";
    }
    ?>
</p>
