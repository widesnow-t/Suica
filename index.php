<?php 
$sic = 0;
while($sic <= $money){
    echo "Suicaにチャージします。金額に該当する番号を入力してください" . "\n" . "1: 1,000円" . "\n" . "2: 3,000円" ."\n" . "3: 5,000円" . "\n" . "番号 :";
        $age = trim(fgets(STDIN));
        if ($age == 1 ){
                $sic = $sic + 1000;
                echo "1,000円チャージされました。" . "\n";
        }
            elseif ($age == 2) {
                $sic = $sic + 3000;
                echo "3,000円チャージされました。" . "\n";
            }
            elseif ($age == 3) {
                $sic = $sic + 5000;
                echo "5,000円チャージされました。" . "\n";
            } else { echo "無効な番号です。" . "\n" . "処理を終了します。" . "\n";
                break;
            }
    
        echo "商品の価格を入力して下さい:";
        $money = trim(fgets(STDIN));
        if ($sic >= $money){
            $sic = $sic - $money;
            echo "残高は" . $sic . "円です。" . "\n";
        } else {
            echo "チャージ金額を上回るため購入できません。" . "\n";
            break;
        }
    }
    echo "買い物を終了します" . "\n";
?>