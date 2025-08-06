<?php

namespace App\Repository\SageSystem;

use App\Entity\SageSystem\PlCariste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PlCariste>
 *
 * @method PlCariste|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlCariste|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlCariste[]    findAll()
 * @method PlCariste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlCaristeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlCariste::class);
    }

//    /**
//     * @return PlCariste[] Returns an array of PlCariste objects
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

//    public function findOneBySomeField($value): ?PlCariste
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
