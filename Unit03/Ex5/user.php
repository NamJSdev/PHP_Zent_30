<?php
    include_once('layoutTop.php');
    include_once('header.php');
    include_once('sidebar.php');
    $users = [
        [
            'id' => '001',
            'name' => 'An',
            'email' => 'xathu@gmail.com'
        ],
        [
            'id' => '002',
            'name' => 'Viet',
            'email' => '123@gmail.com'
        ],
        [
            'id' => '003',
            'name' => 'Tuấn',
            'email' => 'abcd@gmail.com'
        ],
    ];
?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user){ ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['name'] ?></td>
            <td><?= $user['email'] ?></td>
        </tr>
        <?php }?>
  </tbody>
    </table>
<?php
    echo "User";
    require_once('footer.php');
    include_once('layoutBottom.php');
?>