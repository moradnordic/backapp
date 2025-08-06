<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Tbltypeassurances;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tbltypeassurances>
 *
 * @method Tbltypeassurances|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tbltypeassurances|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tbltypeassurances[]    findAll()
 * @method Tbltypeassurances[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TbltypeassurancesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tbltypeassurances::class);
    }

//    /**
//     * @return Tbltypeassurances[] Returns an array of Tbltypeassurances objects
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

//    public function findOneBySomeField($value): ?Tbltypeassurances
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
