<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose Matriks</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Transpose Matriks 2x2</h2>
    <form method="POST">
        <h4>Masukkan Elemen Matriks</h4>
        <div class="form-row">
            <!-- Input baris pertama -->
            <div class="form-group col-2">
                <label for="matrix_00"></label>
                <input type="number" name="matrix_00" id="matrix_00" class="form-control" required placeholder="a">
            </div>
            <div class="form-group col-2">
                <label for="matrix_01"></label>
                <input type="number" name="matrix_01" id="matrix_01" class="form-control" required placeholder="b">
            </div>
        </div>
        <div class="form-row">
            <!-- Input baris kedua -->
            <div class="form-group col-2">
                <label for="matrix_10"></label>
                <input type="number" name="matrix_10" id="matrix_10" class="form-control" required placeholder="c">
            </div>
            <div class="form-group col-2">
                <label for="matrix_11"></label>
                <input type="number" name="matrix_11" id="matrix_11" class="form-control" required placeholder="d">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Hitung Invers</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Matriks input dari user
        $matrix = [
            [$_POST['matrix_00'], $_POST['matrix_01']],
            [$_POST['matrix_10'], $_POST['matrix_11']]
        ];

        // Proses transpose
        $transpose = [
            [$matrix[0][0], $matrix[1][0]],
            [$matrix[0][1], $matrix[1][1]]
        ];

        // Menampilkan Matriks Asli
        echo "<h4 class='mt-3'>Matriks Asli:</h4>";
        echo "<table class='table table-bordered'>";
        foreach ($matrix as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Menampilkan Proses Transpose
        echo "<h4 class='mt-3'>Proses Transpose:</h4>";
        echo "<p>Transpose dilakukan dengan menukar elemen baris menjadi kolom:</p>";
        echo "<ul>";
        echo "<li>Elemen [0,0] = " . $matrix[0][0] . " tetap di posisi [0,0]</li>";
        echo "<li>Elemen [0,1] = " . $matrix[0][1] . " berpindah ke posisi [1,0]</li>";
        echo "<li>Elemen [1,0] = " . $matrix[1][0] . " berpindah ke posisi [0,1]</li>";
        echo "<li>Elemen [1,1] = " . $matrix[1][1] . " tetap di posisi [1,1]</li>";
        echo "</ul>";

        // Menampilkan Transpose Matriks
        echo "<h4 class='mt-3'>Matriks Transpose:</h4>";
        echo "<table class='table table-bordered'>";
        foreach ($transpose as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</div>
</body>
</html>
