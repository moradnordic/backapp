<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PInterrosto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PInterrosto>
 *
 * @method PInterrosto|null find($id, $lockMode = null, $lockVersion = null)
 * @method PInterrosto|null findOneBy(array $criteria, array $orderBy = null)
 * @method PInterrosto[]    findAll()
 * @method PInterrosto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PInterrostoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PInterrosto::class);
    }

//    /**
//     * @return PInterrosto[] Returns an array of PInterrosto objects
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

//    public function findOneBySomeField($value): ?PInterrosto
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
