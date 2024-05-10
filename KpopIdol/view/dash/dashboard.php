<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/KpopIdol/model/contact.php';
// var_dump($arr['ID']);
$arr = Contact::select();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kpop</title>
    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- css -->
    <link rel="stylesheet" href="/KpopIdol/view/dash/style_index.css">
</head>

<body>
    <!-- Sidebar -->
    <section class="sidebar">
        <a href="#" class="brand">
            <span class="icon">
                <i class='bx bxs-contact'></i>
                <span class="text">Kpop Idol</span>
            </span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Settings</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- Sidebar -->
    <!-- Content -->
    <section class="content">
        <!-- Main -->
        <main>
            <!-- Head -->
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                </div>
            </div>
            <!-- Head -->

            <!-- Board -->
            <div class="board">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>NO</td>
                            <td>ID</td>
                            <td>Phone Number</td>
                            <td>Idols name</td>
                            <td class="actions">
                                <button class="add">
                                    <a href="addpage">
                                        Add
                                </button>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        for ($i = 0; $i < count($arr['ID']); $i++) {
                        ?>
                            <tr>
                                <td> <?= $i ?> </td>
                                <td> <?= $arr['ID'][$i] ?> </td>
                                <td> <?= $arr['Phone'][$i] ?> </td>
                                <td> <?= $arr['Idols_name'][$i] ?> </td>
                                <td class="actions-button">
                                    <div><a href="updatepage?id=<?= $arr['ID'][$i] ?>" >Edit</a></div>
                                    <div class="#"><a href="delete?id=<?= $arr['ID'][$i] ?>">Delete</a></div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        <!-- Main -->
    </section>
</body>

</html>