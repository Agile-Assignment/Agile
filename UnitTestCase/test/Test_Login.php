<?php
use App\Testing;
use PHPUnit\Framework\TestCase;
    
    class Test_Login extends TestCase
    
    {
        protected $user;
    
        protected function setUp(): void
        {
            $this->user = new Testing();
        }
    
        protected function tearDown(): void
        {
            unset($this->user);
        }
    
        // test pass if all data is returned correctly for mockUsers
        public function test_MockUsers_Are_Returned()
        {
            $mockUsers = $this->createMock(Testing::class);
            $mockUsersArray=[
                    [
                    'Username' => 'user1', 
                    'Email' => 'user@gmail.com', 
                    'Password' => 'p455w0rd'
                    ],

                    [
                    'Username' => 'user2', 
                    'Email' => 'user@gmail.com', 
                    'Password' => 'p455w0rd'
                    ],

                    [
                    'Username' => 'user3', 
                    'Email' => 'user@gmail.com', 
                    'Password' => 'p455w0rd'
                    ],     
            ];



            $mockUsers ->method('fetchUsers')->willReturn($mockUsersArray);
            $users = $mockUsers->fetchUsers();
            $this->assertEquals('user1', $users[0]['Username']);
            $this->assertEquals('user2', $users[1]['Username']);
            $this->assertEquals('user3', $users[2]['Username']);
        }
    
        // test pass if all data is returned correctly for mockUser1
        public function test_MockUser1_Returned()
        {
            $mockUser = $this->createMock(Testing::class);
            $mockUser1Array=[
                ['Username' => 'user1',
                'Email' => 'user@gmail.com',
                'Password' => 'p455w0rd'
                ],
                ];
            $mockUser ->method('fetchUser1')->willReturn($mockUser1Array);
            $users1 = $mockUser->fetchUser1();
            $this->assertEquals('user1', $users1[0]['Username']);
            $this->assertEquals('user@gmail.com', $users1[0]['Email']);
            $this->assertEquals('p455w0rd', $users1[0]['Password']);
        }
    
        //test pass if user is an array
        public function test_Validate_User_Is_Array()
        {
            $result = $this->user->validateUserIsArray();
            $this->assertTrue($result);
        }
    
        // test pass if user array has key of as listed
        public function test_Validate_User_Has_All_Keys()
        {
            $result = $this->user->validateUserKey();
            $this->assertArrayHasKey('Username', $result);
            $this->assertArrayHasKey('Email', $result);
            $this->assertArrayHasKey('Password', $result);
        }
    
    
        // test pass if verified user logs in
        public function test_loginUser_Verified_User()
        {
            $mockUser = $this->createMock(Testing::class);
            $mockUserArray=[
                ['Username' => 'user1', 
                'Email' => 'user@gmail.com',
                'Password' => 'p455w0rd'
                ],
            ];
    
            $mockUser ->expects($this->exactly(1)) ->method('loginUser')->willReturn($mockUserArray);
            $User = $mockUser->loginUser(
                'user1',
                'p455w0rd',
            );
    
            $this->assertEquals('user1', $User[0]['Username']);
            $this->assertEquals('p455w0rd', $User[0]['Password']);
        }
        
        // deliberately fail test as user inputs wrong username for login
        public function testFail_loginUser_Wrong_Username()
        {
            $mockUser = $this->createMock(Testing::class);
            $mockUserArray=[
                ['Username' => 'random', 
                'Email' => 'user@gmail.com',
                'Password' => 'p455w0rd' 
                ],
            ];
    
            $mockUser ->expects($this->exactly(1)) ->method('loginUser')->willReturn($mockUserArray);
            $User = $mockUser->loginUser(
                'random',
                'p455w0rd',
            );
    
            $this->assertEquals('random', $User[0]['Username']);
            try {
                $this->assertEquals('random', $User[0]['Username']);
            } catch (\Exception $error) {
                $this->assertEquals('Failed asserting that two strings are equal.', $error->getMessage());
            }
        }
 
    
        // deliberately fail test as user inputs wrong password for login
        public function testFail_loginUser_Wrong_Password()
        {
            $mockUser = $this->createMock(\App\Testing::class);
            $mockUserArray=[
                ['Username' => 'user1', 
                'Email' => 'user@gmail.com',
                'Password' => 'p455w0rd' 
                ],
            ];
    
            $mockUser ->expects($this->exactly(1)) ->method('loginUser')->willReturn($mockUserArray);
            $User = $mockUser->loginUser(
                'user1',
                'random',
            );
    
            $this->assertEquals('user1', $User[0]['Username']);
            try {
                $this->assertEquals('random', $User[0]['Password']);
            } catch (\Exception $error) {
                $this->assertEquals('Failed asserting that two strings are equal.', $error->getMessage());
            }
        }
    
        // deliberately fail test as user does not input username when trying to log in
        public function testFail_loginUser_Missing_Username()
        {
            try {
                $this->assertTrue($this->user->loginUser(
                    '',
                    'p455w0rd',
                ));
            } catch (\Exception $error) {
                $this->assertEquals('Failed asserting that false is true.', $error->getMessage());
            }
        }
    
        // deliberately fail test as user does not input password when trying to log in
        public function testFail_loginUser_Missing_Password()
        {
            try {
                $this->assertTrue($this->user->loginUser(
                    'user1',
                    '',
                ));
            } catch (\Exception $error) {
                $this->assertEquals('Failed asserting that false is true.', $error->getMessage());
            }
        }
    }
    

