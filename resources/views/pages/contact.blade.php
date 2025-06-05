@extends('pages.navbar')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booking Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">

        {{-- filepath: c:\MARAHUYO\marahuyo-jca-copy\resources\views\pages\contact.blade.php --}}
    @extends('layouts.app')

    @section('content')
    <div class="container mx-auto px-6 py-16 max-w-3xl">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800">Contact Us</h1>
        <div class="bg-white rounded-lg shadow p-8">
            @if(session('success'))
                <!-- Modal -->
                <div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-40 z-50">
                    <div class="bg-white rounded-lg shadow-lg p-8 max-w-sm w-full text-center">
                        <h2 class="text-xl font-bold mb-4 text-green-600">Message Sent!</h2>
                        <p class="mb-6 text-gray-700">{{ session('success') }}</p>
                        <button onclick="document.getElementById('successModal').style.display='none'"
                            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Close</button>
                    </div>
                </div>
                <script>
                    setTimeout(() => {
                        const modal = document.getElementById('successModal');
                        if(modal) modal.style.display = 'none';
                    }, 3000);
                </script>
            @endif

            <form action="{{ route('contacts.post') }}" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block font-semibold text-gray-700 mb-1">Name</label>
                    <input type="text" id="name" name="name" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div>
                    <label for="email" class="block font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" id="email" name="email" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div>
                    <label for="message" class="block font-semibold text-gray-700 mb-1">Message</label>
                    <textarea id="message" name="message" rows="5" required
                        class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition">Send Message</button>
                </div>
            </form>
            <div class="mt-10 text-gray-600 text-sm">
                <p><span class="font-semibold">Address:</span> Marahuyo Resort and Spa, Your City, Country</p>
                <p><span class="font-semibold">Phone:</span> (123) 456-7890</p>
                <p><span class="font-semibold">Email:</span> info@marahuyo.com</p>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>


