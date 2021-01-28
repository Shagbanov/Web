<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <link rel="stylesheet" href="auth.php">
    <h5 class="my-0 mr-md-auto font-weight-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">The property</font></font></h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="http://localhost:63342/Web/index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Главная</font></font></a>
        <a class="p-2 text-dark" href="http://localhost:63342/Web/about.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Контакты</font></font></a>
    </nav>
    <?php
        if($_COOKIE['user'] == 'Да'):
    ?>
    <a class="btn btn-outline-primary" href="auth.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Кабинет пользователя</font></font></a>
    <?php
        else:
    ?>
    <a class="btn btn-outline-primary" href="auth.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Войти</font></font></a>
    <?php endif; ?>
</div>