<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PRecouvrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRecouvrement>
 *
 * @method PRecouvrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRecouvrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRecouvrement[]    findAll()
 * @method PRecouvrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRecouvrementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRecouvrement::class);
    }

//    /**
//     * @return PRecouvrement[] Returns an array of PRecouvrement objects
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

//    public function findOneBySomeField($value): ?PRecouvrement
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
