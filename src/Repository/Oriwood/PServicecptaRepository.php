<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PServicecpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PServicecpta>
 *
 * @method PServicecpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PServicecpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PServicecpta[]    findAll()
 * @method PServicecpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PServicecptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PServicecpta::class);
    }

//    /**
//     * @return PServicecpta[] Returns an array of PServicecpta objects
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

//    public function findOneBySomeField($value): ?PServicecpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
