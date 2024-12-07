<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perkalian Matriks 2x2</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">Perkalian Matriks 2x2</h2>
    <form method="POST" class="mt-4">
        <!-- Matriks 1 -->
        <h4>Matriks 1</h4> <!-- Hilangkan class text-center -->
        <div class="d-flex flex-column align-items-center">
            <div class="form-row mx-2">
                <input type="number" name="matrix1_00" class="form-control col-2 mx-1" required placeholder="(0,0)">
                <input type="number" name="matrix1_01" class="form-control col-2 mx-1" required placeholder="(0,1)">
            </div>
            <div class="form-row mx-2 mt-2">
                <input type="number" name="matrix1_10" class="form-control col-2 mx-1" required placeholder="(1,0)">
                <input type="number" name="matrix1_11" class="form-control col-2 mx-1" required placeholder="(1,1)">
            </div>
        </div>

        <!-- Matriks 2 -->
        <h4 class="mt-4">Matriks 2</h4> <!-- Hilangkan class text-center -->
        <div class="d-flex flex-column align-items-center">
            <div class="form-row mx-2">
                <input type="number" name="matrix2_00" class="form-control col-2 mx-1" required placeholder="(0,0)">
                <input type="number" name="matrix2_01" class="form-control col-2 mx-1" required placeholder="(0,1)">
            </div>
            <div class="form-row mx-2 mt-2">
                <input type="number" name="matrix2_10" class="form-control col-2 mx-1" required placeholder="(1,0)">
                <input type="number" name="matrix2_11" class="form-control col-2 mx-1" required placeholder="(1,1)">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Hitung Perkalian</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Matriks 1
        $matrix1 = [
            [$_POST['matrix1_00'], $_POST['matrix1_01']],
            [$_POST['matrix1_10'], $_POST['matrix1_11']]
        ];

        // Matriks 2
        $matrix2 = [
            [$_POST['matrix2_00'], $_POST['matrix2_01']],
            [$_POST['matrix2_10'], $_POST['matrix2_11']],
        ];

        // Proses perkalian matriks
        $resultMatrix = [
            [
                $matrix1[0][0] * $matrix2[0][0] + $matrix1[0][1] * $matrix2[1][0],
                $matrix1[0][0] * $matrix2[0][1] + $matrix1[0][1] * $matrix2[1][1]
            ],
            [
                $matrix1[1][0] * $matrix2[0][0] + $matrix1[1][1] * $matrix2[1][0],
                $matrix1[1][0] * $matrix2[0][1] + $matrix1[1][1] * $matrix2[1][1]
            ]
        ];

        // Menampilkan Matriks 1
        echo "<h4 class='mt-4'>Matriks 1:</h4>";
        echo "<table class='table table-bordered text-center mx-auto' style='max-width: 300px;'>";
        foreach ($matrix1 as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Menampilkan Matriks 2
        echo "<h4 class='mt-4'>Matriks 2:</h4>";
        echo "<table class='table table-bordered text-center mx-auto' style='max-width: 300px;'>";
        foreach ($matrix2 as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Langkah-langkah perkalian
        echo "<h5 class='mt-3'>Langkah-langkah Perkalian:</h5>";
        echo "<p>";
        echo "1. Perkalian elemen (0,0): ({$matrix1[0][0]} * {$matrix2[0][0]}) + ({$matrix1[0][1]} * {$matrix2[1][0]}) = " . ($matrix1[0][0] * $matrix2[0][0] + $matrix1[0][1] * $matrix2[1][0]) . "<br>";
        echo "2. Perkalian elemen (0,1): ({$matrix1[0][0]} * {$matrix2[0][1]}) + ({$matrix1[0][1]} * {$matrix2[1][1]}) = " . ($matrix1[0][0] * $matrix2[0][1] + $matrix1[0][1] * $matrix2[1][1]) . "<br>";
        echo "3. Perkalian elemen (1,0): ({$matrix1[1][0]} * {$matrix2[0][0]}) + ({$matrix1[1][1]} * {$matrix2[1][0]}) = " . ($matrix1[1][0] * $matrix2[0][0] + $matrix1[1][1] * $matrix2[1][0]) . "<br>";
        echo "4. Perkalian elemen (1,1): ({$matrix1[1][0]} * {$matrix2[0][1]}) + ({$matrix1[1][1]} * {$matrix2[1][1]}) = " . ($matrix1[1][0] * $matrix2[0][1] + $matrix1[1][1] * $matrix2[1][1]) . "<br>";
        echo "</p>";

        // Menampilkan hasil perkalian matriks
        echo "<h4 class='mt-3'>Hasil Perkalian Matriks:</h4>";
        echo "<table class='table table-bordered text-center mx-auto' style='max-width: 300px;'>";
        foreach ($resultMatrix as $row) {
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
