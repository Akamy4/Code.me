<?php
require_once('Article.php');
require_once('Announcement.php');
require_once('News.php');

$publications[] = new News($news_id);
$publications[] = new Announcement($announcement_id);
$publications[] = new Article($article_id);

foreach ($publications as $publication) {
  // если мы работаем с наследниками Publication
  if ($publication instanceof Publication) {
    // то печатаем данные
    $publication->do_print();
  } else {
    // исключение или обработка ошибки
  }
}
