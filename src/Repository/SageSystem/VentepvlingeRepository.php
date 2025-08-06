<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Ventepvlinge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ventepvlinge>
 *
 * @method Ventepvlinge|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ventepvlinge|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ventepvlinge[]    findAll()
 * @method Ventepvlinge[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentepvlingeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ventepvlinge::class);
    }

//    /**
//     * @return Ventepvlinge[] Returns an array of Ventepvlinge objects
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

//    public function findOneBySomeField($value): ?Ventepvlinge
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
