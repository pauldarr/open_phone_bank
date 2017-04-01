<?php include '../view/header.php'; ?>
<main>
    <h1>Voter List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <?php include '../view/category_nav.php'; ?>        
    </aside>

    <section>
        <!-- display a list of voters -->
        <h2>Voter list: <?php echo $category_name; ?></h2>
        <div style="overflow-x:auto;">
        <table>
            <tr>
                <th>Voter ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($voters as $voter) : ?>
            <tr>
                <td><?php echo $voter['voterID']; ?></td>
                <td><?php echo $voter['firstName']; ?></td>
                <td><?php echo $voter['lastName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_voter">
                    <input type="hidden" name="voter_id"
                           value="<?php echo $voter['voterID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $voter['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="voter_id"
                           value="<?php echo $voter['voterID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $voter['categoryID']; ?>">
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
        <form method="post" action="?action=show_add_form">
            <button type="submit">Add voter</button>
            <button type="submit" formaction="?action=list_categories">Add/Delete Category</button>
        </form>       
    </section>
</main>
<?php include '../view/footer.php'; ?>