<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEmodelea;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEmodelea>
 *
 * @method FEmodelea|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEmodelea|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEmodelea[]    findAll()
 * @method FEmodelea[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEmodeleaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEmodelea::class);
    }

//    /**
//     * @return FEmodelea[] Returns an array of FEmodelea objects
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

//    public function findOneBySomeField($value): ?FEmodelea
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
