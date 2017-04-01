<?php
/**
 * Created by PhpStorm.
 * User: Punis_Port
 * Date: 01/04/2017
 * Time: 15:01
 */

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CategoryRepository extends EntityRepository
{
    public function getLikeQueryBuilder($pattern){
        return $this
            ->createQueryBuilder('c')
            ->where('c.name LIKE :pattern')
            ->setParameter('pattern', $pattern)
        ;
    }
}