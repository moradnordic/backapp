<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PRechlig;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRechlig>
 *
 * @method PRechlig|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRechlig|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRechlig[]    findAll()
 * @method PRechlig[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRechligRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRechlig::class);
    }

//    /**
//     * @return PRechlig[] Returns an array of PRechlig objects
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

//    public function findOneBySomeField($value): ?PRechlig
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
