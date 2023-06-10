<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>

  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.0.20/dist/full.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="style.css">
  <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>

<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 ...">
  <div class="justify-center">


    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center">
          <img src="/assets/logo.png" class="h-8 mr-3" alt="Flowbite Logo">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Herbal AI</span>
        </a>
        <div class="flex md:order-2">
          <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
          <button data-collapse-toggle="navbar-sticky" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul
            class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="index.php"
                class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                aria-current="page">Home</a>
            </li>
            <li>
              <a href="how.php"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">How
                to Use</a>
            </li>
            <li>
              <a href="about.php"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
              <a href="contact.php"
                class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <br><br><br>
    <div class=" h-full w-full">
      <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
      <div class="container mx-auto px-6 flex flex-col items-start pl-12 md:pl-0 md:items-center">
        <div class="h-0 md:h-12"></div>
        <dh-component>
          <div class="flex flex-col  flex items-center md:justify-center">
            <div class="flex justify-center">
              <h1 class="text-3xl flex font-bold text-center  text-black">
                Pengenalan Tanaman Herbal
              </h1>
              <a tabindex="0" role="link" aria-label="tooltip 1"
                class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative mt-20 md:mt-0"
                onmouseover="showTooltip(1)" onfocus="showTooltip(1)" onmouseout="hideTooltip(1)">
                <div class=" cursor-pointer">
                  <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-info-circle" width="25" height="25" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#A0AEC0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="12" cy="12" r="9" />
                    <line x1="12" y1="8" x2="12.01" y2="8" />
                    <polyline points="11 12 12 12 12 16 13 16" />
                  </svg>
                </div>
                <div id="tooltip1" role="tooltip"
                  class="z-2 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-white p-4 rounded">
                  <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px" viewBox="0 0 9 16"
                    version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#FFFFFF">
                        <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                          <g id="Group-2" transform="translate(24.000000, 0.000000)">
                            <polygon id="Triangle"
                              transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                              points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                  <p class="text-sm font-bold text-gray-800 pb-1">Keep track of follow ups</p>
                  <p class="text-xs leading-4 text-gray-600 pb-3">Reach out to more prospects at the right moment.</p>
                  <div class="flex justify-between">
                    <div class="flex items-center">
                      <span class="text-xs font-bold text-indigo-700">Step 1 of 4</span>
                    </div>
                    <div class="flex items-center">
                      <button
                        class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                        Tour</button>
                      <button onblur="hideTooltip(1)"
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <br>
            <form action="" method="post" enctype="multipart/form-data">
              <div class="m-auto mt-12 relative  w-auto rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                <div
                  class="relative mx-6 -mt-6 h-64 overflow-hidden rounded-xl bg-blue-gray-500 bg-clip-border text-white shadow-lg shadow-blue-gray-500/40">
                  <img class="h-56 w-96 align-text-top text-center" src="./assets/logo.png" width="15px"
                    height="15px" />
                </div>
                <div class="p-6">
                  <h5
                    class="mb-2 block font-sans text-xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    Jenis Tanaman Herbal
                  </h5>
                  <p class="block font-sans text-base font-light leading-relaxed text-inherit antialiased">
                    Tanaman Herbal ......
                  </p>
                </div>
                <div class="flex justify-center">
                  <div class="col-8 ">
                    <center>
                      <label class="relative block p-2 align-center">
                        <input class="file-input file-input-bordered file-input-secondary w-full max-w-7" type="file"
                          name="image" accept="image/*" placeholder="Masukan Foto...!!!" type="file" />
                      </label>
                    </center>
                  </div>
                  <div class="col-4 -mt-24">
                    <!--Code Block for indigo tooltip starts-->
                    <a tabindex="0" role="link" aria-label="tooltip 2"
                      class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative "
                      onmouseover="showTooltip(2)" onfocus="showTooltip(2)" onmouseout="hideTooltip(2)">
                      <div class=" cursor-pointer">
                        <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                          class="icon icon-tabler icon-tabler-info-circle" width="25" height="25" viewBox="0 0 24 24"
                          stroke-width="1.5" stroke="#A0AEC0" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="12" r="9" />
                          <line x1="12" y1="8" x2="12.01" y2="8" />
                          <polyline points="11 12 12 12 12 16 13 16" />
                        </svg>
                      </div>
                      <div id="tooltip2" role="tooltip"
                        class="z-2 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-indigo-700 p-4 rounded">
                        <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px"
                          viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#4c51bf">
                              <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                                <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                  <polygon id="Triangle"
                                    transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                    points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                        <p class="text-sm font-bold text-white pb-1">Keep track of follow ups</p>
                        <p class="text-xs leading-4 text-white pb-3">Reach out to more prospects at the right moment.
                        </p>
                        <div class="flex justify-between">
                          <div class="flex items-center">
                            <span class="text-xs font-bold text-white">Step 1 of 4</span>
                          </div>
                          <div class="flex items-center">
                            <button
                              class="focus:outline-none focus:underline focus:text-indigo-200 text-xs text-white underline mr-2 cursor-pointer">Skip
                              Tour</button>
                            <button onblur="hideTooltip(2)"
                              class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none focus:text-white bg-white transition duration-150 ease-in-out focus:outline-none hover:bg-gray-200 rounded text-indigo-700 px-5 py-1 text-xs">Next</button>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!--Code Block for indigo tooltip ends-->

                  </div>
                </div>
                <div class="flex justify-center">
                  <center>
                    <div class=" p-6 pt-0">
                      <button
                        class="select-none rounded-lg bg-pink-500 py-3 px-12 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-pink-500/20 transition-all hover:shadow-lg hover:shadow-pink-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="submit" data-ripple-light="true">
                        Submit
                      </button>
                    </div>
                  </center>
                  <a tabindex="0" aria-label="tooltip 3" role="link"
                    class="focus:outline-none focus:ring-gray-300 rounded-full focus:ring-offset-2 focus:ring-2 focus:bg-gray-200 relative"
                    onmouseover="showTooltip(3)" onfocus="showTooltip(3)" onmouseout="hideTooltip(3)">
                    <div class=" cursor-pointer">
                      <svg aria-haspopup="true" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-info-circle" width="25" height="25" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#A0AEC0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="12" r="9" />
                        <line x1="12" y1="8" x2="12.01" y2="8" />
                        <polyline points="11 12 12 12 12 16 13 16" />
                      </svg>
                    </div>
                    <div id="tooltip3" role="tooltip"
                      class="z-20 -mt-20 w-64 absolute transition duration-150 ease-in-out left-0 ml-8 shadow-lg bg-gray-800 p-4 rounded">
                      <svg class="absolute left-0 -ml-2 bottom-0 top-0 h-full" width="9px" height="16px"
                        viewBox="0 0 9 16" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <g id="Tooltips-" transform="translate(-874.000000, -1029.000000)" fill="#2D3748">
                            <g id="Group-3-Copy-16" transform="translate(850.000000, 975.000000)">
                              <g id="Group-2" transform="translate(24.000000, 0.000000)">
                                <polygon id="Triangle"
                                  transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                  points="4.5 57.5 12.5 66.5 -3.5 66.5"></polygon>
                              </g>
                            </g>
                          </g>
                        </g>
                      </svg>
                      <p class="text-sm font-bold text-white pb-1">Keep track of follow ups</p>
                      <p class="text-xs leading-4 text-white pb-3">Reach out to more prospects at the right moment.</p>
                      <div class="flex justify-between">
                        <div class="flex items-center">
                          <span class="text-xs font-bold text-white">Step 1 of 4</span>
                        </div>
                        <div class="flex items-center">
                          <button
                            class="focus:outline-none focus:underline focus:text-indigo-200 text-xs text-white underline mr-2 cursor-pointer">Skip
                            Tour</button>
                          <button onblur="hideTooltip(3)"
                            class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none focus:text-white bg-white transition duration-150 ease-in-out focus:outline-none hover:bg-gray-200 rounded text-gray-600 px-5 py-1 text-xs">Next</button>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>


          </div>
      </div>
      </form><br><br>
    </div>
    <dh-component>
  </div>
  </div>

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
    <div class="p-4 text-center" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2023 Copyright:
      <a class="text-whitehite" href="https://tailwind-elements.com/">Tailwind Elements</a>
    </div>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
  <script src="style.js"></script>
  <script>
    function showTooltip(flag) {
      switch (flag) {
        case 1:
          document.getElementById("tooltip1").classList.remove("hidden");
          break;
        case 2:
          document.getElementById("tooltip2").classList.remove("hidden");
          break;
        case 3:
          document.getElementById("tooltip3").classList.remove("hidden");
          break;
      }
    }
    function hideTooltip(flag) {
      switch (flag) {
        case 1:
          document.getElementById("tooltip1").classList.add("hidden");
          break;
        case 2:
          document.getElementById("tooltip2").classList.add("hidden");
          break;
        case 3:
          document.getElementById("tooltip3").classList.add("hidden");
          break;
      }
    }

  </script>
</body>

</html>