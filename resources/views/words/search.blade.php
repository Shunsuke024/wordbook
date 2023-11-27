<x-app-layout>
    <?php
        $dsn = "mysql:dbname=Master; host=localhost; charset=utf8mb4";
        $username = "dbuser";
        $password = "f8pHreE+";
        $pdo = new PDO($dsn, $username, $password);
        $stmt = $pdo->prepare(" SELECT * FROM words WHERE concat(English, Japanese) LIKE '%" . $_POST["reg_word"] . "%' ");
        $stmt->execute();
    ?>
    
    <p class="text-xl text-center">単語帳</p>
    
    <table class="text-center">
        <?php foreach($stmt as $row): ?>
            <tr class="text-center">
                <td ><?php echo $row[3]?></td>
                <td ><?php echo $row[4]?></td>
            </tr>
        <?php endforeach?>
    </table>
    
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</x-app-layout>