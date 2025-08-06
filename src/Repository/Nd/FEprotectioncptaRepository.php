<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEprotectioncpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEprotectioncpta>
 *
 * @method FEprotectioncpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEprotectioncpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEprotectioncpta[]    findAll()
 * @method FEprotectioncpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEprotectioncptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEprotectioncpta::class);
    }

//    /**
//     * @return FEprotectioncpta[] Returns an array of FEprotectioncpta objects
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

//    public function findOneBySomeField($value): ?FEprotectioncpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
