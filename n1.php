<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Список студентов</title>
</head>

<body>

    <div class="container">
        <h1>Список студентов</h1>

        <ul class="student-list">
            <? $students = ["Иванов", "Петров", "Сидоров", "Смирнов", "Кузнецов", "Попов", "Соколов"];
            foreach ($students as $student) {
                echo $student . "\n";
            } ?>
        </ul>

        <div class="info">
            <p>
                <strong>Количество студентов:</strong>
                <? $count = count($students);
                echo $count; ?>
            </p>
            <p><strong>
                    <? if (in_array("Сидоров", $students)) {
                        echo "Сидоров есть в списке студентов";
                    } else {
                        echo "Сидорова нет в списке студентов";
                    }
                    ?>
                </strong>
            </p>
            <p><strong>Исключённый студент:</strong>
                <? $expelled = array_pop($students);
                echo $expelled;
                ?>
            </p>
            <p><strong>Обновленный список студентов:</strong>
                <?
                foreach ($students as $student) {
                    echo $student . "\n";
                }
                ?>
            </p>
        </div>
    </div>

    <br>

    <?php
    $circles = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];

    asort($circles);
    ?>

    <div class="container">
        <h1>Список кружков</h1>

        <ul class="circle-list">
            <?php foreach ($circles as $circle => $surname): ?>
                <li><?php echo htmlspecialchars($circle) . " - " . htmlspecialchars($surname); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <br>

    <?php
    $students = [
        [
            "имя" => "Раиль",
            "фамилия" => "Каримов",
            "группа" => "425ВЕБ",
            "хобби" => "Программирование",
            "соцсети" => [
                ["название" => "ВКонтакте", "имя пользователя" => "rail_karimov"],
                ["название" => "Instagram", "имя пользователя" => "yywwwo"]
            ]
        ]
    ];

    foreach ($students as $student): ?>
        <div class="student container">
            <h1>Список студентов</h1>
            <p><strong>Имя:</strong> <?php echo $student['имя']; ?></p>
            <p><strong>Фамилия:</strong> <?php echo $student['фамилия']; ?></p>
            <p><strong>Группа:</strong> <?php echo $student['группа']; ?></p>
            <p><strong>Хобби:</strong> <?php echo $student['хобби']; ?></p>
            <div class="socials">
                <strong>Социальные сети:</strong>
                <?php foreach ($student['соцсети'] as $social): ?>
                    <div class="social">
                        <?php echo $social['название']; ?>:
                        <a href="https://www.<?php echo strtolower($social['название']); ?>.com/<?php echo $social['имя пользователя']; ?>">
                            <?php echo $social['имя пользователя']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>

</html>