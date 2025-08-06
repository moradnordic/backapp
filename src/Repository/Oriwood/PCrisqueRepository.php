<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PCrisque;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCrisque>
 *
 * @method PCrisque|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCrisque|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCrisque[]    findAll()
 * @method PCrisque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCrisqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCrisque::class);
    }

//    /**
//     * @return PCrisque[] Returns an array of PCrisque objects
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

//    public function findOneBySomeField($value): ?PCrisque
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
