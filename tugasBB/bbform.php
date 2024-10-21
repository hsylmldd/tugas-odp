<?php

function beratBadan($tinggi, $gender)
{
    if ($gender == "pria") {
        $ideal = ($tinggi - 100) - (($tinggi - 100) * 0.1);
    } else if ($gender == "wanita") {
        $ideal = ($tinggi - 100) - (($tinggi - 100) * 0.15);
    } 
    return $ideal;
}

function processFormData($tinggi, $gender)
{
    if (empty($tinggi) || empty($gender)) {
        return "Tinggi badan dan jenis kelamin harus diisi.";
    }

    $idealWeight = beratBadan($tinggi, $gender);
    return $idealWeight;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berat Ideal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(45deg, #6ab7a8, #f1f1f1);
            font-family: 'Roboto', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
            padding: 20px;
            background-color: white;
        }

        .card-header {
            font-size: 1.5rem;
            font-weight: 600;
            border-radius: 10px 10px 0 0;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            padding: 10px 15px;
            font-size: 1rem;
            font-weight: 500;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-secondary {
            padding: 10px 15px;
        }

        .result-text {
            font-size: 1.3rem;
            margin-top: 10px;
        }

        .fw-bold {
            color: #28a745;
        }

        .danger-text {
            color: #dc3545;
            font-size: 1.2rem;
        }

        .success-text {
            color: #28a745;
            font-size: 1.2rem;
        }

        .card-body {
            padding: 30px;
        }

        label {
            font-size: 1rem;
        }

        .form-control {
            padding: 10px;
            font-size: 1rem;
        }

        .container {
            margin-top: 50px;
        }

        @media (max-width: 768px) {
            .card {
                padding: 15px;
            }

            .card-header {
                font-size: 1.3rem;
            }

            .result-text {
                font-size: 1.1rem;
            }

            .danger-text, .success-text {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        Hitung Berat Badan Ideal
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="bmiForm">
                            <div class="mb-3">
                                <label for="tinggi" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" class="form-control" id="tinggi" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="bbaktual" class="form-label">Berat Badan (kg)</label>
                                <input type="number" class="form-control" id="bbaktual" name="bbaktual" value="<?= isset($_POST['bbaktual']) ? $_POST['bbaktual'] : '' ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="pria" value="pria" <?= isset($_POST['gender']) && $_POST['gender'] == 'pria' ? 'checked' : '' ?> required>
                                    <label class="form-check-label" for="pria">
                                        Pria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita" <?= isset($_POST['gender']) && $_POST['gender'] == 'wanita' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="wanita">
                                        Wanita
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Hitung</button>
                            <button type="reset" class="btn btn-secondary" onclick="resetForm()">Reset</button>
                        </form>

                        <div id="result-container" class="mt-3">
                            <?php
                            if (isset($_POST['tinggi']) && isset($_POST['gender']) && isset($_POST['bbaktual']) && !empty($_POST['tinggi']) && !empty($_POST['gender']) && !empty($_POST['bbaktual'])) {
                                $idealWeight = processFormData($_POST['tinggi'], $_POST['gender']);
                                echo "<div class='fw-bold result-text'>Berat badan ideal Anda adalah: " . $idealWeight . " kg</div>";
                                if ($_POST['bbaktual'] < $idealWeight) {
                                    echo "<div class='mt-3 danger-text'>MAKAN YANG BANYAK!</div>";
                                } else if ($_POST['bbaktual'] > $idealWeight) {
                                    echo "<div class='mt-3 danger-text'>DIET!</div>";
                                } else {
                                    echo "<div class='mt-3 success-text'>BERAT BADAN ANDA IDEAL.</div>";
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
            document.getElementById('tinggi').value = '';
            document.getElementById('bbaktual').value = '';
            document.querySelectorAll('input[type="radio"]').forEach(el => el.checked = false); 
            document.getElementById('result-container').innerHTML = '';
        }

        document.getElementById('bmiForm').addEventListener('submit', function(event) {
            const tinggi = document.getElementById('tinggi').value;
            const bbaktual = document.getElementById('bbaktual').value;
            if (tinggi <= 0 || bbaktual <= 0) {
                alert('Masukkan nilai yang valid.');
                event.preventDefault();
            }
        });
    </script>
</body>

</html>
