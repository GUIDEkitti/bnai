<?php

include("config.php");

?>

<div class="container">
    <header class="d-flex flex-column flex-md-row justify-content-between align-items-center py-3 mb-4 border-bottom">
        <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap" />
            </svg>
            <span class="fs-4"><?php echo $title; ?></span>
        </a>

        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a href="index.php" class="nav-link active active bg-success text-white" aria-current="page">หน้าแรก</a>
            </li>

            <li class="nav-item"><a href="#activity" class="nav-link text-green">ช่องทางการติดต่อ</a></li>

        </ul>
    </header>
</div>