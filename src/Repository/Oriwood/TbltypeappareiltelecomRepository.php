<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tbltypeappareiltelecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltypeappareiltelecom>
 *
 * @method Tbltypeappareiltelecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltypeappareiltelecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltypeappareiltelecom[]    findAll()
 * @method Tbltypeappareiltelecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltypeappareiltelecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltypeappareiltelecom::class);
    }

//    /**
//     * @return Tbltypeappareiltelecom[] Returns an array of Tbltypeappareiltelecom objects
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

//    public function findOneBySomeField($value): ?Tbltypeappareiltelecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
