<?php

namespace App\Repository;

use App\Entity\PARTENAIRES;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PARTENAIRES>
 *
 * @method PARTENAIRES|null find($id, $lockMode = null, $lockVersion = null)
 * @method PARTENAIRES|null findOneBy(array $criteria, array $orderBy = null)
 * @method PARTENAIRES[]    findAll()
 * @method PARTENAIRES[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PARTENAIRESRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PARTENAIRES::class);
    }

    public function save(PARTENAIRES $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PARTENAIRES $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return PARTENAIRES[] Returns an array of PARTENAIRES objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?PARTENAIRES
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
