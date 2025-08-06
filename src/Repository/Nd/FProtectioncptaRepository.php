<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FProtectioncpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FProtectioncpta>
 *
 * @method FProtectioncpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FProtectioncpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FProtectioncpta[]    findAll()
 * @method FProtectioncpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FProtectioncptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FProtectioncpta::class);
    }

//    /**
//     * @return FProtectioncpta[] Returns an array of FProtectioncpta objects
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

//    public function findOneBySomeField($value): ?FProtectioncpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
