<?php

foreach ($comments as $comment): ?>
  <div class="comments"><?php
    echo '<h3>Comments</h3>'
    echo '<div class="comment-author"><h5>' . get_comment_author_link() . '</h5></div>';
    echo '<div class="comment-date"><p>' . get_comment_date() . '</p></div>';
    echo '<div class="comment-text"><p>' . get_comment_text() . '</p></div>';?>
  </div><?php
endforeach;


comment_form();


?>
