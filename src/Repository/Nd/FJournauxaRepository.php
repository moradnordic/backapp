<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FJournauxa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FJournauxa>
 *
 * @method FJournauxa|null find($id, $lockMode = null, $lockVersion = null)
 * @method FJournauxa|null findOneBy(array $criteria, array $orderBy = null)
 * @method FJournauxa[]    findAll()
 * @method FJournauxa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FJournauxaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FJournauxa::class);
    }

//    /**
//     * @return FJournauxa[] Returns an array of FJournauxa objects
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

//    public function findOneBySomeField($value): ?FJournauxa
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
