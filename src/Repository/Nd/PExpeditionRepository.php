<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PExpedition;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PExpedition>
 *
 * @method PExpedition|null find($id, $lockMode = null, $lockVersion = null)
 * @method PExpedition|null findOneBy(array $criteria, array $orderBy = null)
 * @method PExpedition[]    findAll()
 * @method PExpedition[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PExpeditionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PExpedition::class);
    }

//    /**
//     * @return PExpedition[] Returns an array of PExpedition objects
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

//    public function findOneBySomeField($value): ?PExpedition
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
