<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penambahan Matriks</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">Penambahan Matriks 2x2</h2>
    <form method="POST" class="mt-4">
        <!-- Matriks 1 -->
        <h4>Matriks 1</h4>
        <div class="form-row justify-content-center">
            <div class="form-group mx-2">
                <input type="number" name="matrix1_00" class="form-control" placeholder="(0,0)" required>
            </div>
            <div class="form-group mx-2">
                <input type="number" name="matrix1_01" class="form-control" placeholder="(0,1)" required>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="form-group mx-2">
                <input type="number" name="matrix1_10" class="form-control" placeholder="(1,0)" required>
            </div>
            <div class="form-group mx-2">
                <input type="number" name="matrix1_11" class="form-control" placeholder="(1,1)" required>
            </div>
        </div>

        <!-- Matriks 2 -->
        <h4 class="mt-4">Matriks 2</h4>
        <div class="form-row justify-content-center">
            <div class="form-group mx-2">
                <input type="number" name="matrix2_00" class="form-control" placeholder="(0,0)" required>
            </div>
            <div class="form-group mx-2">
                <input type="number" name="matrix2_01" class="form-control" placeholder="(0,1)" required>
            </div>
        </div>
        <div class="form-row justify-content-center">
            <div class="form-group mx-2">
                <input type="number" name="matrix2_10" class="form-control" placeholder="(1,0)" required>
            </div>
            <div class="form-group mx-2">
                <input type="number" name="matrix2_11" class="form-control" placeholder="(1,1)" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Hitung Penjumlahan</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $matrix1 = [
            [$_POST['matrix1_00'], $_POST['matrix1_01']],
            [$_POST['matrix1_10'], $_POST['matrix1_11']]
        ];

        $matrix2 = [
            [$_POST['matrix2_00'], $_POST['matrix2_01']],
            [$_POST['matrix2_10'], $_POST['matrix2_11']]
        ];

        $resultMatrix = [
            [$matrix1[0][0] + $matrix2[0][0], $matrix1[0][1] + $matrix2[0][1]],
            [$matrix1[1][0] + $matrix2[1][0], $matrix1[1][1] + $matrix2[1][1]]
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

        // Langkah penyelesaian
        echo "<h5 class='mt-4'>Langkah-langkah Penjumlahan:</h5>";
        echo "<p>";
        echo "1. Penjumlahan elemen (0,0): {$matrix1[0][0]} + {$matrix2[0][0]} = " . ($matrix1[0][0] + $matrix2[0][0]) . "<br>";
        echo "2. Penjumlahan elemen (0,1): {$matrix1[0][1]} + {$matrix2[0][1]} = " . ($matrix1[0][1] + $matrix2[0][1]) . "<br>";
        echo "3. Penjumlahan elemen (1,0): {$matrix1[1][0]} + {$matrix2[1][0]} = " . ($matrix1[1][0] + $matrix2[1][0]) . "<br>";
        echo "4. Penjumlahan elemen (1,1): {$matrix1[1][1]} + {$matrix2[1][1]} = " . ($matrix1[1][1] + $matrix2[1][1]) . "<br>";
        echo "</p>";

        // Menampilkan hasil penjumlahan matriks
        echo "<h4 class='mt-4'>Hasil Penjumlahan Matriks:</h4>";
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
