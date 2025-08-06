<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PTiers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PTiers>
 *
 * @method PTiers|null find($id, $lockMode = null, $lockVersion = null)
 * @method PTiers|null findOneBy(array $criteria, array $orderBy = null)
 * @method PTiers[]    findAll()
 * @method PTiers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PTiersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PTiers::class);
    }

//    /**
//     * @return PTiers[] Returns an array of PTiers objects
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

//    public function findOneBySomeField($value): ?PTiers
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
