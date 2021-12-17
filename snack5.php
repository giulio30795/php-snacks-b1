<!-- Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, amet? Recusandae blanditiis reiciendis amet voluptatibus, nostrum praesentium dignissimos accusamus cupiditate non quam, iure minus a nam modi, beatae esse odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quidem corrupti ullam, porro itaque odio animi quibusdam harum sed architecto quisquam, rem commodi eveniet cumque! Molestias harum esse minus asperiores? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, amet? Recusandae blanditiis reiciendis amet voluptatibus, nostrum praesentium dignissimos accusamus cupiditate non quam, iure minus a nam modi, beatae esse odio. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, quidem corrupti ullam, porro itaque odio animi quibusdam harum sed architecto quisquam, rem commodi eveniet cumque! Molestias harum esse minus asperiores?';
 
echo $paragrafo;

echo '<br>'.'<br>'.'<br>';

echo str_replace('.', '<br>', $paragrafo);

?>