<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FComptegnote;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptegnote>
 *
 * @method FComptegnote|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptegnote|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptegnote[]    findAll()
 * @method FComptegnote[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptegnoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptegnote::class);
    }

//    /**
//     * @return FComptegnote[] Returns an array of FComptegnote objects
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

//    public function findOneBySomeField($value): ?FComptegnote
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
