<?php include '../view/header.php'; ?>
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
                <th><form action="." method="post">
                        <input type="hidden" name="category_id" value="<?php echo $category['categoryID']?>" />
                        <input type="hidden" name="action" value="add_category" />
                        <input type="submit" value="Delete" text="Delete" name="Delete">
                    </form>
                </th>
            </tr>
        <?php endforeach; ?>
    </table>


    <h2>Add Category</h2>
    <form action="." method="post">
        <label>Category Name:</label>
        <input type="hidden" name="action" value="delete_category">
        <input type="text" name="name">
        <input type="submit" value="Add Category"><br>
    </form>

    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>