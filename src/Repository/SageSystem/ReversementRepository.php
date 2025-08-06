<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\Reversement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reversement>
 *
 * @method Reversement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reversement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reversement[]    findAll()
 * @method Reversement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReversementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reversement::class);
    }

//    /**
//     * @return Reversement[] Returns an array of Reversement objects
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

//    public function findOneBySomeField($value): ?Reversement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
