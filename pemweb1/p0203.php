<!DOCTYPE html>
<html>
    <title>assignment 3</title>
    <body>
        <h2> Nomor 3</h2>
        <?php 
        $paragraf1 = "Hello, my name is Eleanor. I am 13 years old.
                    Everyone has a family and I have also. I love my family very
                    much. I live with my family. Today I will share something about
                    my family. There are 4 people in total in our family. My parents,
                    my sister, and me. We are a very small family.";
        $paragraf2 = "My father is an engineer and my mother is a doctor,
                    but after their work, they spend so much time with us. They both
                    love us a lot. They work really hard to make our future better.
                    It is a very happy family. If we face any bad time, my parents
                    handle it with care.";

        $story = $paragraf1 . $paragraf2;
    

        $angkaKeHuruf = str_replace(['13','4'], ['thirteen', 'four'], $story);
        echo " <p> $angkaKeHuruf </p>";


        $jumlahKarakter = strlen($angkaKeHuruf);
        echo "<p><strong>jumlah karakter nya ada </strong>: $jumlahKarakter </p>";
        

        $jumlah_kata = str_word_count($angkaKeHuruf);
        echo " <p><strong>jumlah kata nya ada </strong>: $jumlah_kata </p>";

        ?>
    </body>
</html>