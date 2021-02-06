<?php
require_once 'concreteDecoratorA.php';
require_once 'concreteDecoratorB.php';
require_once 'concreteComponent.php';

$text = (isset($_POST['text'])? $_POST['text'] : '');
$decorate = (isset($_POST['decorate'])? $_POST['decorate'] : array());
if ($text !== '') {
    $text_object = new PlainText();
    $text_object->setText($text);

    foreach ($decorate as $val) {
        switch ($val) {
            case 'double':
                $text_object = new DoubleByteText($text_object);
                break;
            case 'upper':
                $text_object = new UpperCaseText($text_object);
                break;
            default:
                throw new RuntimeException('invalid decorator');
        }
    }
    echo htmlspecialchars($text_object->getText(), ENT_QUOTES, mb_internal_encoding()) . "<br>";
}
?>
<hr>
<form action="" method="post">
    テキスト：<input type="text" name="text"><br>
    装飾：<input type="checkbox" name="decorate[]" value="upper">大文字に変換
    <input type="checkbox" name="decorate[]" value="double">2バイト文字に変換
    <input type="submit">
</form>
