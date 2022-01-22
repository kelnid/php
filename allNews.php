<?php
$id = htmlspecialchars($_GET['id']);
if (isset($_COOKIE['news'])) {
    $var = json_decode($_COOKIE['news']);
    foreach ($var as $value) {
        if ($value->id == $id) {
            echo "<p>". $value->name . "</p>";
            echo "<p>". $value->newsText . "</p>";
            echo "<p>". $value->date . "</p>";
            echo "<p>". $value->author . "</p>";
            echo "<img src='uploads/$value->image' width='600'>";
        }
    }
}
