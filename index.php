<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.20/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ...">
    <div class="justify-center" >




<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center">
      <img src="/assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Herbal AI</span>
  </a>
  <div class="flex md:order-2">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="index.php" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="how.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">How to Use</a>
      </li>
      <li>
        <a href="about.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="contact.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

<br><br><br>
  <h1 class="text-3xl font-bold text-center mt-12">
    Pengenalan Tanaman Herbal 
  </h1>
  <br>
  <form action="" method="post" enctype="multipart/form-data">
  <div class="m-auto mt-12 relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
  <div class="relative mx-6 -mt-6 h-64 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
    <img
    class="h-56 w-96 align-text-top text-center"
      src="./assets/logo.png"
      width="15px"
      height="15px"
      
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
  <center>
    <label class="relative block p-2 align-center">
      <input class="file-input file-input-bordered file-input-secondary w-full max-w-7" type="file" name="image" accept="image/*" placeholder="Masukan Foto...!!!" type="file" />
    </label>
  </center>
  

  <center>
    <div class="p-6 pt-0">
    <button
      class="select-none rounded-lg bg-pink-500 py-3 px-12 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
      type="submit"
      data-ripple-light="true"
    >
      Submit
    </button>
  </div>
  </center>
  
  </div>
</div>
</form><br><br>

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
                  <h2 class="text-align:center;">Hasil Prediksi</h2>
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
       
            </div>
          </div>';
    }
  }
    ?>



<!--Footer container-->
<footer class="bg-neutral-900 text-center text-white">

  <!--Copyright section-->
  <div
    class="p-4 text-center"
    style="background-color: rgba(0, 0, 0, 0.2)">
    © 2023 Copyright:
    <a class="text-whitehite" href="https://tailwind-elements.com/"
      >Tailwind Elements</a
    >
  </div>
</footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script src="style.js"></script>
</body>
</html>