<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Liens extends Fixture
{
    public function load(ObjectManager $manager)
    {

        //création de 4 lorem ipsum
        for ($i = 0; $i < 6; $i++) {
            $Lien = new \App\Entity\Liens();
            $Lien->setTitre('Project '.$i);
            $Lien->setURL('www.google.com');
            $Lien->setTAGS('tag1 tag2');
            $Lien->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.');
            $manager->persist($Lien);
        }

        $manager->flush();
    }
}
