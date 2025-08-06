<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblprestatairesext;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblprestatairesext>
 *
 * @method Tblprestatairesext|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblprestatairesext|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblprestatairesext[]    findAll()
 * @method Tblprestatairesext[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblprestatairesextRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblprestatairesext::class);
    }

//    /**
//     * @return Tblprestatairesext[] Returns an array of Tblprestatairesext objects
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

//    public function findOneBySomeField($value): ?Tblprestatairesext
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
