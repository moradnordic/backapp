<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Tblversementsbanquemarocaines;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tblversementsbanquemarocaines>
 *
 * @method Tblversementsbanquemarocaines|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tblversementsbanquemarocaines|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tblversementsbanquemarocaines[]    findAll()
 * @method Tblversementsbanquemarocaines[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TblversementsbanquemarocainesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tblversementsbanquemarocaines::class);
    }

//    /**
//     * @return Tblversementsbanquemarocaines[] Returns an array of Tblversementsbanquemarocaines objects
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

//    public function findOneBySomeField($value): ?Tblversementsbanquemarocaines
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
