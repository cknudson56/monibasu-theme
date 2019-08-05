<?php
  echo '<h3>Comments</h3>';
foreach ($comments as $comment): ?>
  <div class="comments-items category-border"><?php
    echo '<div class="comment-author">' . get_comment_author_link() . '</div>';
    echo '<div class="comment-date">' . get_comment_date() . '</div>';
    echo '<div class="comment-text">' . get_comment_text() . '</div>';?>
  </div><?php
endforeach;


comment_form();


?>
