<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\Comment;
use Doctrine\Common\Persistence\ObjectManager;

class ArticleFixtures extends BaseFixtures
{
    private static $articleTitles = [
        'Why Asteroids Taste Like Bacon',
        'Life on Planet Mercury: Tan, Relaxing and Fabulous',
        'Light Speed Travel: Fountain of Youth or Fallacy',
    ];
    private static $articleImages = [
        'burger.jpeg',
        'pizza.jpg',
        'drink.jpg',
    ];

    protected function loadData(ObjectManager $manager)
    {
        $this->createMany(Article::class, 10, function(Article $article, $count) use ($manager)
        {
            $content = <<<EOF
**Bacon ipsum** dolor amet alcatra pork loin capicola leberkas. Bresaola fatback doner, tongue frankfurter t-bone pork pig beef salami. Pork chop rump jerky, cupim strip steak short loin tail. Pork chop corned beef tri-tip beef boudin tongue pig sausage pork loin brisket pork. Ground round burgdoggen sausage pig sirloin cow venison. Rump buffalo andouille, ribeye kielbasa capicola shank jerky burgdoggen sausage ground round jowl ham hock strip steak flank.

Beef jowl pork belly sirloin boudin buffalo andouille pork loin kielbasa biltong ribeye. Pork bacon leberkas pork belly kielbasa tenderloin. Alcatra short loin ball tip, shoulder cow capicola corned beef boudin short ribs pork belly. Pork belly ground round pork chop picanha bacon prosciutto cupim landjaeger leberkas, fatback cow biltong pork loin. Hamburger short ribs tri-tip t-bone biltong meatloaf chicken kevin tail shankle pastrami jowl sirloin buffalo pork belly. Capicola bacon kielbasa turkey, biltong pork belly burgdoggen. T-bone boudin ground round, jerky beef ribs tenderloin burgdoggen brisket salami frankfurter pancetta buffalo.

Short loin salami capicola **pork pastrami hamburger**. Filet mignon doner venison jowl fatback pastrami strip steak tongue tail meatball ground round. Short ribs corned beef sausage beef doner sirloin short loin spare ribs pork belly. Ham bacon t-bone ribeye chicken meatball fatback strip steak.

Leberkas t-bone tenderloin, filet mignon ground round short ribs flank meatloaf andouille. Strip steak turducken t-bone fatback tongue meatloaf jowl. Burgdoggen tenderloin pancetta spare ribs doner, corned beef ball tip ground round cupim ham sirloin. Strip steak flank filet mignon corned beef short ribs kielbasa drumstick. Alcatra flank chicken hamburger ground round buffalo.

Pig sausage meatloaf burgdoggen beef pork chop. Pork belly short loin burgdoggen, venison brisket strip steak jowl swine meatball ham hock pork. Landjaeger drumstick pig hamburger kielbasa tail cupim salami tongue. Shank pork chop short loin burgdoggen, jerky shoulder kevin. Tail flank filet mignon, ground round andouille cow doner corned beef. Swine turducken cow pork loin.
EOF;
            $article->setTitle($this->faker->randomElement(self::$articleTitles))
                ->setContent($content)
                ->setAuthor($this->faker->randomNumber())
                ->setLikes($this->faker->numberBetween(5,100))
                ->setImageFilename($this->faker->randomElement(self::$articleImages));
                if($this->faker->boolean(70))
                {
                    $article->setPublishedAt($this->faker->dateTimeBetween('-100 days', '-1 days'));
                }


        });

        $manager->flush();
    }
}
