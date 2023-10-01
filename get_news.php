<?php
require_once 'db_connection.php';

$query = "SELECT * FROM news ORDER BY date DESC";
$result = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo '
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <h4 class="card-title">' . $row['title'] . '</h4>
                    <p class="card-text">' . $row['content'] . '</p>
                    <small class="text-muted">Дата публикации: ' . $row['date'] . '.</small>
                </div>
            </div>
        </div>';
}