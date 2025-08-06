<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FDoccurrentpiece;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FDoccurrentpiece>
 *
 * @method FDoccurrentpiece|null find($id, $lockMode = null, $lockVersion = null)
 * @method FDoccurrentpiece|null findOneBy(array $criteria, array $orderBy = null)
 * @method FDoccurrentpiece[]    findAll()
 * @method FDoccurrentpiece[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FDoccurrentpieceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FDoccurrentpiece::class);
    }

//    /**
//     * @return FDoccurrentpiece[] Returns an array of FDoccurrentpiece objects
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

//    public function findOneBySomeField($value): ?FDoccurrentpiece
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
