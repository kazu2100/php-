<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <h2>入力内容をご確認ください。</h2>
     <p>質問１：<?php echo $_POST['q1']; ?></p>
     <p>質問２：<?php echo $_POST['q2']; ?></p>
     <p>質問３：<?php echo $_POST['q3']; ?></p>
     <p>質問４：<?php echo $_POST['q4']; ?></p>
     <p>質問５：<?php echo implode(',',$_POST['q5']); ?></p>
     <!-- ($_POST['q5']); -->
 </body>
 
 </html>