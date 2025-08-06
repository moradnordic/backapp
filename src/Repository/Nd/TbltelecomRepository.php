<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tbltelecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltelecom>
 *
 * @method Tbltelecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltelecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltelecom[]    findAll()
 * @method Tbltelecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltelecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltelecom::class);
    }

//    /**
//     * @return Tbltelecom[] Returns an array of Tbltelecom objects
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

//    public function findOneBySomeField($value): ?Tbltelecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
