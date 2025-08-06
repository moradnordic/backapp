<?php

namespace App\Repository\Nd;

use App\Entity\Nd\Nosbanques;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Nosbanques>
 *
 * @method Nosbanques|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nosbanques|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nosbanques[]    findAll()
 * @method Nosbanques[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NosbanquesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nosbanques::class);
    }

//    /**
//     * @return Nosbanques[] Returns an array of Nosbanques objects
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

//    public function findOneBySomeField($value): ?Nosbanques
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
