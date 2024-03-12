<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <!-- Include Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 p-6">
  <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
    <h2 class="text-2xl font-bold mb-4">Confirm You Have Booked!</h2>
    <form action="/sendsms" method="POST" >
      @csrf
      <div class="mb-4">
        <label for="name" class="block text-gray-700 font-semibold mb-2 ">Name:</label>
        <input type="text" id="name" placeholder="Tom Cat" name="name" required class="w-full border-gray-300 rounded-md shadow-sm px-2 py-1 border-0 focus:border focus:border-blue-200">
      </div>
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-semibold mb-2">Email:</label>
        <input type="email" id="email" placeholder="tomcat@gmail.com" name="email" required class="w-full border-gray-300 rounded-md shadow-sm px-2 py-1 border-0 focus:border focus:border-blue-200">
      </div>
      <div class="mb-4">
        <label for="number" class="block text-gray-700 font-semibold mb-2">Phone Number:</label>
        <input type="number" id="number" placeholder="+254XXXXXXXXX" name="number" required class="w-full border-gray-300 rounded-md shadow-sm px-2 py-1 border-0 focus:border focus:border-blue-200">
      </div>
      <div class="mb-6">
        <label for="message" class="block text-gray-700 font-semibold mb-2">How Many Of Our Events Have Your Attended?</label>
        <input id="message" name="message"  class="w-full border-gray-300 rounded-md shadow-sm px-2 py-1 border-0 focus:border focus:border-blue-200">
      </div>
      <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold mb-4">What's Your Contact Preference?</h2>
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2">Select your preferred contact method:</label>
            <div>
                <label class="inline-flex items-center mr-6">
                    <input type="radio" class="form-radio text-indigo-500" name="email_method" value="email">
                    <span class="ml-2">Email</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" class="form-radio text-indigo-500" name="email_method" value="text">
                    <span class="ml-2">Text</span>
                </label>
            </div>
      <div>
        <button type="submit" class="w-full bg-indigo-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-indigo-600 transition duration-300">Submit</button>
      </div>
    </form>
  </div>
</body>
</html>
