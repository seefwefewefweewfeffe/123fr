<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое задание</title>
    
    <link rel="stylesheet" href="./assets/compiled/css/app.css">
    <link rel="stylesheet" href="./assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="./assets/compiled/css/iconly.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js@1/src/toastify.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js@1/src/toastify.min.js" defer></script>
</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <nav class="main-navbar">
                    <div class="container">
                        <ul> 
                            <li
                                class="menu-item  ">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Меню 1</span>
                                </a>
                            </li>
                            <li
                                class="menu-item  ">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Меню 2</span>
                                </a>
                            </li>
                            <li 
                                class="menu-item  ">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Меню 3</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <div class="content-wrapper container">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <form id="news_form">
                                            <input type="text" id="title" name="title" class="form-control" placeholder="Заголовок новости:" required><br>
                                            <textarea class="form-control" id="text" name="text" rows="3" placeholder="Текст новости:" required></textarea><br>
                                            <button type="submit" class="btn btn-success">Отправить</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <div class="page-heading">
                    <h3>Новости</h3>
                </div>

                <div class="page-content">
                    <section class="row" id="news_list">
                        <?php include 'get_news.php'; ?>
                    </section>
                </div>

            </div>

        </div>
    </div>

    <script src="add_news.js"></script>
    <!-- ______________________________________ -->
    <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/compiled/js/app.js"></script> 
</body>

</html>