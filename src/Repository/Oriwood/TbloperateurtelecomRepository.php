<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tbloperateurtelecom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbloperateurtelecom>
 *
 * @method Tbloperateurtelecom|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbloperateurtelecom|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbloperateurtelecom[]    findAll()
 * @method Tbloperateurtelecom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbloperateurtelecomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbloperateurtelecom::class);
    }

//    /**
//     * @return Tbloperateurtelecom[] Returns an array of Tbloperateurtelecom objects
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

//    public function findOneBySomeField($value): ?Tbloperateurtelecom
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
