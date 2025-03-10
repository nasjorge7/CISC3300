<?php
$person = [
    "name" => "Nasir Jorge",
    "age" => 22,
    "email" => "nasir@email.com",
    "city" => "New York"
  ];

foreach ($person as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
  }

function getGreeting(string $name, string $greeting = "Hello"): string {
    return "$greeting, $name!";
  }

echo getGreeting("Billy") . "<br>";
echo getGreeting("Bob", "How are you doing") . "<br>";
?>
