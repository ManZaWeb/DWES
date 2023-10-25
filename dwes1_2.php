<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            $saludo = "Biemvenido";
            $nombre = "Pepe";
            echo $saludo . ", " . $nombre;
            
        ?>
    </p>
    <p>
        <?php
            
            if (print "Hola"){
                echo "caracola";
            }
        
        ?>
    </p>
    <p>
        <?php
            $miEntero = 15;
            $miEntero2 = 015;
            $miEntero3 = 0x15;

            echo $miEntero . "<br>";
            echo $miEntero2 . "<br>";
            echo $miEntero3 . "<br>";

            $a = 5;
            //$b = $a + 1;
            $b = $a++;
            $c = ++$a;

            echo $a . "<br>";
            echo $b . "<br>";
            echo $c . "<br>";
            echo "c  vale $c y es un valor de tipo " . gettype($c);
            settype($a, "float");
            echo "<br>a  vale $a y es un valor de tipo " . gettype($a);

        ?>
        
    </p>
    <p>
    <?php
    $libros = ["HArry Potter", "El señor de los anillos", "Dune", "WH40k"];
           
            var_dump($libros);
            echo "<br>";
            
            ?>
    </p>
    <ul>
    <?php
             $books = [
                [
                    "titulo" => "Harry poter",
                    "autor" => "JkRowling",
                    "comprar" => "http://ejemplo.com"
                ],
                [
                    "titulo" => "ESDLA",
                    "autor" => "Tolkiem",
                    "comprar" => "http://ejemplo2.com"
                ],
                [
                    "titulo" => "Dune",
                    "autor" => "NomeAcuerdo",
                    "comprar" => "http://ejemplo3.com"
                ]
            ];

            foreach ($books as $book){
                echo "<li>$book[titulo]</li>";
            }
        ?>
        <?php foreach ($books as $book) : ?>
            <li>
            <a href="$book[comprar]">Enlace de compra</a>
            </li>
            <?php endforeach; ?>
    </ul>
</body>
</html>