<?php
    $pageTitle = 'Admin Page';

?>

<?php require '../layout/header.php'; ?>
<body>
    <?php require '../partials/navbar.php'; ?>
    <main>
       
        <h2><?= ucfirst($driversCategory) . " Drivers"; ?></h2>
        
        
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Created At</th>
                    <th>Status</th>
                    <?php
                    if(($driversCategory == 'active') || ($driversCategory == 'offline')){
                        echo "<th>Actions</th>";
                    }
                    
                    ?>
                        
                </tr>
            </thead>
        <tbody>
        <?php 
            $index = 1;
            foreach ($drivers->fetchAll(PDO::FETCH_OBJ) as $record) {
                
                $statusColor = "grey";
                if($record->status == 'offline'){
                    $statusColor = "red";
                }
                if($record->status == 'active'){
                    $statusColor = 'green';
                }
                if($driversCategory == 'active') {
                echo "<tr>
                        <td>$index</td>
                        <td>$record->full_name</td>
                        <td>$record->created_at</td>
                        <td style=\"color: $statusColor; font-weight: 500;\">$record->status</td>
                        <td>
                            <form action='../backend/update-task.php' method='POST'>
                                <input type='hidden' name='task-id' value=\"$record->id\">
                                <button class='primary' type='submit' name='status' value='offline'>requiest</button>
                                <button class='secondary' type='submit' name='status' value='deactivate'>Deactivate</button>

                            </form>
                        </td>
                    
                    </tr>";
                }else if ($driversCategory == 'offline'){
                    echo "<tr>
                    <td>$index</td>
                    <td>$record->full_name</td>
                    <td>$record->created_at</td>
                    <td style=\"color: $statusColor; font-weight: 500;\">$record->status</td>
                    <td>
                        <form action='../backend/update-task.php' method='POST'>
                            <input type='hidden' name='task-id' value=\"$record->id\">
                            <button class='secondary' type='submit' name='status' value='deactivate'>Deactivate</button>
                        </form>
                    </td>
                
                </tr>";
                }

                else{
                    echo "<tr>
                        <td>$index</td>
                        <td>$record->full_name</td>
                        <td>$record->created_at</td>
                        <td style=\"color: $statusColor; font-weight: 500;\">$record->status</td>
                    </tr>";
                }
                    $index++;
            }
        ?>
        </tbody>
        </table>
    </main>
    <?php require_once '../layout/footer.php'; ?>
    <?php require_once '../backend/tasks.php'; ?>
</body>
</html>