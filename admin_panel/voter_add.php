<?php include '../view/header.php'; ?>
<main>
    <h1>Add Voter</h1>
    <form action="index.php" method="post" id="add_voter_form">
        <input type="hidden" name="action" value="add_voter">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        
        <label>Voter ID:</label>
        <input type="text" name="voterID" />
        <br>
        
        <label>First Name:</label>
        <input type="text" name="firstName" />
        <br>
        
        <label>Last Name:</label>
        <input type="text" name="lastName" />
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" />
        <br>

        <label>City:</label>
        <input type="text" name="city" />
        <br>
        
        <label>Party:</label>
        <input type="text" name="party" />
        <br>
        <br>
        <label>&nbsp;</label>
        <input type="submit" value="Add voter" />
        <input type="reset">
    </form>
    <br>
    <form method="post" action="../admin_panel/">
        <button type="submit">Return to Admin Panel</button>
    </form>
</main>
<?php include '../view/footer.php'; ?>