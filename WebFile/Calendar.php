<?php
    echo "test";
    $thisYear = date('y');
    $thisMonth = date('m');
    $thisDay = date('d');   

    $curYear = $thisYear;
    $curMonth = $thisMonth;
    $curDay = $thisDay;

    # 해당 달의 최대 일을 구하는 변수
    $maxDay = date('t', mktime(0, 0, $curMonth, $curDay, $curYear));

    $dayName = array('일', '월', '화', '수', '목', '금', '토');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Calendar</title>
	<style>
        .screen
        {
            width: 100%;
            height: 48.5%;
            margin-bottom: 0.5% ;
            background-color: red;
        }
        .border
        {
            width: 100%;
            height: 1.5px;
            background-color: black;
        }
	</style>
</head>
<body>
    <div class="screen">
        <?php
            echo "test";
        ?>
    </div>
    <div class="border"></div>
    <div class="screen">
        <table>
            <thead>
                <tr>
                    <th><?php echo $dayName[0]; ?></th>
                    <th><?php echo $dayName[1]; ?></th>
                    <th><?php echo $dayName[2]; ?></th>
                    <th><?php echo $dayName[3]; ?></th>
                    <th><?php echo $dayName[4]; ?></th>
                    <th><?php echo $dayName[5]; ?></th>
                    <th><?php echo $dayName[6]; ?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!--1주차-->
                    <th><?php #일 ?></th>
                    <th><?php #월 ?></th>
                    <th><?php #화 ?></th>
                    <th><?php #수 ?></th>
                    <th><?php #목 ?></th>
                    <th><?php #금 ?></th>
                    <th><?php #토 ?></th>
                </tr>
                <tr>
                    <!--2주차-->
                    <th><?php #일 ?></th>
                    <th><?php #월 ?></th>
                    <th><?php #화 ?></th>
                    <th><?php #수 ?></th>
                    <th><?php #목 ?></th>
                    <th><?php #금 ?></th>
                    <th><?php #토 ?></th>
                </tr>
                <tr>
                    <!--3주차-->
                    <th><?php #일 ?></th>
                    <th><?php #월 ?></th>
                    <th><?php #화 ?></th>
                    <th><?php #수 ?></th>
                    <th><?php #목 ?></th>
                    <th><?php #금 ?></th>
                    <th><?php #토 ?></th>
                </tr>
                <tr>
                    <!--4주차-->
                    <th><?php #일 ?></th>
                    <th><?php #월 ?></th>
                    <th><?php #화 ?></th>
                    <th><?php #수 ?></th>
                    <th><?php #목 ?></th>
                    <th><?php #금 ?></th>
                    <th><?php #토 ?></th>
                </tr>
                <tr>
                    <!--5주차-->
                    <th><?php #일 ?></th>
                    <th><?php #월 ?></th>
                    <th><?php #화 ?></th>
                    <th><?php #수 ?></th>
                    <th><?php #목 ?></th>
                    <th><?php #금 ?></th>
                    <th><?php #토 ?></th>
                </tr>
            </tbody>
        </table>

    </div>
</body>
</html>