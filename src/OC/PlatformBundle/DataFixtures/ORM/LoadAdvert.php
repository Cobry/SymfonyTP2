<?php
/**
 * Created by PhpStorm.
 * User: Punis_Port
 * Date: 27/03/2017
 * Time: 21:13
 */

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $Listadverts= array(
            array('title'=> 'Recherche dev Symfony', 'author' => 'Clément', 'content' => 'Nous recherchons un developpeur symfony...','date' =>(new \DateTime('2014-02-02'))),
            array('title'=> 'Recherche dev Php', 'author' => 'Chloé', 'content' => 'Nous recherchons un developpeur Php...','date' =>(new \DateTime('20170325'))),
            array('title'=> 'Recherche dev Delphi', 'author' => 'Théo', 'content' => 'Nous recherchons un developpeur Delphi...','date' =>(new \DateTime('20170317'))),
            array('title'=> 'Recherche dev PLSQL', 'author' => 'Tia', 'content' => 'Nous recherchons un developpeur PLSQL...','date' =>(new \DateTime('20170317'))),
            array('title'=> 'Recherche dev .Net', 'author' => 'Mila', 'content' => 'Nous recherchons un developpeur .Net...','date' =>(new \DateTime('20170312'))),
            array('title'=> 'Recherche dev C++', 'author' => 'Paul', 'content' => 'Nous recherchons un developpeur C++...','date' =>(new \DateTime('20170312'))),
            array('title'=> 'Recherche dev HTML', 'author' => 'Clément', 'content' => 'Nous recherchons un developpeur HTML...','date' =>(new \DateTime('20170312'))),
            array('title'=> 'Recherche dev Front', 'author' => 'Clément', 'content' => 'Nous recherchons un developpeur Front...','date' =>(new \DateTime('20170313'))),
            array('title'=> 'Recherche dev FullStack', 'author' => 'Clément', 'content' => 'Nous recherchons un developpeur FullStack...','date' =>(new \DateTime('20170313')))
        );

        foreach($Listadverts as $item){
            $advert = new Advert();
            $advert->setTitle($item['title']);
            $advert->setAuthor($item['author']);
            $advert->setContent($item['content']);
            $advert->setDate($item['date']);

            $manager->persist($advert);
        }

        $manager->flush();
    }
}