<?php
  $addr = filter_input(INPUT_GET, 'addr');
  if (preg_match('/\A[[:^cntrl:]]{1,50}\z/u', $addr) !== 1) {
    die('50文字以内で住所を入力してください（必須項目）。改行やタブなどの制御文字は使用できません');
  }
?>
<body>
住所は<?php echo htmlspecialchars($addr, ENT_NOQUOTES, 'UTF-8'); ?>です
</body>
