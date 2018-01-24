<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>

        </tr>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <th><a href=".?category_id=<?php echo $category['categoryID']; ?>">
                        <?php echo $category['categoryName']; ?>
                    </a>
                </th>
                <th><form action="category_delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $category['categoryID']?>" />
                        <input type="submit" value="Delete" text="Delete" name="Delete">
                    </form>
                </th>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form action="category_add.php" method="post">
        <!-- add code for the form here -->
        <label>Category Name:</label>
        <input type="text" name="name">
        <input type="submit" value="Add Category"><br>
    </form>

    <br>
    <p><a href="index.php">List Products</a></p>

</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>