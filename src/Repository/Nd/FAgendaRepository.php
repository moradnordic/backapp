<?php

namespace App\Repository\Nd;

use App\Entity\Nd\FAgenda;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<FAgenda>
 *
 * @method FAgenda|null find($id, $lockMode = null, $lockVersion = null)
 * @method FAgenda|null findOneBy(array $criteria, array $orderBy = null)
 * @method FAgenda[]    findAll()
 * @method FAgenda[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FAgendaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FAgenda::class);
    }

//    /**
//     * @return FAgenda[] Returns an array of FAgenda objects
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

//    public function findOneBySomeField($value): ?FAgenda
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
