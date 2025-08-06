<?php

namespace App\Repository\Nd;

use App\Entity\Nd\PDossier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PDossier>
 *
 * @method PDossier|null find($id, $lockMode = null, $lockVersion = null)
 * @method PDossier|null findOneBy(array $criteria, array $orderBy = null)
 * @method PDossier[]    findAll()
 * @method PDossier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PDossierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PDossier::class);
    }

//    /**
//     * @return PDossier[] Returns an array of PDossier objects
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

//    public function findOneBySomeField($value): ?PDossier
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
