<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PResiliation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PResiliation>
 *
 * @method PResiliation|null find($id, $lockMode = null, $lockVersion = null)
 * @method PResiliation|null findOneBy(array $criteria, array $orderBy = null)
 * @method PResiliation[]    findAll()
 * @method PResiliation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PResiliationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PResiliation::class);
    }

//    /**
//     * @return PResiliation[] Returns an array of PResiliation objects
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

//    public function findOneBySomeField($value): ?PResiliation
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
