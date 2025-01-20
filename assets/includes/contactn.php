<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/tdh.css">
</head>
<body class="bg-gradient-to-b from-[#0a2540] to-[#0a2540] text-white">
    <header class="text-center py-8">
        <h1 class="text-4xl font-bold">Contact Us</h1>
    </header>
    <main class="flex flex-col items-center">
        <div class="bg-[#0f457a] p-8 rounded-lg w-11/12 md:w-2/3 lg:w-1/2">
            <form class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Name" type="text"/>
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Phone Number" type="text"/>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Email" type="email"/>
                    <input class="p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Address" type="text"/>
                </div>
                <textarea class="w-full p-3 rounded bg-[#0a2540] border border-[#ffffff] text-white focus:outline-none focus:ring-2 focus:ring-[#ffffff]" placeholder="Textarea"></textarea>
                <button class="w-full py-3 bg-[#ffffff] text-[#0a2540] rounded-lg font-bold hover:bg-[#e0e0e0]" type="submit">SEND MESSAGE</button>
            </form>
        </div>
        <div class="flex flex-col md:flex-row justify-around items-center w-full mt-8 space-y-4 md:space-y-0">
            <div class="flex items-center space-x-2">
                <i class="fas fa-map-marker-alt text-2xl text-[#ffffff]"></i>
                <span>Place x, 77 New XC Street, XYZ</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-phone-alt text-2xl text-[#ffffff]"></i>
                <span>+123 456 7890</span>
            </div>
            <div class="flex items-center space-x-2">
                <i class="fas fa-envelope text-2xl text-[#ffffff]"></i>
                <span>youremail@domain.com</span>
            </div>
        </div>
        <div class="w-full mt-8">
            <img alt="Map showing the location" class="w-full h-64 object-cover" height="400" src="https://storage.googleapis.com/a1aa/image/cOsInDwU7KIfICPWJNn3IajYFPtqrk1UqfLfqVaYfvHRU1bQB.jpg" width="1200"/>
        </div>
    </main>
