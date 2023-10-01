$(document).ready(function() {
    function updateNewsList() {
        $.ajax({
            type: 'GET',
            url: 'get_news.php',
            success: function(response) {
                $('#news_list').html(response);
            }
        });
    }

    $('#news_form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'add_news.php',
                data: $(this).serialize(),
                success: function(response) {
                    updateNewsList(); // вызов функции обновления списка
                    $('#news_form')[0].reset();
                    Toastify({
                        text: "Новость успешно добавлена!",
                        duration: 5000,
                        close: true,
                        gravity: "top",
                        position: "right",
                        backgroundColor: "#4CAF50",
                        stopOnFocus: true,
                    }).showToast();
                }
            });
        });
});