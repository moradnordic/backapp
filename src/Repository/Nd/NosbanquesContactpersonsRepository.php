<?php

namespace App\Repository\Nd;

use App\Entity\Nd\NosbanquesContactpersons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NosbanquesContactpersons>
 *
 * @method NosbanquesContactpersons|null find($id, $lockMode = null, $lockVersion = null)
 * @method NosbanquesContactpersons|null findOneBy(array $criteria, array $orderBy = null)
 * @method NosbanquesContactpersons[]    findAll()
 * @method NosbanquesContactpersons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NosbanquesContactpersonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NosbanquesContactpersons::class);
    }

//    /**
//     * @return NosbanquesContactpersons[] Returns an array of NosbanquesContactpersons objects
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

//    public function findOneBySomeField($value): ?NosbanquesContactpersons
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
