<?php

namespace App\DataFixtures;

use App\Entity\Records;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public $hasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher) {
        $this->hasher=$passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
         $admin = new User();
        $admin->setName('Admin');
        $admin->setEmail('admin@gmail.com');
         $hashPass = $this->hasher->hashPassword(
             $admin,
             'admin'
         );
        $admin->setPassword($hashPass);
        $admin->setHomePage('telegram');
        $admin->setStatus(1);
        $admin->setIpUser('192.168.123.132.');
        $admin->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');
        $admin->setBlocked(0);
        $admin->setCreated(time());
         $manager->persist($admin);



        $user1 = new User();
        $user1->setName('User1');
        $user1->setEmail('user1@gmail.com');
        $hashPass = $this->hasher->hashPassword(
            $user1,
            'user1'
        );
        $user1->setPassword($hashPass);
        $user1->setHomePage('telegram1');
        $user1->setStatus(0);
        $user1->setIpUser('192.168.123.132.');
        $user1->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');
        $user1->setBlocked(0);
        $user1->setCreated(time());
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('User2');
        $user2->setEmail('user2@gmail.com');
        $hashPass = $this->hasher->hashPassword(
            $user2,
            'user2'
        );
        $user2->setPassword($hashPass);
        $user2->setHomePage('telegram2');
        $user2->setStatus(0);
        $user2->setIpUser('192.168.123.132.');
        $user2->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');
        $user2->setBlocked(0);
        $user2->setCreated(time());
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('User3');
        $user3->setEmail('user3@gmail.com');
        $hashPass = $this->hasher->hashPassword(
            $user3,
            'user3'
        );
        $user3->setPassword($hashPass);
        $user3->setHomePage('telegram3');
        $user3->setStatus(0);
        $user3->setIpUser('192.168.123.132.');
        $user3->setUserAgent('Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36');
        $user3->setBlocked(1);
        $user3->setCreated(time());
        $manager->persist($user3);
        $manager->flush();

        $record = new Records();
        $record->setUser($admin);
        $record->setUserNameRecord($admin->getName());
        $record->setEmailRecord($admin->getEmail());
        $record->setHomePageRecord($admin->getHomePage());
        $record->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record->setImagePath('56755786.png');
        $record->setModeration(1);
        $record->setCreated(time());
        $manager->persist($record);

        $record6 = new Records();
        $record6->setUser($admin);
        $record6->setUserNameRecord($admin->getName());
        $record6->setEmailRecord($admin->getEmail());
        $record6->setHomePageRecord($admin->getHomePage());
        $record6->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record6->setImagePath('56755786.png');
        $record6->setModeration(1);
        $record6->setCreated(time());
        $manager->persist($record);

        $record1 = new Records();
        $record1->setUser($user1);
        $record1->setUserNameRecord($user1->getName());
        $record1->setEmailRecord($user1->getEmail());
        $record1->setHomePageRecord($user1->getHomePage());
        $record1->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record1->setImagePath('56755786.png');
        $record1->setModeration(1);
        $record1->setCreated(time());
        $manager->persist($record1);

        $record2 = new Records();
        $record2->setUser($user2);
        $record2->setUserNameRecord($user2->getName());
        $record2->setEmailRecord($user2->getEmail());
        $record2->setHomePageRecord($user2->getHomePage());
        $record2->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record2->setImagePath('56755786.png');
        $record2->setModeration(1);
        $record2->setCreated(time());
        $manager->persist($record2);

        $record3 = new Records();
        $record3->setUser($user3);
        $record3->setUserNameRecord($user3->getName());
        $record3->setEmailRecord($user3->getEmail());
        $record3->setHomePageRecord($user3->getHomePage());
        $record3->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record3->setImagePath('56755786.png');
        $record3->setModeration(1);
        $record3->setCreated(time());
        $manager->persist($record3);

        $record4 = new Records();
        $record4->setUser($user3);
        $record4->setUserNameRecord($user3->getName());
        $record4->setEmailRecord($user3->getEmail());
        $record4->setHomePageRecord($user3->getHomePage());
        $record4->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record4->setImagePath('56755786.png');
        $record4->setModeration(1);
        $record4->setCreated(time());
        $manager->persist($record4);

        $record5 = new Records();
        $record5->setUser($user3);
        $record5->setUserNameRecord($user3->getName());
        $record5->setEmailRecord($user3->getEmail());
        $record5->setHomePageRecord($user3->getHomePage());
        $record5->setText('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam consequuntur debitis deserunt dolorum est et excepturi, ipsa iure perferendis quas qui quia quibusdam tempore unde vel vitae voluptatem?');
        $record5->setImagePath('56755786.png');
        $record5->setModeration(1);
        $record5->setCreated(time());
        $manager->persist($record5);



        $manager->flush();
    }
}
