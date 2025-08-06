<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PFiltrerev;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PFiltrerev>
 *
 * @method PFiltrerev|null find($id, $lockMode = null, $lockVersion = null)
 * @method PFiltrerev|null findOneBy(array $criteria, array $orderBy = null)
 * @method PFiltrerev[]    findAll()
 * @method PFiltrerev[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PFiltrerevRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PFiltrerev::class);
    }

//    /**
//     * @return PFiltrerev[] Returns an array of PFiltrerev objects
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

//    public function findOneBySomeField($value): ?PFiltrerev
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
