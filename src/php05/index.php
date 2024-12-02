<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ワールドカップ ふふふ</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<header class = "header">
    <div class = "header__inner">
        <a class = "header__logo" href="/php05/index.php">
            ワールドカップ ふふふ
        </a>
    </div>
</header>

<main>
    <div class = "search-form__content">
        <div class = "search-form__heading">
        <h2>ふふふの時間 は??</h2>
        </div>
        <form class = "search-form" action = "result.php" method = "get">
            <div class = "search-form__item">
                <select class = "search-form__item-select" name = "city">
                    <option value = "ロダン">ロダン</option>
                    <option value = "カモ">カモ</option>
                </select>
            </div>
            <div class = "search-form__button">
                <button class = "search-form__button-submit" type = "submit">検索</button>
            </div>
        </form>
    </div>

</main>
</body>
</html>