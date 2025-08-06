<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FBilletpiece;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FBilletpiece>
 *
 * @method FBilletpiece|null find($id, $lockMode = null, $lockVersion = null)
 * @method FBilletpiece|null findOneBy(array $criteria, array $orderBy = null)
 * @method FBilletpiece[]    findAll()
 * @method FBilletpiece[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FBilletpieceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FBilletpiece::class);
    }

//    /**
//     * @return FBilletpiece[] Returns an array of FBilletpiece objects
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

//    public function findOneBySomeField($value): ?FBilletpiece
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
