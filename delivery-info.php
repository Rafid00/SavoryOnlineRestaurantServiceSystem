<!DOCTYPE html>
<html lang="en">

<head>
   <title>Savor'y - Delivery Info</title>
   <link rel="shortcut icon" href="images/logo.svg" type="image/x-icon" />
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet" />
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
   <script src="https://cdn.tailwindcss.com"></script>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

   <script>
      tailwind.config = {
         theme: {
            extend: {
               colors: {
                  clifford: "#da373d",
               },
            },
         },
      };
   </script>
   <style type="text/tailwindcss">
      @layer utilities {
            .content-auto {
               content-visibility: auto;
            }
         }
      </style>
   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
   <style>
      html {
         scroll-behavior: smooth;
      }

      body {
         font-family: "Montserrat";
      }

      .bg-main {
         background-image: url(images/bg-img.jpg);
         background-size: cover;
         background-repeat: no-repeat;
         background-position: center;
         background-attachment: fixed;
      }

      .title {
         font-family: "Sofia", cursive;
      }

      .scroll-container {
         scroll-snap-type: y mandatory;
         overflow-y: scroll;
         overflow-x: hidden;
         scroll-behavior: smooth;
      }

      .scroll-child {
         scroll-snap-align: start;
         flex: none;
      }

      ::-webkit-scrollbar {
         width: 10px;
      }

      ::-webkit-scrollbar-track {
         background: #f1f1f1;
      }

      ::-webkit-scrollbar-thumb {
         background: #888;
      }

      ::-webkit-scrollbar-thumb:hover {
         background: #555;
      }

      #postal::-webkit-outer-spin-button,
      #postal::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0;
      }
   </style>
</head>

<body class="bg-[#282421] overflow-x-hidden text-white pb-20">
   <p class="text-right font-medium text-lg px-64 mb-5">Delivery Info</p>
   <hr class="mb-16 mx-64" />
   <div class="px-64 grid grid-cols-4 gap-x-16 gap-y-8 font-medium">
      <div class="">
         <label class="block text-sm mb-3" for="del-name">Name</label>
         <input class="rounded w-full text-black" type="text" id="del-name" required/>
      </div>
      <div class="col-span-1">
         <label class="block text-sm mb-3" for="del-thana">Thana</label>
         <select class="rounded w-full text-black" name="del-thana" id="del-thana">
            <option value="mirpur">Mirpur</option>
            <option value="dhanmondi">Dhanmondi</option>
            <option value="mohammadpur">Mohammadpur</option>
            <option value="uttara">Uttara</option>
         </select>
      </div>
      <div class="col-span-2">
         <label class="text-right block text-sm mb-3" for="del-streetAd">Street Address</label>
         <input class="rounded w-full text-black" id="del-streetAd" type="text" required/>
      </div>
      <div class="col-span-2">
         <label class="block text-sm mb-3" for="del-phone">Phone Number</label> 
         <input class="rounded w-full text-black" id="del-phone"
            type="text" required/>
      </div>
      <div class="col-span-1">
         <label class="text-right block text-sm mb-3" for="del-district">District</label>
         <select class="rounded w-full text-black" name="del-district" id="del-district">
            <option value="dhaka">Dhaka</option>
         </select>
      </div>
      <div class="col-span-1">
         <label class="text-right block text-sm mb-3" for="del-postal">Postal Code</label>
         <input class="rounded w-full text-black" type="number" id="del-postal" required/>
      </div>
   </div>
</body>

</html>