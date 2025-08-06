<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PAbocli;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAbocli>
 *
 * @method PAbocli|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAbocli|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAbocli[]    findAll()
 * @method PAbocli[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAbocliRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAbocli::class);
    }

//    /**
//     * @return PAbocli[] Returns an array of PAbocli objects
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

//    public function findOneBySomeField($value): ?PAbocli
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
