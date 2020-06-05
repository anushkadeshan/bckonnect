<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dignissimos pariatur in.',
                'description' => 'Error voluptas corrupti nemo qui dolore debitis ut voluptatem itaque ipsum qui ut aut nostrum consequatur dolorum eos ut enim.',
                'price' => '1203',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:00',
                'updated_at' => '2020-05-25 10:14:38',
                'shop_id' => 6,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aut quod et.',
                'description' => 'Consequatur culpa et dolorum sint dolor totam nulla earum dolores repellat voluptas temporibus numquam quam et distinctio officia.',
                'price' => '1079',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:00',
                'updated_at' => '2020-05-27 09:48:18',
                'shop_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ut eum ipsam.',
                'description' => 'In quis debitis expedita commodi excepturi dicta laboriosam commodi et autem voluptates error laborum doloribus eos similique quam iusto minima molestiae repudiandae ea et repudiandae molestiae.',
                'price' => '2604',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:00',
                'updated_at' => '2020-05-27 09:48:34',
                'shop_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Eligendi amet.',
                'description' => 'Voluptatibus magnam esse tenetur ea ab similique suscipit tempore est maxime eum accusantium rerum quis reiciendis unde dolores ut aut deleniti.',
                'price' => '1857',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:00',
                'updated_at' => '2020-05-27 09:48:56',
                'shop_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Praesentium rerum.',
                'description' => 'Ut eos nam non quo asperiores culpa voluptatem molestiae neque provident placeat rerum.',
                'price' => '1429',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:00',
                'updated_at' => '2020-05-27 09:49:14',
                'shop_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Id excepturi.',
                'description' => 'Perferendis eveniet exercitationem omnis vel ut nesciunt tempore nihil rem ut illum iure eum aut aut aspernatur debitis.',
                'price' => '119',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Nulla quasi.',
                'description' => 'Incidunt ut velit repellat animi assumenda totam consectetur ullam sit ut tempora perspiciatis saepe earum explicabo a exercitationem consequuntur qui quo itaque aut nobis.',
                'price' => '2998',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Illum rerum.',
                'description' => 'Est soluta alias soluta in corrupti sint et aut eos qui eligendi a dolore et non a voluptatem.',
                'price' => '1468',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Repellat veritatis.',
                'description' => 'Qui inventore ut repellat eos molestiae cum et eveniet expedita adipisci numquam corrupti necessitatibus et neque enim et nemo.',
                'price' => '4651',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Sed velit possimus.',
                'description' => 'Aperiam quos expedita ipsam quae quaerat et repudiandae impedit voluptas fuga minus ipsam ut doloribus magni accusamus minima minima alias.',
                'price' => '521',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Error consectetur cupiditate.',
                'description' => 'Repellendus suscipit saepe et est ipsam assumenda non a voluptas quis dolorum alias voluptatem consectetur distinctio ut ratione eveniet similique dolorum.',
                'price' => '2559',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Tempora voluptatum libero.',
                'description' => 'Cupiditate et quam pariatur minus et est enim pariatur sed hic voluptatibus ab quod aut magnam aut architecto provident.',
                'price' => '2787',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Rerum sit sunt.',
                'description' => 'Quia vero quia repellendus consectetur non placeat fugit ea rerum corrupti aut ut tempora maiores quisquam excepturi dolorum rem.',
                'price' => '2177',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Fugiat autem.',
                'description' => 'Sint eos sit saepe ipsam ut qui consectetur eius excepturi quo quae tenetur error doloremque iure cumque iusto odio natus veritatis in.',
                'price' => '1662',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Alias magnam nihil.',
                'description' => 'Modi beatae beatae ratione possimus quidem nobis ea at libero odio assumenda voluptatem sequi possimus qui quisquam.',
                'price' => '1829',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Ipsa accusantium corporis.',
                'description' => 'Totam temporibus neque voluptas ipsam fugit inventore suscipit voluptas aut modi ullam aut distinctio sint aut ipsa.',
                'price' => '3480',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Velit quo.',
                'description' => 'Porro voluptate enim enim consequatur consequatur et perspiciatis sint quia et eaque recusandae ut vero quo molestias reiciendis.',
                'price' => '223',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Quo facilis.',
                'description' => 'Quo est iusto nobis et nulla eos dolores alias asperiores dolore facilis et magni at voluptas nihil consequatur similique nemo et quia quis eum molestiae recusandae sed.',
                'price' => '4255',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Neque ea suscipit.',
                'description' => 'Soluta quia sint temporibus in non modi sit ut velit voluptatibus eaque eos laborum voluptates facilis eos voluptatem qui autem non neque quo quasi sit.',
                'price' => '903',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Adipisci velit in.',
                'description' => 'Quia praesentium ea necessitatibus excepturi enim dolorem veniam similique libero tempora dolorem ut et vel assumenda blanditiis eaque ut rerum beatae pariatur eligendi dicta dignissimos neque quasi.',
                'price' => '721',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Hic id.',
                'description' => 'Voluptatem consequuntur quibusdam et nulla aut aliquam id at dolor sed dolor iure quos nulla et quis qui eius esse hic veniam recusandae non incidunt recusandae aut sed.',
                'price' => '4461',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Aperiam quibusdam iure.',
                'description' => 'Quia sit aut id sit reiciendis ipsum repellat hic est dicta sequi nesciunt est.',
                'price' => '2389',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Soluta natus.',
                'description' => 'Voluptatem omnis nihil sit animi unde qui quidem asperiores eum qui sapiente quia ut voluptas unde adipisci porro omnis commodi omnis inventore incidunt.',
                'price' => '2607',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Voluptate nam qui.',
                'description' => 'Qui doloribus nesciunt quia dolore animi totam et temporibus atque deserunt dolores dolore possimus repellat aliquid pariatur qui amet beatae consequuntur commodi voluptates nihil qui pariatur et.',
                'price' => '2849',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Beatae commodi.',
                'description' => 'Voluptatem eum molestiae temporibus consequatur nam excepturi sed omnis et quisquam voluptatem fuga officia error unde.',
                'price' => '1813',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Rem est.',
                'description' => 'Dolorem in alias sit est est et atque non non amet omnis aut temporibus quidem sint voluptatem fuga.',
                'price' => '3328',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Similique tempora.',
                'description' => 'Consequatur provident cupiditate ut consequatur porro qui eligendi ut qui sequi blanditiis occaecati esse.',
                'price' => '2245',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Incidunt voluptatem corrupti.',
                'description' => 'Accusantium corporis sapiente quam autem eos sunt rerum eum dolores amet ut consequatur rem eos quibusdam a aperiam omnis aut fugiat unde asperiores.',
                'price' => '1024',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Qui iusto.',
                'description' => 'Sit aut maiores sint quis quis quidem rerum accusamus modi ut architecto dolores tenetur nostrum impedit repellat sint alias ullam nihil omnis odio quo.',
                'price' => '4098',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Quis ullam sapiente.',
                'description' => 'Dignissimos ut omnis nostrum sit architecto et debitis laudantium sint accusamus aliquid quia aut.',
                'price' => '3129',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Doloribus temporibus.',
                'description' => 'Voluptatem dolorum minus nisi voluptas aperiam soluta aut nobis atque nihil quaerat fuga et qui quam exercitationem omnis labore voluptas sequi laudantium ratione alias cumque dolore.',
                'price' => '4572',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Quibusdam tenetur.',
                'description' => 'Repellat labore quia saepe qui ea et ea sed facere quia iure velit ullam quaerat aut laboriosam adipisci aut veritatis rerum dolorem nobis.',
                'price' => '3427',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Nesciunt quisquam.',
                'description' => 'Harum iusto necessitatibus sed aspernatur iste voluptatibus ipsa voluptas et accusantium harum voluptatem unde quasi possimus.',
                'price' => '1064',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'At reprehenderit.',
                'description' => 'Cumque nostrum sapiente nihil animi adipisci ut sunt labore enim hic iusto et et voluptatem qui asperiores dolorem iusto dicta ab voluptatem.',
                'price' => '323',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Libero perferendis autem.',
                'description' => 'Atque sint nemo explicabo laboriosam est iusto natus placeat ea sit cupiditate repellat aut quod odio et aliquam maxime recusandae odit.',
                'price' => '526',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Voluptas voluptates doloremque.',
                'description' => 'Provident aut eos ut recusandae labore dicta harum modi qui blanditiis illo et.',
                'price' => '1943',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Et molestias.',
                'description' => 'Nostrum cumque rem ullam sapiente veniam sint quam dolor rerum ea perspiciatis qui quia.',
                'price' => '1155',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Molestiae nemo.',
                'description' => 'Dolor sed et illo rerum eveniet autem ullam quasi ut non quis dolorem voluptas ad aut.',
                'price' => '2258',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'A sed.',
                'description' => 'Impedit et vel sed amet ducimus autem aut debitis voluptatem corporis beatae earum et voluptatem.',
                'price' => '1176',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Officiis voluptatem dicta.',
                'description' => 'Neque architecto minus quasi corporis praesentium impedit rem omnis est eligendi vel error quod ut id dignissimos animi aliquid ipsam ea doloremque.',
                'price' => '2972',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Ut velit.',
                'description' => 'Consequuntur explicabo qui est aspernatur repudiandae aspernatur ea et non quia esse rerum velit eos autem dolore.',
                'price' => '4650',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Ea exercitationem dolor.',
                'description' => 'Nihil a sit qui eaque ratione sequi mollitia animi odit repellendus voluptatibus cum soluta cumque veritatis praesentium perferendis.',
                'price' => '2455',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Hic aut.',
                'description' => 'Omnis molestiae asperiores possimus dolor facere ut non quis et excepturi nemo reiciendis voluptatem eligendi optio ut quos sint.',
                'price' => '2845',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Itaque eveniet.',
                'description' => 'Nesciunt corrupti sunt iusto voluptas ut molestias et a nulla aut cumque tempora.',
                'price' => '1508',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Minus molestiae.',
                'description' => 'Alias id incidunt eligendi aut voluptas dolorem eius explicabo aut quae pariatur pariatur et error nulla iste explicabo iure.',
                'price' => '4986',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Dolor soluta iure.',
                'description' => 'Perspiciatis cupiditate occaecati omnis dolores voluptatem non nobis assumenda sequi omnis voluptatem est magni dignissimos velit itaque similique sit.',
                'price' => '1444',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Velit nesciunt.',
                'description' => 'Nihil at sit veniam sed quos ut aut reiciendis assumenda impedit culpa autem cumque laudantium vel sint incidunt.',
                'price' => '969',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Excepturi sit.',
                'description' => 'Nisi sunt nobis voluptas odio sit expedita labore et amet vel facere ea beatae non ea.',
                'price' => '4676',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Sint ad.',
                'description' => 'Eaque eius sequi accusantium accusamus nobis consequatur ab est quia consectetur culpa cumque tempora quis et sunt odit quos tempora nihil.',
                'price' => '3297',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Quisquam autem quis.',
                'description' => 'Blanditiis quia quas suscipit id sint necessitatibus aliquam dicta eos quisquam qui ut veritatis et voluptatem autem ut repudiandae rerum in est.',
                'price' => '1250',
                'cover_img' => NULL,
                'created_at' => '2020-05-24 09:48:47',
                'updated_at' => '2020-05-24 09:48:47',
                'shop_id' => NULL,
            ),
        ));
        
        
    }
}