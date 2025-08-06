<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDrecouvrementec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDrecouvrementec>
 *
 * @method FDrecouvrementec|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDrecouvrementec|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDrecouvrementec[]    findAll()
 * @method FDrecouvrementec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDrecouvrementecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDrecouvrementec::class);
    }

//    /**
//     * @return FDrecouvrementec[] Returns an array of FDrecouvrementec objects
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

//    public function findOneBySomeField($value): ?FDrecouvrementec
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
