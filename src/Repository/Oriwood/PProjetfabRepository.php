<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PProjetfab;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PProjetfab>
 *
 * @method PProjetfab|null find($id, $lockMode = null, $lockVersion = null)
 * @method PProjetfab|null findOneBy(array $criteria, array $orderBy = null)
 * @method PProjetfab[]    findAll()
 * @method PProjetfab[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PProjetfabRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PProjetfab::class);
    }

//    /**
//     * @return PProjetfab[] Returns an array of PProjetfab objects
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

//    public function findOneBySomeField($value): ?PProjetfab
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
