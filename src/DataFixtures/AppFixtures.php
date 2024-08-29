<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Auteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $auteur = new Auteur();
            $auteur->setNom($faker->lastName)
                ->setPrénom ($faker->firstName)
                ->setDateDeNaissance($faker->dateTimeBetween('-70 years', '-30 years'))
                ->setDateDeCréation(new \DateTime())
                ->setDateDeModification(new \DateTime());

            $manager->persist($auteur);
        }
        $plainPassword = '123456';

        // Create 10 users
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setEmail('user' . $i . '@example.com');
            $user->setRoles(['ROLE_USER']);

            // Encode the common password
            $hashedPassword = $this->passwordHasher->hashPassword(
                $user,
                $plainPassword
            );
            $user->setPassword($hashedPassword);

            // Persist the user
            $manager->persist($user);
        }

        $manager->flush();
    }
}
