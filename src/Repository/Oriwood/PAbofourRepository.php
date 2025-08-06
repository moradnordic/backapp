<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PAbofour;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAbofour>
 *
 * @method PAbofour|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAbofour|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAbofour[]    findAll()
 * @method PAbofour[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAbofourRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAbofour::class);
    }

//    /**
//     * @return PAbofour[] Returns an array of PAbofour objects
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

//    public function findOneBySomeField($value): ?PAbofour
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
