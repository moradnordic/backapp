<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\POrgaach;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<POrgaach>
 *
 * @method POrgaach|null find($id, $lockMode = null, $lockVersion = null)
 * @method POrgaach|null findOneBy(array $criteria, array $orderBy = null)
 * @method POrgaach[]    findAll()
 * @method POrgaach[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class POrgaachRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, POrgaach::class);
    }

//    /**
//     * @return POrgaach[] Returns an array of POrgaach objects
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

//    public function findOneBySomeField($value): ?POrgaach
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
