<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblappareiltelecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblappareiltelecom>
 *
 * @method Tblappareiltelecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblappareiltelecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblappareiltelecom[]    findAll()
 * @method Tblappareiltelecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblappareiltelecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblappareiltelecom::class);
    }

//    /**
//     * @return Tblappareiltelecom[] Returns an array of Tblappareiltelecom objects
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

//    public function findOneBySomeField($value): ?Tblappareiltelecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
