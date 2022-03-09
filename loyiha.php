<form action="" method="POST">
    <input type="text" name="name">
    <input type="submit" name="submit">
</form>


<?php


function removeSimbols()
{
    if (isset($_POST['submit'])) {


        $string = $_POST['name'];


        $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // spetsialniy yoziladigan belgilarni o'chiradigan funksiya.



        $structure = "$string";

        // papka yaratish

        if (!mkdir($structure, 0777, true)) {
            die('bunaqa fayl yaratib bo\'lmadi yoki bunday nomli fayl oldin yaratilgan!!!');
        } else {
            echo $string . ' --shu nomli fayl yaratildi...';
        }
    }
}

removeSimbols();
?>