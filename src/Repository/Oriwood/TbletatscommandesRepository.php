<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tbletatscommandes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbletatscommandes>
 *
 * @method Tbletatscommandes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbletatscommandes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbletatscommandes[]    findAll()
 * @method Tbletatscommandes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbletatscommandesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbletatscommandes::class);
    }

//    /**
//     * @return Tbletatscommandes[] Returns an array of Tbletatscommandes objects
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

//    public function findOneBySomeField($value): ?Tbletatscommandes
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
