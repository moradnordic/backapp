<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FEextrait;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FEextrait>
 *
 * @method FEextrait|null find($id, $lockMode = null, $lockVersion = null)
 * @method FEextrait|null findOneBy(array $criteria, array $orderBy = null)
 * @method FEextrait[]    findAll()
 * @method FEextrait[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FEextraitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FEextrait::class);
    }

//    /**
//     * @return FEextrait[] Returns an array of FEextrait objects
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

//    public function findOneBySomeField($value): ?FEextrait
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
