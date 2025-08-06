<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FMandat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FMandat>
 *
 * @method FMandat|null find($id, $lockMode = null, $lockVersion = null)
 * @method FMandat|null findOneBy(array $criteria, array $orderBy = null)
 * @method FMandat[]    findAll()
 * @method FMandat[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FMandatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FMandat::class);
    }

//    /**
//     * @return FMandat[] Returns an array of FMandat objects
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

//    public function findOneBySomeField($value): ?FMandat
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
