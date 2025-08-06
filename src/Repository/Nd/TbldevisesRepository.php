<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tbldevises;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbldevises>
 *
 * @method Tbldevises|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbldevises|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbldevises[]    findAll()
 * @method Tbldevises[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbldevisesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbldevises::class);
    }

//    /**
//     * @return Tbldevises[] Returns an array of Tbldevises objects
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

//    public function findOneBySomeField($value): ?Tbldevises
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
