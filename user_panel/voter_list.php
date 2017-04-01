<?php include '../view/header.php'; ?>
<main>
    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <?php include '../view/category_nav.php'; ?>        
    </aside>

    <section>
        <p>Please select a voter to call by selecting call next to a name. You will be taken to a page with a voters number and script for the call.</p>
        <form method="post" action=".">
            <label>Your name:</label><br>
            <input type="text" name="userName" value="<?php echo $_SESSION['userName'];?>"/><br>
            <input type="submit" name="Submit_Name" value="Submit" />
        </form>
        
        <!-- display a list of voters -->
        <h2>Voter list: <?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Voter ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($voters as $voter) : ?>
            <tr>
                <td><?php echo $voter['voterID']; ?></td>
                <td><?php echo $voter['firstName']; ?></td>
                <td><?php echo $voter['lastName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="voter_id"
                           value="<?php echo $voter['voterID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $voter['categoryID']; ?>">
                    <input type="submit" value="Call">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>       
    </section>
</main>
<?php include '../view/footer.php'; ?>