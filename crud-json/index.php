<?php
require __DIR__ .'/users.php';
$users= getUsers();
include 'partials/header.php'
?>

<div class="container mx-auto mt-5">
    <p>
        <a class="btn btn-success rounded-0" href="create.php">Create new User</a>
    </p>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['username'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['phone'] ?></td>
                <td><?php echo $user['website'] ?></td>
                <td class="d-flex justify-content-between">
                    <a href="update.php?id=<?php echo $user['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>