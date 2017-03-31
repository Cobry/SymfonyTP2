<?php
/**
 * Created by PhpStorm.
 * User: Punis_Port
 * Date: 28/03/2017
 * Time: 21:52
 */

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Application;

class LoadApplication implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $listApplications = array(
            array('author' => 'Toto', 'content' => 'Ma super candidature'),
            array('author' => 'Titi', 'content' => 'Ma super candidature'),
            array('author' => 'Tata', 'content' => 'Ma super candidature'),
            array('author' => 'Tutu', 'content' => 'Ma super candidature'),
        );

        // TODO: Implement load() method.
        $adverts = $manager->getRepository("OCPlatformBundle:Advert");

        $top5Adverts = $adverts->findBy(
            array(),
            array(),
            5,
            0
        );

        foreach ($top5Adverts as $advert){
            foreach ($listApplications as $appli){
                $application = new Application();
                $application->setAuthor($appli['author']);
                $application->setContent($appli['content']);
                $application->setAdvert($advert);
                $manager->persist($application);
            }
        }

        $manager->flush();
    }
}