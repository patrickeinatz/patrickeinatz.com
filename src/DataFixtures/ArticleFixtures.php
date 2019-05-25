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
Lorem ipsum **dolor** sit amet, **consetetur sadipscing** elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. 

Duis autem vel eum [iriure dolor](https://baconipsum.com) in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 

Ut wisi enim ad minim veniam, quis **nostrud** exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
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

            $comment1 = new Comment();
            $comment1->setAuthorName('Some Asshole Dude');
            $comment1->setContent('Uff, this is so 1984..., come up with something new some times! #lame');
            $comment1->setArticle($article);
            $manager->persist($comment1);

            $comment2 = new Comment();
            $comment2->setAuthorName('Another Dumbfuck');
            $comment2->setContent('yeah, totally, go de-install internet #noob');
            $comment2->setArticle($article);
            $manager->persist($comment2);

        });

        $manager->flush();
    }
}
