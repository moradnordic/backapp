<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tbltypecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltypecom>
 *
 * @method Tbltypecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltypecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltypecom[]    findAll()
 * @method Tbltypecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltypecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltypecom::class);
    }

//    /**
//     * @return Tbltypecom[] Returns an array of Tbltypecom objects
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

//    public function findOneBySomeField($value): ?Tbltypecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
