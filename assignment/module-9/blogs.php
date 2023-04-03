<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve blog posts from database
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $sql = "SELECT * FROM posts WHERE posts.title LIKE '%{$keyword}%' OR posts.content LIKE '%{$keyword}%'";
    $result = mysqli_query($conn, $sql);
}  #for tags
else if (isset($_GET['tag'])) {
    $tag = $_GET['tag'];
    $sql = "SELECT * FROM posts WHERE posts.category LIKE '%{$tag}%'";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $result = mysqli_query($conn, $sql);
}
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$category = mysqli_query($conn, $sql);

// Close database connection
mysqli_close($conn);
?>

<?php include('header.php') ?>
    <div class="container mx-auto py-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="col-span-3">
                <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>

                        <div class='w-full max-w-md  mx-auto bg-white rounded shadow-xl overflow-hidden'>
                            <div class='max-w-md mx-auto'>
                                <div class='h-[236px]'
                                     style='background-image:url(<?php echo $row['image']; ?>);background-size:cover;background-position:center'>
                                </div>
                                <div class='p-4 sm:p-6'>
                                    <p class='font-bold text-gray-700 text-xl leading-7 mb-1'><?php echo $row['title']; ?></p>
                                    <p class='text-[#7C7C80] font-[15px] mt-6'><?php echo substr($row['content'], 0, 100) . '...'; ?></p>


                                    <a href='post.php?id=<?php echo $row['id']; ?>'
                                       class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                                        Read More
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-span-1">
                <form class="relative">
                    <label>
                        <input class="appearance-none bg-gray-200 rounded py-4 px-4 pl-12 w-full text-gray-700 leading-tight focus:outline-none focus:bg-white focus:shadow-md"
                               name="keyword"
                               type="text" placeholder="Search posts">
                    </label>
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center">
                        <svg class="fill-current text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                             width="24" height="24">
                            <path class="heroicon-ui"
                                  d="M14.57 13.43a7 7 0 1 1 .86-.86l5.14 5.14a1 1 0 0 1-1.42 1.42l-5.14-5.14zm-7 0a5 5 0 1 0 7.07-7.07A5 5 0 0 0 7.57 13.43z"/>
                        </svg>
                    </div>
                </form>
                <h5 class="text-lg font-bold my-4">BROWSE BY TAGS</h5>
                <div class="flex flex-wrap gap-4">
                    <?php foreach ($category as $tag) { ?>
                        <a href="blogs.php?tag=<?php echo $tag['category'] ?>" class="text-decoration-none">
                            <button class="bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 text-white py-2 px-2 rounded transition-colors duration-300 ease-in-out border border-blue-700 text-sm">
                                <?php echo $tag['category'] ?>
                            </button>
                        </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php include('footer.php') ?>