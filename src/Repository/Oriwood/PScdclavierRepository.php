<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PScdclavier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PScdclavier>
 *
 * @method PScdclavier|null find($id, $lockMode = null, $lockVersion = null)
 * @method PScdclavier|null findOneBy(array $criteria, array $orderBy = null)
 * @method PScdclavier[]    findAll()
 * @method PScdclavier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PScdclavierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PScdclavier::class);
    }

//    /**
//     * @return PScdclavier[] Returns an array of PScdclavier objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PScdclavier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
