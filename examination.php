<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>試験</title>
</head>
<body>

<?php
# 問題データを読み込む
include('./make_questions.php');

# 問題文と選択肢を表示する
$q = 1;
foreach ($qa_list as $qa) {
  # 問題文
  print "<p>[問題{$q}]<br/>";
  print $qa->question.'<br/</p>';

  # 選択肢
  print '<p><form method="post" action="answer.php">';
  $i = 0;
  foreach ($qa->choices as $choice) {
    print "<label><input type=\"radio\" name=\"q{$q}_answer\" value=\"{$i}\" required>{$choice}</label><br/>";
    $i++;
  }
  $q++;

  print '<br/></p><hr/>';
}
?>

<p><input type="submit" name="answer_button" value="試験結果"></p>
</form>

</body>
</html>
