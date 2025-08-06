<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PColreglement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PColreglement>
 *
 * @method PColreglement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PColreglement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PColreglement[]    findAll()
 * @method PColreglement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PColreglementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PColreglement::class);
    }

//    /**
//     * @return PColreglement[] Returns an array of PColreglement objects
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

//    public function findOneBySomeField($value): ?PColreglement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
