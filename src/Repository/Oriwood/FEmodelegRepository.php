<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FEmodeleg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEmodeleg>
 *
 * @method FEmodeleg|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEmodeleg|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEmodeleg[]    findAll()
 * @method FEmodeleg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEmodelegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEmodeleg::class);
    }

//    /**
//     * @return FEmodeleg[] Returns an array of FEmodeleg objects
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

//    public function findOneBySomeField($value): ?FEmodeleg
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
