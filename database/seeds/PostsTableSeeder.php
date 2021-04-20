<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            array([
                'title'=>'Первый пост',

                'intro'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun.',

                'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Id leo in vitae turpis massa sed elementum.
        Cursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.
        Habitant morbi tristique senectus et netus et. At elementum eu facilisis sed odio morbi quis.
        Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Id nibh tortor id aliquet lectus.'
            ],

                ['title'=>'Второй пост',

                    'intro'=>'short name of second posteget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus',

                    'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Id leo in vitae turpis massa sed elementum.
        Cursus .Cursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.
        Habitant morbi tristique senectus et netus et. At elementum eu facilisis sed odio morbi quis.
        Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Id nibh tortor id aliquet lectus.'
                ],

                ['title'=>'Третий пост',

                    'intro'=>'short name of third postCursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.',

                    'body'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua. Id leo in vitae turpis massa sed elementum.
        Cursus eget nunc scelerisque viverra mauris in. Tortor at auctor urna nunc id cursus.
        Habitant morbi tristique senectus et netus et. At elementum eu facilisis sed odio morbi quis.
        Maecenas ultricies mi eget mauris pharetra et ultrices neque ornare. Id nibh tortor id aliquet lectus.'
                ])
        );
    }
}
