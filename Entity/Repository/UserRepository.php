<?php
/**
 * Created by PhpStorm.
 * User: krucso
 * Date: 2014.05.13.
 * Time: 8:14
 */

//namespace Entity\Repository;
namespace krucsoati\TestBundle\Entity\Repository;

use Gedmo\Tree\Entity\Repository\NestedTreeRepository;
use Doctrine\ORM\EntityRepository;

class UserRepository extends NestedTreeRepository
{

}