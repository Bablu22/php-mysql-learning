<?php include('header.php') ?>
<div class="max-w-lg mx-auto my-8">
    <form action="script.php" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Name:</label>
            <input type="text" id="name" name="name"
                   class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
            <input type="email" id="email" name="email"
                   class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="subject" class="block text-gray-700 font-bold mb-2">Subject:</label>
            <input type="text" id="subject" name="subject"
                   class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 font-bold mb-2">Message:</label>
            <textarea id="message" name="message"
                      class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Send Message
            </button>
        </div>
    </form>
</div>
<?php include('footer.php') ?>

