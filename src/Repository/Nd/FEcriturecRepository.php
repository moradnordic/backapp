<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEcriturec;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEcriturec>
 *
 * @method FEcriturec|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEcriturec|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEcriturec[]    findAll()
 * @method FEcriturec[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEcriturecRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEcriturec::class);
    }

//    /**
//     * @return FEcriturec[] Returns an array of FEcriturec objects
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

//    public function findOneBySomeField($value): ?FEcriturec
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
