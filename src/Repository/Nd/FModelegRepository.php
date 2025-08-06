<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FModeleg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FModeleg>
 *
 * @method FModeleg|null find($id, $lockMode = null, $lockVersion = null)
 * @method FModeleg|null findOneBy(array $criteria, array $orderBy = null)
 * @method FModeleg[]    findAll()
 * @method FModeleg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FModelegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FModeleg::class);
    }

//    /**
//     * @return FModeleg[] Returns an array of FModeleg objects
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

//    public function findOneBySomeField($value): ?FModeleg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
