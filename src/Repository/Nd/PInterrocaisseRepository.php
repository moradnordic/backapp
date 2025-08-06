<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PInterrocaisse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrocaisse>
 *
 * @method PInterrocaisse|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrocaisse|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrocaisse[]    findAll()
 * @method PInterrocaisse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrocaisseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrocaisse::class);
    }

//    /**
//     * @return PInterrocaisse[] Returns an array of PInterrocaisse objects
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

//    public function findOneBySomeField($value): ?PInterrocaisse
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
