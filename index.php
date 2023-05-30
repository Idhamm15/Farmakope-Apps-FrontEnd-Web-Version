<!DOCTYPE html>
<html>
<head>
    <title>AI Backend Results</title>
    <style>
        .prediction {
            margin-bottom: 20px;
            justify-content: center;
            text-align: center;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="style.css">

    <!-- Icon -->
    <link rel="shortcut icon" href="/assets/icon.jpg">
</head>
<body>
    <center>
        <h1 class="font-weight-bold text-uppercase">Aplikasi Prediksi <br> Tanaman Herbal</h1>
    </center>
    

    <form action="" method="post" enctype="multipart/form-data">
        <div class='container'>
        <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
            <img class='mx-auto pic imgPreview'
                src="assets/hanjuang120.jpg"/>
            <div class="card-title d-flex px-4">
                <p style="justify-content: center; align-items: center;" class="text-muted">Prediksi Tanaman Herbal</p>
            </div>
            <!-- <div class="card-body">
                <p class="text-muted">Your payment details</p>
                <div class="numbr mb-3">
                    <i class=" col-1 fas fa-credit-card text-muted p-0"></i>
                    <input class="col-10 p-0" type="text" placeholder="Card Number">
                </div>
                <div class="line2 col-lg-12 col-12 mb-4">
                    <i class="col-1 far fa-calendar-minus text-muted p-0"></i>
                    <input class="cal col-5 p-0" type="text" placeholder="MM/YY">
                    <i class="col-1 fas fa-lock text-muted"></i>
                    <input class="cvc col-5 p-0" type="text" placeholder="CVC">
                </div>
            </div> -->
            <div class="footer text-center p-0">
                <div class="col-lg-12 col-12 p-0">
                    <!-- <p class="order">Prediksi</p> -->
                    <button class="btn btn-success">
                        <input type="file" name="image" accept="image/*" required>
                    </button>
                    <button class="btn btn-warning">
                        <input type="submit" value="Predict">
                    </button>
                    
                </div>
            </div>
        </div>

    </div>
    </form>
    
    <!-- <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Predict">
    </form> -->

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mendapatkan data gambar
        $image = $_FILES['image'];
        $imageData = base64_encode(file_get_contents($image['tmp_name']));

        // Mengirim permintaan ke backend Flask
        $url = 'http://localhost:5000/predict'; // Ganti URL dengan URL backend Flask Anda
        $data = array('' => $imageData);

        // Mengirim permintaan menggunakan metode POST
        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json\r\n",
                'method'  => 'POST',
                'content' => json_encode($data),
            ),
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        // Mengecek apakah permintaan berhasil atau tidak
        if ($result === FALSE) {
            echo "Error accessing the AI backend";
        } else {
            // Mendapatkan hasil prediksi dari JSON response
            $prediction = json_decode($result, true);

            // Menampilkan hasil prediksi
            echo '<div class="prediction">';
            echo '    <h2>Prediction Results</h2>';
            echo '    <img class="imageHasil" src="data:image/jpeg;base64,' . $imageData . '" alt="Input Image" >';
            echo '    <p><strong>Top Prediction:</strong> ' . $prediction['nama'] . '</p>';
            echo '    <p><strong>Confidence:</strong> ' . $prediction['probability'] . '%</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>