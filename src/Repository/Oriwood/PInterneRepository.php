<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PInterne;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterne>
 *
 * @method PInterne|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterne|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterne[]    findAll()
 * @method PInterne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterne::class);
    }

//    /**
//     * @return PInterne[] Returns an array of PInterne objects
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

//    public function findOneBySomeField($value): ?PInterne
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
