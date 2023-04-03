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
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

// Close database connection
mysqli_close($conn);
?>

<?php include('header.php') ?>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1  md:grid-cols-2 lg:grid-cols-4 gap-4">
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
<?php include('footer.php') ?>