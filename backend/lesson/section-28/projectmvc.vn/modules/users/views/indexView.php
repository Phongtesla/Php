<?php
get_header();
?>

<div id="content">
    <h1>Danh sách thành viên</h1>
    <table>
        <thead>
            <tr>
                <td>Stt</td>
                <td>Fullname</td>
                <td>Username</td>
                <td>Giới tính</td>
                <td>Email</td>
            </tr>
        </thead>
        <?php if (!empty($list_users)) {
        ?>
            <tbody>
                <?php
                $t = 0;
                foreach ($list_users as $user) {
                    $t++;
                ?>
                    <tr>
                        <td><?php echo $t; ?></td>
                        <td><?php echo $user['fullname'] ?></td>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['gender'] ?></td>
                        <td><?php echo $user['email'] ?></td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        <?php
        } ?>

    </table>
</div>



<?php
get_footer();
?>