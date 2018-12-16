<?php

namespace App\Repository;

use App\Entity\Liens;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Liens|null find($id, $lockMode = null, $lockVersion = null)
 * @method Liens|null findOneBy(array $criteria, array $orderBy = null)
 * @method Liens[]    findAll()
 * @method Liens[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LiensRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Liens::class);
    }



    /**
     * @param string|null $rawQuery
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findByTitle($rawQuery)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.titre LIKE :val')
            ->setParameter('val', '%'.$rawQuery.'%')
            ->orderBy('l.id', 'DESC')

        ;

    }

    // /**
    //  * @return Liens[] Returns an array of Liens objects
    //  */
    public function findByDesc($rawQuery)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.Description LIKE :val')
            ->setParameter('val', '%'.$rawQuery.'%')
            ->orderBy('l.id', 'DESC')
            ;

    }

    /**
     * @param string|null $rawQuery
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function findByTag($rawQuery)
    {
        return $this->createQueryBuilder('l')
        ->andWhere('l.TAGS LIKE :val')
            ->setParameter('val', '%'.$rawQuery.'%')
            ->orderBy('l.id', 'DESC')

            ;

    }

    /*
    public function findOneBySomeField($value): ?Liens
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
