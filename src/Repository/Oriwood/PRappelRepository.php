<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PRappel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PRappel>
 *
 * @method PRappel|null find($id, $lockMode = null, $lockVersion = null)
 * @method PRappel|null findOneBy(array $criteria, array $orderBy = null)
 * @method PRappel[]    findAll()
 * @method PRappel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PRappelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PRappel::class);
    }

//    /**
//     * @return PRappel[] Returns an array of PRappel objects
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

//    public function findOneBySomeField($value): ?PRappel
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
