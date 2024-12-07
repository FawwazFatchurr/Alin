<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invers Matriks 2x2</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2>Invers Matriks 2x2</h2>
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

        // Menghitung determinan untuk memeriksa apakah matriks bisa diinversi
        $determinant = ($matrix[0][0] * $matrix[1][1]) - ($matrix[0][1] * $matrix[1][0]);

        if ($determinant == 0) {
            echo "<h4 class='mt-3'>Matriks tidak dapat diinversi (Determinan = 0)</h4>";
        } else {
            // Menghitung invers matriks
            $invers = [
                [$matrix[1][1] / $determinant, -$matrix[0][1] / $determinant],
                [-$matrix[1][0] / $determinant, $matrix[0][0] / $determinant]
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

            // Menampilkan Proses Perhitungan Determinan
            echo "<h4 class='mt-3'>Proses Perhitungan:</h4>";
            echo "<p>Rumus invers matriks 2x2:</p>";
            echo "<pre>Invers(A) = (1 / Determinan) * [[d, -b], [-c, a]]</pre>";

            // Menampilkan Determinan dan Proses Invers
            echo "<p>Determinan = (a * d) - (b * c) = " . $determinant . "</p>";
            echo "<p>Invers(A) = (1 / $determinant) * [[{$matrix[1][1]}, -{$matrix[0][1]}], [-{$matrix[1][0]}, {$matrix[0][0]}]]</p>";

            // Menampilkan Matriks Invers
            echo "<h4 class='mt-3'>Matriks Invers:</h4>";
            echo "<table class='table table-bordered'>";
            foreach ($invers as $row) {
                echo "<tr>";
                foreach ($row as $element) {
                    echo "<td>" . number_format($element, 2) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
    ?>
</div>
</body>
</html>