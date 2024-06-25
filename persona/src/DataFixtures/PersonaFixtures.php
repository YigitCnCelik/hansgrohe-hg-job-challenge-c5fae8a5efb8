<?php

namespace App\DataFixtures;

use App\Entity\Persona;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PersonaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $hansGrohe = new Persona();
        $hansGrohe->setName('Hans Grohe');
        $hansGrohe->setDescription("Hans Grohe, born in 1871, was a pioneering entrepreneur in the sanitation ".
            "industry, founding Hansgrohe in 1901 in the Black Forest town of Schiltach, Germany. Renowned for his ".
            "innovative spirit, he significantly advanced the development of showers and faucets, emphasizing quality ".
            "and functionality. His legacy continues to influence modern bathroom design through the company's ongoing ".
            "commitment to excellence and innovation.");
        $hansGrohe->setImage("hans_grohe.png");
        $manager->persist($hansGrohe);

        $philippeStarck = new Persona();
        $philippeStarck->setName('Philippe Starck');
        $philippeStarck->setDescription("Philippe Starck, a renowned French designer, has collaborated ".
            "extensively with Hansgrohe, infusing the company's products with his distinctive style since the early ".
            "1990s. Known for his innovative and minimalist designs, Starck has created iconic bathroom fixtures that ".
            "blend functionality with aesthetic appeal. His partnership with Hansgrohe has resulted in numerous ".
            "award-winning collections, elevating the brand's reputation in the luxury bathroom market.");
        $philippeStarck->setImage("philippe_starck.png");
        $manager->persist($philippeStarck);

        $antonioCitterio = new Persona();
        $antonioCitterio->setName('Antonio Citterio');
        $antonioCitterio->setDescription("Antonio Citterio has had a significant collaboration with Hansgrohe, ".
            "a leading German manufacturer of bathroom and kitchen fittings. He has designed several high-end collections ".
            "for Hansgrohe’s Axor brand, including the Axor Citterio and Axor Citterio E lines, which feature luxurious ".
            "and innovative bathroom fixtures that combine functionality with elegant design. Citterio's work with ".
            "Hansgrohe exemplifies his ability to create sophisticated and timeless designs that enhance everyday living ".
            "spaces.");
        $antonioCitterio->setImage("antonio_citterio.png");
        $manager->persist($antonioCitterio);

        $shakespeare = new Persona();
        $shakespeare->setName('William Shakespeare');
        $shakespeare->setDescription("William Shakespeare, often hailed as the greatest playwright in the English " .
            "language, was a prolific writer of the late 16th and early 17th centuries. His extensive body of work includes " .
            "timeless tragedies, comedies, and histories, such as Hamlet, Romeo and Juliet, and A Midsummer Night's Dream " .
            "Shakespeare's profound understanding of human nature and his masterful use of language have left an enduring " .
            "impact on literature and theater.");
        $shakespeare->setImage("william_shakespeare.png");
        $manager->persist($shakespeare);

        $yoda = new Persona();
        $yoda->setName('Yoda');
        $yoda->setDescription("Yoda is a wise and powerful Jedi Master, known for his distinctive green skin, " .
            "large ears, and small stature. He speaks in a unique, inverted syntax and serves as a mentor to several key " .
            "characters in the Star Wars saga, including Luke Skywalker. Renowned for his mastery of the Force and " .
            "exceptional lightsaber skills, Yoda plays a crucial role in the struggle against the dark side.");
        $yoda->setImage("yoda.png");
        $manager->persist($yoda);

        $manager->flush();
    }
}
