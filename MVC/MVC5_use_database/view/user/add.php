<?php include 'view/layouts/header.php';?>
    <main>
        <h1>Add User</h1>
        <form action="index.php" method="post" id="add_customer_form">
            <input type="hidden" name="action" value="add" />

            <label>Email Address:</label>
            <input type="text" name="email" value ="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
            <br>

            <label>First Name:</label>
            <input type="text" name="firstname">
            <br>

            <label>Last Name:</label>
            <input type="text" name="lastname">
            <br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Customer">
            <br>
        </form>
    </main>
 <?php include 'view/layouts/footer.php';?>
