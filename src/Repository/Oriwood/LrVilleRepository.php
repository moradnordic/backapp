<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\LrVille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LrVille>
 *
 * @method LrVille|null find($id, $lockMode = null, $lockVersion = null)
 * @method LrVille|null findOneBy(array $criteria, array $orderBy = null)
 * @method LrVille[]    findAll()
 * @method LrVille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LrVilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LrVille::class);
    }

//    /**
//     * @return LrVille[] Returns an array of LrVille objects
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

//    public function findOneBySomeField($value): ?LrVille
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
