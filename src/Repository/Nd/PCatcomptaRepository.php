<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PCatcompta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PCatcompta>
 *
 * @method PCatcompta|null find($id, $lockMode = null, $lockVersion = null)
 * @method PCatcompta|null findOneBy(array $criteria, array $orderBy = null)
 * @method PCatcompta[]    findAll()
 * @method PCatcompta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PCatcomptaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PCatcompta::class);
    }

//    /**
//     * @return PCatcompta[] Returns an array of PCatcompta objects
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

//    public function findOneBySomeField($value): ?PCatcompta
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
