<?php

/**
 * Created by PhpStorm.
 * User: Punis_Port
 * Date: 28/03/2017
 * Time: 22:40
 */

namespace OC\PlatformBundle\Purger;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class Advert
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function purge($days)
    {
        $advertRepo = $this->em->getRepository("OCPlatformBundle:Advert");

        //Permet de calculer la date limite de suppression
        $date = new \DateTime();
        $date->modify('-'.$days.' days');

        //Récupère les annonces à supprimer
        $listAdverts = $advertRepo->getAdvertsAPurger($date);

        //Récupère le nombre d'annonces impactées afin de l'afficher dans le message flash
        $nbAdvertsAPurger = count($listAdverts);

        //Parcours la liste et supprime annonce/annonce
        foreach ($listAdverts as $advert)
        {
            $this->em->remove($advert);
        }

        $this->em->flush();

        return $nbAdvertsAPurger;
    }
}