<!DOCTYPE html>
<html>
<head>
    <title>AI Backend Results</title>
    <style>
        .prediction {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>AI Backend Results</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" accept="image/*" required>
        <input type="submit" value="Predict">
    </form>

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
            echo '    <img src="data:image/jpeg;base64,' . $imageData . '" alt="Input Image" width="300">';
            echo '    <p><strong>Top Prediction:</strong> ' . $prediction['nama'] . '</p>';
            echo '    <p><strong>Confidence:</strong> ' . $prediction['probability'] . '%</p>';
            echo '</div>';
        }
    }
    ?>
</body>
</html>