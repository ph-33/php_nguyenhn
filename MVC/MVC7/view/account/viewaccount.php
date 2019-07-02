<?php 
    session_start();
    echo 'AccountNo :'.$_SESSION['account'].'<br>';
    echo 'Account Name:'.$_SESSION['owner_no'].'<br>';
    echo 'Amount :'.$_SESSION['amount'].'<br>';
    echo 'AccountType :'.$_SESSION['account_type'].'<br>';
    echo '<a href="../../controller/account_controller.php">Back</a>';
?>