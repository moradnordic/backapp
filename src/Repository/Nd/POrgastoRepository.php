<?php

namespace App\Repository\Nd;

use App\Entity\Nd\POrgasto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POrgasto>
 *
 * @method POrgasto|null find($id, $lockMode = null, $lockVersion = null)
 * @method POrgasto|null findOneBy(array $criteria, array $orderBy = null)
 * @method POrgasto[]    findAll()
 * @method POrgasto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POrgastoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POrgasto::class);
    }

//    /**
//     * @return POrgasto[] Returns an array of POrgasto objects
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

//    public function findOneBySomeField($value): ?POrgasto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
