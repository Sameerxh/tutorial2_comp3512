<?php

function generateLink($url, $label) {
    echo "<a href=\"$url\">$label</a>";
}

function outputStars($rating) {
    for ($i = 0; $i < $rating; $i++) {
        echo "<img src=\"images/star-gold.png\" alt=\"gold star\">";
    }

    for ($i = $rating; $i < 5; $i++) {
        echo "<img src=\"images/star-white.png\" alt=\"white star\">";
    }
}

function outputPostRow(
    $post_link,
    $post_userName,
    $post_userLink,
    $post_date,
    $post_thumb,
    $post_title,
    $post_reviewsNum,
    $post_reviewsRating,
    $post_excerpt
) {


    echo "<div class=\"post\">";

    generateLink(
        $post_link,
        "<img src=\"images/$post_thumb\" alt=\"$post_title\">"
    );

    echo "<h2>$post_title</h2>";

    echo "<div class=\"post-meta\">";
    echo "Posted by ";
    generateLink($post_userLink, $post_userName);
    echo " on $post_date";
    echo "</div>";

    echo "<div class=\"post-rating\">";
    outputStars($post_reviewsRating);
    echo " $post_reviewsNum Reviews";
    echo "</div>";

    echo "<p>$post_excerpt</p>";

    generateLink($post_link, "Read more");

    echo "</div>";
}

?>


