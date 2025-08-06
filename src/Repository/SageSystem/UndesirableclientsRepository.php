<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Undesirableclients;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Undesirableclients>
 *
 * @method Undesirableclients|null find($id, $lockMode = null, $lockVersion = null)
 * @method Undesirableclients|null findOneBy(array $criteria, array $orderBy = null)
 * @method Undesirableclients[]    findAll()
 * @method Undesirableclients[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UndesirableclientsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Undesirableclients::class);
    }

//    /**
//     * @return Undesirableclients[] Returns an array of Undesirableclients objects
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

//    public function findOneBySomeField($value): ?Undesirableclients
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
