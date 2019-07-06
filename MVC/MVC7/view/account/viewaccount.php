<?php 
    echo 'AccountNo :'.$_SESSION['account'].'<br>';
    echo 'Account Name:'.$_SESSION['owner_no'].'<br>';
    echo 'Amount :'.$_SESSION['amount'].'<br>';
    echo 'AccountType :'.$_SESSION['account_type'].'<br>';
    echo '<a href="?action=index">Back</a>';
?>