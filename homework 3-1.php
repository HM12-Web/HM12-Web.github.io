<?php
$n = 30;
$sum = 0;
$prod = 1;

for($i = 1; $i < $n; $i++) {
    if ($i > 0) {  // 첫 번째 숫자 앞에는 *을 출력하지 않음
        echo " * ";
    }
    echo $i;
    $prod *= $i;  // 곱셈 결과 누적
}

echo "\n";
echo " 정답: " . $prod . "\n";  // 곱셈 결과 출력
?>
