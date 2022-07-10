<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>試験結果</title>
</head>
<body>

<?php
# 問題データを読み込む
include('./make_questions.php');

$q = 1;
foreach ($qa_list as $qa) {
  $answer = (int) $_POST["q{$q}_answer"];
  print '<p>';
  if ($qa->correct[$answer]) {
    print '<details>';
  }

  # 問題文
  print "[問題{$q}]<br/>";
  print $qa->question.'<br/>';

  # 選択肢
  print '<form method="post" action="answer.php">';
  $i = 0;
  foreach ($qa->choices as $choice) {
    $checked = ($i == $answer) ? 'checked' : '';
    print "<label><input type=\"radio\" name=\"q{$q}_answer\" value=\"{$i}\" $checked>{$choice}</label><br/>";
    $i++;
  }
  print '<br/>';

  # 解説
  print '[解説]<br/>';
  print $qa->commentary;
  print '</p>';

  if ($qa->correct[$answer]) {
    print '</details>';
  }

  print '<br/><hr/>';
  $q++;
}

?>
</body>
</html>
