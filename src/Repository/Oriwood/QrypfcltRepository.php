<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Qrypfclt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Qrypfclt>
 *
 * @method Qrypfclt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Qrypfclt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Qrypfclt[]    findAll()
 * @method Qrypfclt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QrypfcltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Qrypfclt::class);
    }

//    /**
//     * @return Qrypfclt[] Returns an array of Qrypfclt objects
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

//    public function findOneBySomeField($value): ?Qrypfclt
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
