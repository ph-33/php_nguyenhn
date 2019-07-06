<?php 
 include 'view/layouts/header.php';?>
 <label for="">Search</label>
<?php include('search.php'); ?>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Email</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $key ) { ?>
                <tr>
                    <td><?php echo htmlentities($key->getEmail()); ?></td>
                    <td><?php echo htmlentities($key->getFirstName()); ?></td>
                    <td><?php echo htmlentities($key->getLastName()); ?></td>
                    <td>
                        <form action="." method="post" id="delete_users_form">
                            <input type="hidden" name="action" value="delete">
                            <input type="hidden" name="email" value = "<?php echo htmlentities($key->getEmail()); ?>">
                            <a href="#" onclick="document.getElementById('delete_users_form').submit();">Delete</a>
                        </form>
                    </td>
                    <td>
                        <form action="?action=viewedit" method="post" id="edit_user_form">
                            <input type="hidden" name="email" value ="<?php echo $key->getEmail();?>">
                            <input type="hidden" name="firstName" value ="<?php echo $key->getFirstName(); ?>">
                            <input type="hidden" name="lastName" value ="<?php echo $key->getLastName(); ?>">
                            <a href="#" onclick="document.getElementById('edit_user_form').submit();">Edit</a>
                        </form>
                    </td>
                </tr>
           <?php  } ?>
        </tbody>
    </table>
    <nav class="nav justify-content-center">
      <a class="nav-link" href="?action=viewadd">Add Email </a>
    </nav>
 <?php include 'view/layouts/footer.php';?>
