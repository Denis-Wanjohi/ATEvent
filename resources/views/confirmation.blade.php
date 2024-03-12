<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Attendance Confirmation</title>
    <!-- Include Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans antialiased bg-gray-200">
    <div class="max-w-md mx-auto mt-10 bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-4">Confirmation</h2>
        <p class="text-lg mb-4">Thank you for confirming your attendance to the event.</p>
        <div class="flex items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 0a10 10 0 110 20 10 10 0 010-20zm-.293 14.707a1 1 0 01-1.414-1.414l3-3a1 1 0 011.414 1.414l-3 3z" clip-rule="evenodd" />
            </svg>
            <p class="text-green-500">Your attendance has been confirmed😊</p>
        </div>
        <p class="text-gray-700 mb-8  text-red-500 text-xs">*if you haven't receieved a  PassId please use the email notification</p>
        <a href="/" class="bg-blue-500 text-white font-semibold px-6 py-3 rounded-md hover:bg-blue-600 transition duration-300">Back</a>
    </div>
</body>
</html>
