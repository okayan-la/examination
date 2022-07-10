
<?php
# 問題と選択肢を読み込む

class question {
  public $question;
  public $choices = array();
  public $correct = array();
  public $commentary;
}

$qa_list = array();


# 問題データを読み込む（ファイルから読み込むように変更する）

$qa1 = new question();
$qa1->question = '愛媛県の名産物といえば何？';
$qa1->choices[0] = 'カツオのたたき';
$qa1->correct[0] = false;
$qa1->choices[1] = 'みかん';
$qa1->correct[1] = true;
$qa1->choices[2] = '青森りんご';
$qa1->correct[2] = false;
$qa1->commentary = '愛媛県といえばやっぱり「みかん」ですよね！';
$qa_list[] = $qa1;

$qa2 = new question();
$qa2->question = '<p>信号の色にあるものは？<br>（一般道路で使われているもの）<br>一つだけでOK</p>';
$qa2->choices[0] = '<span style="color:red">あか</span>';
$qa2->correct[0] = true;
$qa2->choices[1] = '<span style="color:yellow">きいろ</span>';
$qa2->correct[1] = true;
$qa2->choices[2] = '<span style="color:blue">あお<br>みどり</span>';
$qa2->correct[2] = true;
$qa2->choices[3] = '<span style="color:orange">おれんじ</span>';
$qa2->correct[3] = false;
$qa2->commentary = '';
$qa_list[] = $qa2;

