<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Моя Карточка</title>
    <link rel="stylesheet" href="style.css">
</style>
</head>
<body>
<?php
$filePath = 'card.txt';
$addedWord = null;

if (isset($_POST['ok'])) {
    $word = $_POST['word'];
    $meaning = $_POST['meaning'];
    

    $list = ["word" => $word, "meaning" => $meaning];

    $currentData = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

    $currentData[] = $list;

    $dataToWrite = json_encode($currentData, JSON_PRETTY_PRINT);

    file_put_contents($filePath, $dataToWrite);

    $addedWord = end($currentData)['word'];
}
?>
    <div class="input-menu">
        <h2>Меню ввода слова и значения</h2>
        <form action="" method="post">
        <input type="text" placeholder="Введите слово" name="word" id="wordInput" ><br>
        <input type="text" placeholder="Введите значение" name="meaning" id="definitionInput"><br>
        <input type="submit" value="Добавить" name="ok">

        </form>
    </div>

    <div class="carousel animate-infinite">
        <div class="card-container">
            <div class="card">
            <?php
                if (!is_null($addedWord)) {
                    echo $one;
                    echo $addedWord = prev($currentData)['word'];
                    echo $addedWord = prev($currentData)['meaning'];
                    
                }
                ?>
                
            </div>

            <div class="card">
            <?php
                if (!is_null($addedWord)) {
                    echo $two;
                    echo $addedWord = prev($currentData)['word'];
                    echo $addedWord = prev($currentData)['meaning'];
                }
                ?>
            </div>

            <div class="card">
            <?php
                if (!is_null($addedWord)) {
                    echo $addedWord = end($currentData)['word'];
                    echo $addedWord = end($currentData)['meaning'];
                }
                ?>
            </div>

            <!-- Добавьте дополнительные карточки по необходимости -->
        </div>
        <button class="arrow arrow-left" onclick="prevCard()">❮</button>
        <button class="arrow arrow-right" onclick="nextCard()">❯</button>
    </div>
    <script src="scripts.js"></script>
</body>
</html>