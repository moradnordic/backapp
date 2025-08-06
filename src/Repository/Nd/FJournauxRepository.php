<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FJournaux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FJournaux>
 *
 * @method FJournaux|null find($id, $lockMode = null, $lockVersion = null)
 * @method FJournaux|null findOneBy(array $criteria, array $orderBy = null)
 * @method FJournaux[]    findAll()
 * @method FJournaux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FJournauxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FJournaux::class);
    }

//    /**
//     * @return FJournaux[] Returns an array of FJournaux objects
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

//    public function findOneBySomeField($value): ?FJournaux
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
