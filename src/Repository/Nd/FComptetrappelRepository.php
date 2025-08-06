<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FComptetrappel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FComptetrappel>
 *
 * @method FComptetrappel|null find($id, $lockMode = null, $lockVersion = null)
 * @method FComptetrappel|null findOneBy(array $criteria, array $orderBy = null)
 * @method FComptetrappel[]    findAll()
 * @method FComptetrappel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FComptetrappelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FComptetrappel::class);
    }

//    /**
//     * @return FComptetrappel[] Returns an array of FComptetrappel objects
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

//    public function findOneBySomeField($value): ?FComptetrappel
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
