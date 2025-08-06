<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FFamille;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFamille>
 *
 * @method FFamille|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFamille|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFamille[]    findAll()
 * @method FFamille[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFamilleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFamille::class);
    }

//    /**
//     * @return FFamille[] Returns an array of FFamille objects
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

//    public function findOneBySomeField($value): ?FFamille
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
