<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PAgendas;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PAgendas>
 *
 * @method PAgendas|null find($id, $lockMode = null, $lockVersion = null)
 * @method PAgendas|null findOneBy(array $criteria, array $orderBy = null)
 * @method PAgendas[]    findAll()
 * @method PAgendas[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PAgendasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PAgendas::class);
    }

//    /**
//     * @return PAgendas[] Returns an array of PAgendas objects
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

//    public function findOneBySomeField($value): ?PAgendas
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
