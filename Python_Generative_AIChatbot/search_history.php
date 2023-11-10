<?php
session_start();

// Function to add search query to user's search history
function addToSearchHistory($query) {
    if (!isset($_SESSION['search_history'])) {
        $_SESSION['search_history'] = array();
    }
    array_push($_SESSION['search_history'], $query);
    
    // Store search history in a text file
    $file = fopen("search_history.txt", "a");
    fwrite($file, $query . PHP_EOL);
    fclose($file);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchQuery = $_POST["search_query"];
    addToSearchHistory($searchQuery);
}

// Display search history
if (isset($_SESSION['search_history'])) {
    echo "<h2>Search History:</h2>";
    echo "<ul>";
    foreach ($_SESSION['search_history'] as $query) {
        echo "<li>$query</li>";
    }
    echo "</ul>";
}
?>
