<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengurangan Matriks</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center">Pengurangan Matriks 2x2</h2>
    <form method="POST" class="mt-4">
        <h4>Matriks 1</h4>
        <div class="d-flex flex-column align-items-center">
            <div class="form-row mx-2" >
                <input type="number" name="matrix1_00" class="form-control col-2 mx-1" required placeholder="(0,0)">
                <input type="number" name="matrix1_01" class="form-control col-2 mx-1" required placeholder="(0,1)">
            </div>
            <div class="form-row m-2">
                <input type="number" name="matrix1_10" class="form-control col-2 mx-1" required placeholder="(1,0)">
                <input type="number" name="matrix1_11" class="form-control col-2 mx-1" required placeholder="(1,1)">
            </div>
        </div>

        <h4 class="mt-4">Matriks 2</h4>
        <div class="d-flex flex-column align-items-center">
            <div class="form-row">
                <input type="number" name="matrix2_00" class="form-control col-2 mx-1" required placeholder="(0,0)">
                <input type="number" name="matrix2_01" class="form-control col-2 mx-1" required placeholder="(0,1)">
            </div>
            <div class="form-row mt-2">
                <input type="number" name="matrix2_10" class="form-control col-2 mx-1" required placeholder="(1,0)">
                <input type="number" name="matrix2_11" class="form-control col-2 mx-1" required placeholder="(1,1)">
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Hitung Pengurangan</button>
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
            [$_POST['matrix2_10'], $_POST['matrix2_11']]
        ];

        // Proses pengurangan matriks
        $resultMatrix = [
            [$matrix1[0][0] - $matrix2[0][0], $matrix1[0][1] - $matrix2[0][1]],
            [$matrix1[1][0] - $matrix2[1][0], $matrix1[1][1] - $matrix2[1][1]]
        ];

        // Menampilkan proses pengurangan
        echo "<h4 class='mt-3'>Proses Pengurangan Matriks:</h4>";
        echo "<p><strong>Matriks 1:</strong></p>";
        echo "<table class='table table-bordered text-center'>";
        foreach ($matrix1 as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<p><strong>Matriks 2:</strong></p>";
        echo "<table class='table table-bordered text-center'>";
        foreach ($matrix2 as $row) {
            echo "<tr>";
            foreach ($row as $element) {
                echo "<td>$element</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        // Langkah-langkah pengurangan
        echo "<h5>Langkah-langkah Pengurangan:</h5>";
        echo "<p>";
        echo "1. Pengurangan elemen pada posisi (0,0): {$matrix1[0][0]} - {$matrix2[0][0]} = " . ($matrix1[0][0] - $matrix2[0][0]) . "<br>";
        echo "2. Pengurangan elemen pada posisi (0,1): {$matrix1[0][1]} - {$matrix2[0][1]} = " . ($matrix1[0][1] - $matrix2[0][1]) . "<br>";
        echo "3. Pengurangan elemen pada posisi (1,0): {$matrix1[1][0]} - {$matrix2[1][0]} = " . ($matrix1[1][0] - $matrix2[1][0]) . "<br>";
        echo "4. Pengurangan elemen pada posisi (1,1): {$matrix1[1][1]} - {$matrix2[1][1]} = " . ($matrix1[1][1] - $matrix2[1][1]) . "<br>";
        echo "</p>";

        // Menampilkan hasil pengurangan
        echo "<h4 class='mt-3'>Hasil Pengurangan Matriks:</h4>";
        echo "<table class='table table-bordered text-center'>";
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
