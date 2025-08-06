<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PComptoir;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PComptoir>
 *
 * @method PComptoir|null find($id, $lockMode = null, $lockVersion = null)
 * @method PComptoir|null findOneBy(array $criteria, array $orderBy = null)
 * @method PComptoir[]    findAll()
 * @method PComptoir[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PComptoirRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PComptoir::class);
    }

//    /**
//     * @return PComptoir[] Returns an array of PComptoir objects
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

//    public function findOneBySomeField($value): ?PComptoir
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
