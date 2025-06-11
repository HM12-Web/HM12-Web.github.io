<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>영화관 예매</title>
    <style>
        table { border-collapse: collapse; width: 600px; }
        th, td { border: 1px solid black; padding: 8px; text-align: center; }
        input[type="number"] { width: 50px; }
    </style>
</head>
<body>
    <form action="submit_reservation.php" method="post">
        고객성명: <input type="text" name="customer" required>
        <input type="submit" value="합계"><br><br>

        <table>
            <tr>
                <th>No</th>
                <th>영화</th>
                <th>일반석</th>
                <th>VIP석</th>
                <th>비고</th>
            </tr>
            <?php
            $movies = [
                ["범죄도시4", 10000, 15000, "액션"],
                ["쿵푸팬더4", 9000, 14000, "가족/애니"],
                ["분노의질주", 11000, 16000, "레이싱"],
                ["인터스텔라", 9500, 15500, "SF/우주"]
            ];

            foreach ($movies as $i => $m) {
                echo "<tr>";
                echo "<td>" . ($i + 1) . "</td>";
                echo "<td>{$m[0]}<input type='hidden' name='movie[]' value='{$m[0]}'></td>";
                echo "<td>{$m[1]} <input type='number' name='standard[]' value='0' min='0'></td>";
                echo "<td>{$m[2]} <input type='number' name='vip[]' value='0' min='0'></td>";
                echo "<td>{$m[3]}</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </form>
</body>
</html>
