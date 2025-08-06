<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PReappro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PReappro>
 *
 * @method PReappro|null find($id, $lockMode = null, $lockVersion = null)
 * @method PReappro|null findOneBy(array $criteria, array $orderBy = null)
 * @method PReappro[]    findAll()
 * @method PReappro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PReapproRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PReappro::class);
    }

//    /**
//     * @return PReappro[] Returns an array of PReappro objects
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

//    public function findOneBySomeField($value): ?PReappro
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
