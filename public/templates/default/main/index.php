<!DOCTYPE html>
<html lang="en">
<?php require_once 'html/head.php' ?>

<body>
    <!-- HERDER -->
    <?php require_once 'html/header.php' ?>
    <!-- Slider -->
    <?php
    if ($this->_controllerName == 'sunglasses' || $this->_controllerName == 'glasses' || $this->_controllerName == 'collaborations' || $this->_controllerName == 'stories' || $this->_controllerName == 'stores') {
        require_once 'html/slider.php';
    }
    ?>





    <?php
        require_once 'html/footer.php'
    ?>
</body>

</html>