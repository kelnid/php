<?php
if (isset($_COOKIE['news'])) {
    $arrFromJson = json_decode($_COOKIE['news']);
    foreach ($arrFromJson as $element) {
        echo "<a href='allNews.php?id=$element->id'>" . $element->name . "</a>", "<br>";
        echo "<p>" . $element->author . "</p>";
        echo "<p>" . $element->date . "</p>";
        echo "<p>" . $element->about . "</p>";
    }
}
