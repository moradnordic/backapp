<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\Keys;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Keys>
 *
 * @method Keys|null find($id, $lockMode = null, $lockVersion = null)
 * @method Keys|null findOneBy(array $criteria, array $orderBy = null)
 * @method Keys[]    findAll()
 * @method Keys[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KeysRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Keys::class);
    }

//    /**
//     * @return Keys[] Returns an array of Keys objects
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

//    public function findOneBySomeField($value): ?Keys
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
