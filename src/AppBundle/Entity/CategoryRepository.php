<?php

namespace AppBundle\Entity;

use Doctrine\ORM\AbstractQuery;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\Expr as Expr;
use Symfony\Component\Config\Definition\Builder\ExprBuilder;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends EntityRepository
{
    public function findCatchThemAll($id = null)
    {
        $qb = $this->createQueryBuilder('c');

        if (null !== $id) {
            $qb
                ->where('c.id = :id')
                ->setParameters([
                    ':id' => $id,
                ]);
        }


        $qb->orderBy('c.id', 'DESC');

        return null === $id
            ? $qb->getQuery()->getArrayResult()
            : $qb->getQuery()->getSingleResult(AbstractQuery::HYDRATE_ARRAY)
            ;
    }


}
