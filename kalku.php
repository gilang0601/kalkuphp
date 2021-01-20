<html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kalkulator By Gilang</title>
</head>
<body>
    <div class="row">
        <div class=col-md-12>
                <h1>Kalkulator</h1>
            <form method="get" action="kalku.php">
                <input type="number" name="a" placeholder="Bilangan a">

                <select name="operator">
                    <option selected disabled>Pilih Operator</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <input type="number" name="b" placeholder="Bilangan b">

                <div style="margin-top: 1rem">
                    <button type="button" onclick="location.href = '?clear'">Clear</button>
                    <button type="submit">Hitung</button>
                </div>
            </form>

            <?php
        if ($_GET):
            $a = (double) @$_GET['a'];
            $b = (double) @$_GET['b'];
            $operator = @$_GET['operator'];
            
            switch ($operator) {
                case '+':
                    $hasil = $a + $b;
                    break;
                case '-':
                    $hasil = $a - $b;
                    break;
                case '*':
                    $hasil = $a * $b;
                    break;
                case '/':
                    $hasil = $a / $b;
                    break;
            }
            ?>
            <div style="margin-top: 1rem">
            Hasil: <strong><?php echo $hasil ?></strong>
            </div>
            <?php
        endif; ?>
        </div>
    </div>
</body>
</html>