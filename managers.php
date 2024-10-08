<!-- Maria Alfaro
4/2/24
It202-004
Phase03
mja65@njit.edu
-->
<?php

    require_once('njit_database.php');
    
    function addSitStirManager($email, $password, $firstName, $lastName) {
        $db = getDB();
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $query = 'INSERT INTO sipStirManagers (emailAddress, password, firstName, lastName, dateCreated)
                  VALUES (:email, :password, :firstName , :lastName, NOW())';
        $statement = $db->prepare($query);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':password', $hash);
        $statement->bindValue(':firstName', $firstName);
        $statement->bindValue(':lastName', $lastName);
        $statement->execute();
        $statement->closeCursor();
        
    }
     
    addSitStirManager('mroberts@example.com','P@ssw0rd456','Michael', 'Roberts');
    addSitStirManager('jsmith@example.com','Qwerty123!','Jennifer', 'Smith');
    addSitStirManager('aadams@example.com','Sunshine789$','Amanda', 'Adams');



     
?>