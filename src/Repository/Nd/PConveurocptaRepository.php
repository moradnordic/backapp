<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PConveurocpta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PConveurocpta>
 *
 * @method PConveurocpta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PConveurocpta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PConveurocpta[]    findAll()
 * @method PConveurocpta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PConveurocptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PConveurocpta::class);
    }

//    /**
//     * @return PConveurocpta[] Returns an array of PConveurocpta objects
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

//    public function findOneBySomeField($value): ?PConveurocpta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
