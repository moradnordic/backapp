<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FFamcompta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FFamcompta>
 *
 * @method FFamcompta|null find($id, $lockMode = null, $lockVersion = null)
 * @method FFamcompta|null findOneBy(array $criteria, array $orderBy = null)
 * @method FFamcompta[]    findAll()
 * @method FFamcompta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FFamcomptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FFamcompta::class);
    }

//    /**
//     * @return FFamcompta[] Returns an array of FFamcompta objects
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

//    public function findOneBySomeField($value): ?FFamcompta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
