<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblnosbanques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblnosbanques>
 *
 * @method Tblnosbanques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblnosbanques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblnosbanques[]    findAll()
 * @method Tblnosbanques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblnosbanquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblnosbanques::class);
    }

//    /**
//     * @return Tblnosbanques[] Returns an array of Tblnosbanques objects
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

//    public function findOneBySomeField($value): ?Tblnosbanques
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
