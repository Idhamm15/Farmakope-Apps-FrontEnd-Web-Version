<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ...">
    <div class="justify-center" >
  <h1 class="text-3xl font-bold underline text-center mt-12">
    Hello world!
  </h1>
  <br>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="m-auto mt-12 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="relative mx-4 -mt-6 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
    <img
    class="w-full"
      src="./assets/hanjuang120.jpg"

      alt="img-blur-shadow"
      layout="fill"
    />
  </div>
  <div class="p-6">
    <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
     Jenis Tanaman Herbal
    </h5>
    <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
    Tanaman Herbal ......
    </p>
  </div> 
  <label class="relative block p-2">
     <input class=" block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Masukan Foto...!!!" type="file" />
</label>

  <div class="p-6 pt-0">
    <button
      class="select-none rounded-lg bg-pink-500 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      type="button"
      data-ripple-light="true"
    >
      Submit
    </button>
  </div>
  </div>
</div>
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
            echo '<div class="m-auto mt-12 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div class="relative mx-4 -mt-6 h-56 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
              <img
                src="data:image/jpeg;base64,' . $imageData . '"
                class="w-full"
                alt="img-blur-shadow"
                layout="fill"
              />
            </div>
            <div class="p-6">
              <h5 class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
              ' . $prediction['nama'] . '
              </h5>
              <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
              ' . $prediction['probability'] . '%
              </p>
            </div> 
            <label class="relative block p-2">
               <input class=" block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" placeholder="Masukan Foto...!!!" type="file" />
          </label>
            </div>
          </div>';
    }
  }
    ?>
</body>
</html>