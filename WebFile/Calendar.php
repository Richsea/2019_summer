<?php
    echo "test";
    $thisYear = date('y');
    $thisMonth = date('m');
    $thisDay = date('d');

    $curYear = $thisYear;
    $curMonth = $thisMonth;
    $curDay = $thisDay;

    # 해당 달의 최대 일을 구하는 변수
    $maxDay = date('t', mktime(0, 0, 0, $curMonth, $curDay, $curYear));
    $dayNameList = array('일', '월', '화', '수', '목', '금', '토');

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
                    <th><?php echo $dayNameList[0]; ?></th>
                    <th><?php echo $dayNameList[1]; ?></th>
                    <th><?php echo $dayNameList[2]; ?></th>
                    <th><?php echo $dayNameList[3]; ?></th>
                    <th><?php echo $dayNameList[4]; ?></th>
                    <th><?php echo $dayNameList[5]; ?></th>
                    <th><?php echo $dayNameList[6]; ?></th>
                </tr>
            </thead>
            <tbody>
            <?php
                $day = 1;
                $day_name = date('w', mktime(0, 0, 0, $curMonth, 1, $curYear)); #'w'는 시, 분, 초, 월, 일, 년 순서 모두 채워주지 않으면 이상한 데이터가 출력된다.

                for($i = 0; $i < 6; $i++)
                {
                    ?>
                    <tr>
                    <?php
                    for($j = 0; $j < 7; $j++)
                    {
                        ?>
                        <td>
                        <?php
                        if($day > $maxDay)
                        {
                            break;
                        }

                        if($day == 1 && $j < $day_name)
                        {
                            ?></td> <!-- table column 생성 -->
                            <?php
                            continue;
                        }

                        echo $day;
                        ?></td>
                        <?php
                        $day++;
                    }
                }
                    ?>
                    </td>
                    </tr>
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