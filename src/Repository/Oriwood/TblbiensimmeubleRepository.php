<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tblbiensimmeuble;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblbiensimmeuble>
 *
 * @method Tblbiensimmeuble|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblbiensimmeuble|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblbiensimmeuble[]    findAll()
 * @method Tblbiensimmeuble[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblbiensimmeubleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblbiensimmeuble::class);
    }

//    /**
//     * @return Tblbiensimmeuble[] Returns an array of Tblbiensimmeuble objects
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

//    public function findOneBySomeField($value): ?Tblbiensimmeuble
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
