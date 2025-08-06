<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FDocregl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDocregl>
 *
 * @method FDocregl|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDocregl|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDocregl[]    findAll()
 * @method FDocregl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDocreglRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDocregl::class);
    }

//    /**
//     * @return FDocregl[] Returns an array of FDocregl objects
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

//    public function findOneBySomeField($value): ?FDocregl
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
