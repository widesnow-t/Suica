<?php
echo "Suicaにチャージします。金額に該当する番号を入力してください" . "\n" . "1: 1,000円" . "\n" . "2: 3,000円" . "\n" . "3: 5,000円" . "\n" . "番号 :";
$age = trim(fgets(STDIN));
switch ($age) {
    case '1':
        $sic = 1000;
        echo "1,000円チャージされました。" . "\n";
        break;
    case '2':
        $sic = 3000;
        echo "3,000円チャージされました。" . "\n";
        break;
    case '3':
        $sic = 5000;
        echo "5,000円チャージされました。" . "\n";
    default:
        echo "無効な番号です。" . "\n" . "処理を終了します。" . "\n";
        exit;
}
$shopping = true;
        do {
        echo "商品の価格を入力して下さい:";
        $money = trim(fgets(STDIN));
        if ($sic >= $money) {
            $sic -= $money;
            echo "残高は" . number_format($sic) . "円です。" . "\n";
        } else { $shopping = false;
            echo "チャージ金額を上回るため購入できません。" . "\n";
        }
    } while ($shopping);

echo "買い物を終了します" . "\n";
