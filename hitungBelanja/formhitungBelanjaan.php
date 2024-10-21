<?php

$buah = 0;
$sayur = 0;
$gula = 0;
$diskon = 0.15;
$total = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buah = $_POST["buah"];
    $sayur = $_POST["sayur"];
    $gula = $_POST["gula"];
    $total = ($buah + $sayur + $gula) * (1 - $diskon);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Harga</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
        }

        .card {
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border: none;
        }

        .card-header {
            background: linear-gradient(to right, #4CAF50, #66bb6a);
            color: white;
            font-weight: bold;
            font-size: 1.5rem;
            text-align: center;
            border-radius: 12px 12px 0 0;
        }

        .btn-primary {
            background: linear-gradient(to right, #42a5f5, #1e88e5);
            border: none;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: linear-gradient(to right, #1e88e5, #1565c0);
        }

        .btn-secondary {
            background-color: #9e9e9e;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #757575;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
        }

        .fw-bold {
            font-size: 1.2rem;
            color: #2e7d32;
        }

        .text-success {
            font-size: 1rem;
        }

        #hasil {
            margin-top: 15px;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Hitung Total Belanja
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="buah" class="form-label">Harga Buah (Rp)</label>
                                <input type="number" class="form-control" id="buah" name="buah" value="<?= isset($_POST['buah']) ? $_POST['buah'] : '' ?>">
                            </div>
                            <div class="mb-3">
                                <label for="sayur" class="form-label">Harga Sayur (Rp)</label>
                                <input type="number" class="form-control" id="sayur" name="sayur" value="<?= isset($_POST['sayur']) ? $_POST['sayur'] : '' ?>">
                            </div>
                            <div class="mb-3">
                                <label for="gula" class="form-label">Harga Gula (Rp)</label>
                                <input type="number" class="form-control" id="gula" name="gula" value="<?= isset($_POST['gula']) ? $_POST['gula'] : '' ?>">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Hitung Total</button>
                            <button type="button" class="btn btn-secondary w-100 mt-2" onclick="resetForm()">Reset</button>
                        </form>
                        <div id="hasil">
                            <?php
                            if (isset($_POST['buah']) && isset($_POST['sayur']) && isset($_POST['gula'])) {
                                echo "<div class='mt-3 fw-bold'>Total belanja Anda adalah: Rp." . $total . "</div>";

                                if ($total >= 100000) {
                                    $diskon = $diskon + 0.1;
                                    echo "<div class='mt-3 text-success fw-bold'>Selamat! Anda mendapatkan tambahan diskon 10%.</div>";
                                } elseif ($total > 75000) {
                                    echo "<div class='mt-3 text-success fw-bold'>Selamat! Anda mendapatkan satu set peralatan dapur.</div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function resetForm() {
            document.getElementById('buah').value = '';
            document.getElementById('sayur').value = '';
            document.getElementById('gula').value = '';
            document.getElementById('hasil').innerHTML = '';
        }
    </script>
</body>

</html>
