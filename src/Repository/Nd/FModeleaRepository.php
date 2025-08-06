<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FModelea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FModelea>
 *
 * @method FModelea|null find($id, $lockMode = null, $lockVersion = null)
 * @method FModelea|null findOneBy(array $criteria, array $orderBy = null)
 * @method FModelea[]    findAll()
 * @method FModelea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FModeleaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FModelea::class);
    }

//    /**
//     * @return FModelea[] Returns an array of FModelea objects
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

//    public function findOneBySomeField($value): ?FModelea
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
