<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\FArtgloss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FArtgloss>
 *
 * @method FArtgloss|null find($id, $lockMode = null, $lockVersion = null)
 * @method FArtgloss|null findOneBy(array $criteria, array $orderBy = null)
 * @method FArtgloss[]    findAll()
 * @method FArtgloss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FArtglossRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FArtgloss::class);
    }

//    /**
//     * @return FArtgloss[] Returns an array of FArtgloss objects
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

//    public function findOneBySomeField($value): ?FArtgloss
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
