<?php

namespace App\Repository\Oriwood;

use App\Entity\oriwood\PContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PContact>
 *
 * @method PContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method PContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method PContact[]    findAll()
 * @method PContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PContactRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PContact::class);
    }

//    /**
//     * @return PContact[] Returns an array of PContact objects
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

//    public function findOneBySomeField($value): ?PContact
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
